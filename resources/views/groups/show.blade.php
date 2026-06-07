@extends('layouts.app')

@section('content')
    <a href="{{ route('groups.index') }}" class="btn btn-secondary">← Назад к списку групп</a>
    
    <h1>Информация о группе: {{ $group->title }}</h1>
    <ul>
        <li><strong>ID:</strong> {{ $group->id }}</li>
        <li><strong>Дата начала обучения:</strong> {{ $group->start_from }}</li>
        <li><strong>Статус:</strong> {{ $group->is_active ? 'Активна' : 'Не активна' }}</li>
        <li><strong>Создано:</strong> {{ $group->created_at }}</li>
        <li><strong>Обновлено:</strong> {{ $group->updated_at }}</li>
    </ul>

    <h2>Список студентов группы</h2>
    <a href="{{ route('students.create', $group) }}" class="btn">Добавить студента в группу</a>

    @if($group->students->isEmpty())
        <p>В этой группе пока нет студентов.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($group->students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->surname }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <a href="{{ route('students.show', [$group, $student]) }}">Просмотр карточки</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
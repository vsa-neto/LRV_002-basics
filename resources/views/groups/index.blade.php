@extends('layouts.app')

@section('content')
    <h1>Список всех групп</h1>
    <a href="{{ route('groups.create') }}" class="btn">Создать новую группу</a>

    @if($groups->isEmpty())
        <p>Групп пока нет.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Дата начала</th>
                    <th>Статус</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groups as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->title }}</td>
                        <td>{{ $group->start_from }}</td>
                        <td>{{ $group->is_active ? 'Активна' : 'Не активна' }}</td>
                        <td>
                            <a href="{{ route('groups.show', $group) }}">Просмотр</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
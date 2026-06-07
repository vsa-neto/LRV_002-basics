@extends('layouts.app')

@section('content')
    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">← Назад к списку студентов</a>
    
    <h1>Карточка студента</h1>
    <ul>
        <li><strong>ID студента:</strong> {{ $student->id }}</li>
        <li><strong>Группа:</strong> {{ $group->title }} (ID: {{ $student->group_id }})</li>
        <li><strong>Фамилия:</strong> {{ $student->surname }}</li>
        <li><strong>Имя:</strong> {{ $student->name }}</li>
        <li><strong>Дата добавления:</strong> {{ $student->created_at }}</li>
        <li><strong>Дата обновления:</strong> {{ $student->updated_at }}</li>
    </ul>
@endsection
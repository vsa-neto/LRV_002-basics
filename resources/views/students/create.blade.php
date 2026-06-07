@extends('layouts.app')

@section('content')
    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">← Назад к группе</a>
    <h1>Добавление студента в группу: {{ $group->title }}</h1>

    <form action="{{ route('students.store', $group) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="surname">Фамилия студента</label>
            <input type="text" name="surname" id="surname" required>
        </div>

        <div class="form-group">
            <label for="name">Имя студента</label>
            <input type="text" name="name" id="name" required>
        </div>

        <button type="submit" class="btn">Добавить студента</button>
    </form>
@endsection
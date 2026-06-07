@extends('layouts.app')

@section('content')
    <a href="{{ route('groups.index') }}" class="btn btn-secondary">← Назад к списку</a>
    <h1>Создание новой группы</h1>

    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Название группы</label>
            <input type="text" name="title" id="title" required placeholder="Например, Группа FS-01">
        </div>

        <div class="form-group">
            <label for="start_from">Дата начала обучения</label>
            <input type="date" name="start_from" id="start_from" required>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="is_active" value="1" checked> Начала ли группа своё обучение (Активна)
            </label>
        </div>

        <button type="submit" class="btn">Создать группу</button>
    </form>
@endsection
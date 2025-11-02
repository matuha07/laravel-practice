@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p>Вы действительно хотите удалить студента <strong>{{ $student->first_name }} {{ $student->last_name }}</strong>?</p>

    <form action="{{ route('students.destroy', $student) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-2 py-1 bg-red-400 text-white rounded">Удалить</button>
        <a href="{{ route('students.index') }}" class="px-2 py-1 bg-gray-300 text-gray-800 rounded">Отмена</a>
    </form>
@endsection

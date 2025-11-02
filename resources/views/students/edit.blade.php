@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students.form', ['student' => $student])
        <button type="submit" class="">Обновить</button>
    </form>
@endsection

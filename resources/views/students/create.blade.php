@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-6 text-gray-800">{{ $title }}</h1>

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" class="space-y-6">
        @csrf
        @include('students.form', ['student' => null])

        <div class="flex items-center gap-3">
            <button type="submit"
                    class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition">
                Сохранить
            </button>
            <a href="{{ route('students.index') }}"
               class="px-4 py-2 border border-gray-400 text-gray-700 rounded hover:bg-gray-100 transition">
               Отмена
            </a>
        </div>
    </form>
</div>
@endsection

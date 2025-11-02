@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800">{{ $title }}</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-50 text-green-700 border border-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 text-right">
        <a href="{{ route('students.create') }}"
           class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 transition">
            Добавить студента
        </a>
    </div>

    <table class="w-full border border-gray-300 text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-3 py-2 text-left">ID</th>
                <th class="border px-3 py-2 text-left">Имя</th>
                <th class="border px-3 py-2 text-left">Фамилия</th>
                <th class="border px-3 py-2 text-left">Email</th>
                <th class="border px-3 py-2 text-left">Группа</th>
                <th class="border px-3 py-2 text-left">Дата рождения</th>
                <th class="border px-3 py-2 text-center">Действия</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr class="hover:bg-gray-50">
                    <td class="border px-3 py-2">{{ $student->id }}</td>
                    <td class="border px-3 py-2">{{ $student->first_name }}</td>
                    <td class="border px-3 py-2">{{ $student->last_name }}</td>
                    <td class="border px-3 py-2">{{ $student->email }}</td>
                    <td class="border px-3 py-2">{{ $student->group }}</td>
                    <td class="border px-3 py-2">{{ $student->birth_date }}</td>
                    <td class="border px-3 py-2 text-center space-x-2">
                        <a href="{{ route('students.edit', $student) }}"
                           class="px-2 py-1 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 text-xs">
                           Редактировать
                        </a>
                        <a href="{{ route('students.confirmDelete', $student) }}"
                           class="px-2 py-1 bg-red-400 text-white rounded hover:bg-red-500 text-xs">
                           Удалить
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-gray-500 py-4">Нет данных</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

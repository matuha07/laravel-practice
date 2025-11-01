@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">{{ $title }}</h1>

<table class="table-auto w-full border-collapse border border-gray-300">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Имя</th>
            <th class="border px-4 py-2">Фамилия</th>
            <th class="border px-4 py-2">Email</th>
            <th class="border px-4 py-2">Группа</th>
            <th class="border px-4 py-2">Дата рождения</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td class="border px-4 py-2">{{ $student->id }}</td>
            <td class="border px-4 py-2">{{ $student->first_name }}</td>
            <td class="border px-4 py-2">{{ $student->last_name }}</td>
            <td class="border px-4 py-2">{{ $student->email }}</td>
            <td class="border px-4 py-2">{{ $student->group }}</td>
            <td class="border px-4 py-2">{{ $student->birth_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

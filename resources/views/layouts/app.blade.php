<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between">
            <a href="{{ route('home') }}" class="font-bold text-lg">Student Management</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" >Главная</a></li>
                <li><a href="{{ route('about') }}" >О проекте</a></li>
                <li><a href="{{ route('contacts') }}" >Контакты</a></li>
            </ul>
        </div>
    </nav>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>
</html>

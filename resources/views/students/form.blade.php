<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Имя</label>
        <input type="text" name="first_name"
               value="{{ old('first_name', $student->first_name ?? '') }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-gray-200
                      @error('first_name') border-red-400 @enderror">
        @error('first_name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Фамилия</label>
        <input type="text" name="last_name"
               value="{{ old('last_name', $student->last_name ?? '') }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-gray-200
                      @error('last_name') border-red-400 @enderror">
        @error('last_name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email ?? '') }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-gray-200
                      @error('email') border-red-400 @enderror">
        @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Группа</label>
        <input type="text" name="group"
               value="{{ old('group', $student->group ?? '') }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-gray-200
                      @error('group') border-red-400 @enderror">
        @error('group')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Дата рождения</label>
        <input type="date" name="birth_date"
               value="{{ old('birth_date', $student->birth_date ?? '') }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-gray-200
                      @error('birth_date') border-red-400 @enderror">
        @error('birth_date')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

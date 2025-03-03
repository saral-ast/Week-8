<x-layout>
    <x-slot:heading>
        Edit A Job : {{ $job->title }}
    </x-slot:heading>

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-8 mt-1.5">
        <form method="POST" action="/jobs/{{ $job->id }}" class="mt-6">
            @csrf
            @method('PATCH')

            <!-- Job Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-900">Job Title</label>
                <div class="mt-2">
                    <input type="text" 
                    name="title" 
                    id="title" 
                    placeholder="Shift Leader" 
                    value="{{ $job->title }}"
                    required
                    class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                    <input type="text" 
                    name="salary" 
                    id="salary" 
                    placeholder="20000"
                    value="{{ $job->salary }}"
                    class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                @error('salary')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex justify-between space-x-4">
                <div class="flex space-x-4">
                    <button form = 'delete-form' class="bg-red-600 hover:bg-red-500 text-white font-semibold px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500">Delete</button>
                </div>
                <div>
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold text-gray-900 hover:underline border border-gray-300 px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">Cancel</a>
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Update
                </button>
                </div>
            </div>
        </form> 
        <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>

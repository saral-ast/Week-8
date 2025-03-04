<x-layout>
    <x-slot:heading>
        Edit Job: <span class="text-indigo-600">{{ $job->title }}</span>
    </x-slot:heading>

    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8 mt-8 border border-gray-100">
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-8">
            @csrf
            @method('PATCH')

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Job Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       placeholder="Shift Leader"
                       value="{{ $job->title }}"
                       required
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition duration-200 placeholder-gray-400 text-gray-700">
                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">Salary</label>
                <input type="text"
                       name="salary"
                       id="salary"
                       placeholder="20000"
                       value="{{ $job->salary }}"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition duration-200 placeholder-gray-400 text-gray-700">
                @error('salary')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center mt-10">
                <!-- Delete Button -->
                <button form="delete-form"
                        class="flex items-center justify-center px-6 py-3 bg-red-50 text-red-700 font-semibold rounded-lg hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Delete
                </button>

                <!-- Cancel and Update Buttons -->
                <div class="flex space-x-4">
                    <a href="/jobs/{{ $job->id }}"
                       class="flex items-center justify-center px-6 py-3 bg-gray-50 text-gray-700 font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-200">
                        Cancel
                    </a>
                    <button type="submit"
                            class="flex items-center justify-center px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293z" />
                        </svg>
                        Update
                    </button>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
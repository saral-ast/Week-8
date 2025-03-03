<x-layout>
    <x-slot:heading>
        Create A Job
    </x-slot:heading>

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-8 mt-1.5">
        <h2 class="text-2xl font-semibold text-gray-900">Create A New Job</h2>
        <p class="mt-2 text-sm text-gray-600">We just need a few details from you.</p>

        <form method="POST" action="/jobs" class="mt-6">
            @csrf

            <!-- Job Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-900">Job Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" placeholder="Shift Leader" required
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
                    <input type="text" name="salary" id="salary" placeholder="20000"
                        class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                @error('salary')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex justify-end space-x-4">
                <a href="/jobs" class="text-sm font-semibold text-gray-900 hover:underline border border-gray-300 px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">Cancel</a>
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Create Job
                </button>
            </div>
        </form>
    </div>
</x-layout>

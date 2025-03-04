<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-6 max-w-4xl mx-auto mt-1.5">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block group">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200">
                    <div class="mb-4">
                        <span class="text-sm font-semibold text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                            {{ $job->employer->name }}
                        </span>
                    </div>
                    <div class="space-y-2">
                        <h2 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $job->title }}
                        </h2>
                        <p class="text-lg text-gray-600">
                            Pays <span class="font-semibold text-green-600">{{ $job->salary }}</span> per year
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-8 p-4 flex justiy-between justify-around space-x-1.5">
        {{ $jobs->links() }}
    </div>
</x-layout>
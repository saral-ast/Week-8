<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
            <div class="space-y-4">
                @foreach($jobs as $job)  
                                  
                        <a href="/jobs/{{ $job['id'] }}" class="block px-5 py-6 border border-gray-200 text-xl">
                            <div class="border border-gray-200 rounded hover:underline hover:text-blue-500 text-sm">
                                {{ $job->employer->name }}
                            </div>
                            <div>
                                <h1><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year</h1>
                            </div>
                        </a>
                @endforeach
            </div> 
            <div class="p-4 text-3xl">{{ $jobs->links() }}</div>          
</x-layout>
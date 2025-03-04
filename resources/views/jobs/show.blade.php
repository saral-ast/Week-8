<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-6">
        <h1 class="text-2xl font-bold text-gray-900">Title: <span class="text-blue-600">{{ $job->title }}</span></h1>
        <p class="mt-3 text-lg text-gray-700">
            💰 Salary: <span class="text-green-600 font-semibold">{{ number_format($job->salary) }}</span> per year
        </p>
    </div>

    <div class="max-w-2xl mx-auto flex justify-between items-center mt-6">
        <a href="/jobs" class="text-blue-500 hover:underline flex items-center">
            ⬅ Go Back To Jobs
        </a> 
        @can('edit',$job)
            <x-button href="/jobs/{{ $job->id }}/edit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow-md">
                ✏️ Edit
            </x-button>  
        @endcan
        
    </div>

</x-layout>

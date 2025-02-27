<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
        <div class="mt-40 flex flex-col items-center p-1.5">
            <h1 class="text-2xl font-semibold  text-black hover:underline hover:text-blue-400">Title:{{ $job['title'] }}:</h1>
            <p class="mt-1.5">Description:{{ $job['description'] }}</p>
            <p class="mt-1.5">Loaction:{{ $job['location'] }}</p>
            <p class="mt-1.5">Salary:{{ $job['salary'] }}</p>
            <a href="/jobs" class="text-blue-500 hover:underline mt-1.5"><-Go Back To Jobs</a>     
        </div>
         
</x-layout>
<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
        <div class="px-4 py-10 mx-7">
            <h1 class="text-2xl font-semibold">Title:{{ $job['title'] }}:</h1>
            <p class="mt-1.5 py-2.5 px-2">Salary:{{ $job['salary'] }}</p>
            <a href="/jobs" class="text-blue-500 hover:underline py-4"><-Go Back To Jobs</a>     
        </div>
         
</x-layout>
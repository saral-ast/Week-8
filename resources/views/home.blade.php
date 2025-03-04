<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
        <div class="flex flex-col items-center  mt-60">
            <h1 class="text-4xl font-semibold text-center text-black">Welcome to the Laravel Starter Kit</h1>
            <h2 class="mt-4 text-gray-800 text-3xl">{{ $name }}</h2>
            <p class="mt-4 text-gray-600 text-2xl">This is the home page.</p>

        </div>      
      
</x-layout>
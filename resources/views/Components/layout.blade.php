<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"> 
            <img src="https://cdn.pixabay.com/photo/2016/12/28/08/15/hummingbird-1935665_960_720.png" class="h-12 rounded-2xl mr-1.5" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <x-nav-link href="/" :active="request()->is( '/')">Home</x-nav-link>
            </li>
            <li>
                    <x-nav-link href="/about" :active="request()->is( 'about')">About</x-nav-link>
            </li>
            <li>
                    <x-nav-link href="/contact" :active="request()->is( 'contact')">Contact</x-nav-link>
            </li>
            <li>
                     <x-nav-link href="/jobs" :active="request()->is( 'jobs')">Jobs</x-nav-link>
            </li>
            </ul>
         
        </div>
        </div>
       

        </nav>
        <header class="bg-white shadow">
            <div class="max-w-7xl px-4 py-6 sm:px-6 flex justify-between items-right">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                <x-button href="/jobs/create">+ Create Job</x-button>
            </div>
        </header>

        {{ $slot }}

      

        
    </body>
</html>

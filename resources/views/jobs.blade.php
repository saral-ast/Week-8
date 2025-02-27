<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
        <div>
            <ul class="mt-40 flex flex-col items-center">
                @foreach($jobs as $job)
                    <li class="mb-4 flex flex-row items-center ">
                        <a href="/jobs/{{ $job['id'] }}">
                            <h1 class="text-2xl font-semibold  text-black hover:underline hover:text-blue-400">{{ $job['title'] }}:</h1>
                        </a>
                    </li>

                @endforeach
            </ul>
            </ul>
        </div>      
</x-layout>
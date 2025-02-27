@props(['active' => false])

<a class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded-sm md:bg-transparent  {{ $active ? 'md:text-blue-700' : 'text-gray-900' }} md:hover:text-blue-700" aria-current="page" {{ $attributes }}>
    {{ $slot }}
</a>
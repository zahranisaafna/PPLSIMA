<!-- resources/views/components/side-link.blade.php -->
@props(['active' => false])

<a {{ $attributes->merge([
    'class' => 'flex items-center px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 ' . 
    ($active ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-blue-500 hover:text-white')
]) }}
   aria-current="{{ $active ? 'page' : false }}"
>
    {{ $slot }}
</a>
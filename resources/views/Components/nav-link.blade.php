@props(['active' => false, 'linkText', 'type' => 'anchor'])

@if($type === 'anchor')
    <a
       class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
       aria-page="{{ $active ? 'page' : 'false' }}"
       {{ $attributes }}
    >
        {{ ucfirst($linkText) }}
    </a>
@else
    <button
        type="{{$type}}"
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        aria-page="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ ucfirst($linkText) }}
    </button>
@endif

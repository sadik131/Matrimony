@props([
    'title'=>null,
    'type',
    'place'
])

<div>
    @if($title)
    <label class="block text-sm font-medium">{{ $title }} </label>

    @endif
    <input type={{ $type }} class="w-full mt-1 p-2 border border-gray-300 rounded outline-none" placeholder={{ $place }} />
</div>
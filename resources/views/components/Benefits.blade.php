@props([
    'title',
    'Items' => [],
])

<div>
    <h2 class="text-xl font-bold mb-4 text-teal-700">{{ $title }}</h2>
    <ul class="space-y-3 text-gray-700">
            @foreach ($Items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
</div>
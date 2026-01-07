@props([
    'title',
    'blogs' => []
])

<div>
    <h2 class="text-center text-xl md:text-3xl text-teal-800 pt-10 md:pt-20">
        {{ $title }}
    </h2>

    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

            @foreach($blogs as $blog)
                <x-BlogCard 
                    :image="$blog['image']"
                    :category="$blog['category']"
                    :title="$blog['title']"
                    :excerpt="$blog['excerpt']"
                    :link="$blog['link']"
                />
            @endforeach

        </div>
    </div>
</div>
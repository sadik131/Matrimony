@props(['faqs' => []])

<div class="max-w-4xl mx-auto px-4 py-10 md:py-20"
     x-data="{ active: 0 }">

    <div class="divide-y divide-gray-200">
        @foreach($faqs as $index => $faq)
            <x-faq-item
                :question="$faq['question']"
                :answer="$faq['answer']"
                :index="$index"
            />
        @endforeach
    </div>

</div>

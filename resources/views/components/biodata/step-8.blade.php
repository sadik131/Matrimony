<div x-show="step === 8" class="space-y-6 max-w-xl">

    {{-- বয়স (Range Slider – intentionally component করা হয়নি) --}}
    <div class="rounded-lg">
        <label class="text-gray-600 text-sm">বয়স</label>

        <div class="relative mt-2 slider-container">
            <input type="range" id="minRange" min="18" max="60" value="18">
            <input type="range" id="maxRange" min="18" max="60" value="60">

            <div class="relative w-full h-2 bg-gray-200 rounded-md">
                <div
                    id="rangeTrack"
                    class="absolute h-2 bg-linear-to-r from-blue-900 to-blue-400 rounded-md">
                </div>
            </div>
        </div>

        <div class="flex justify-between text-gray-600">
            <span id="minValue">18</span>
            <span id="maxValue">60</span>
        </div>
    </div>

    {{-- গাত্রবর্ণ --}}
    <x-form.select label="গাত্রবর্ণ" required>
        <option>শ্যামলা</option>
        <option>কালো</option>
        <option>উজ্জল শ্যামলা</option>
        <option>ফর্সা</option>
        <option>উজ্জল ফর্সা</option>
    </x-form.select>

    <p class="text-xs pt-2 text-teal-600">
        যে কোনো' বা 'মানানসই' এই শব্দ দুইটি লিখা যাবে না।
        এখানে নিজের মত লিখতে পারবেন এবং পাশাপাশি একাধিক সিলেক্ট করতে পারবেন।
    </p>

    {{-- উচ্চতা --}}
    <x-form.input
        label="উচ্চতা"
        required
        placeholder="৫'১&quot; - ৫'১০&quot;"
        hint="যে কোনো' বা 'মানানসই' এই শব্দ দুইটি লিখা যাবে না।"
    />

    {{-- শিক্ষাগত যোগ্যতা --}}
    <x-form.input
        label="শিক্ষাগত যোগ্যতা"
        required
    />

    {{-- জেলা --}}
    <x-form.input
        label="জেলা"
        required
        hint="যে কোনো জেলা' লিখবেন না। পরিবারের সাথে পরামর্শ করে নির্দিষ্ট জেলাগুলো উল্লেখ করুন।"
    />

    {{-- বৈবাহিক অবস্থা --}}
    <x-form.select label="বৈবাহিক অবস্থা" required>
        <option>অবিবাহিত</option>
        <option>ডিভোর্সড</option>
        <option>বিধবা</option>
    </x-form.select>

    {{-- পেশা --}}
    <x-form.input
        label="পেশা"
        required
        hint="যে কোনো' বা 'মানানসই' বা 'যে কোনো হালাল পেশা' এই বাক্যগুলো লিখা যাবে না।"
    />

    {{-- অর্থনৈতিক অবস্থা --}}
    <x-form.input
        label="অর্থনৈতিক অবস্থা"
        required
        hint="যে কোনো' না লিখে নির্দিষ্টভাবে লিখুন"
    />

    {{-- প্রত্যাশিত গুণাবলী --}}
    <x-form.textarea
        label="জীবনসঙ্গীর যেসব বৈশিষ্ট্য বা গুণাবলী প্রত্যাশা করেন"
        required
        rows="3"
        hint="আপনার প্রত্যাশা বিস্তারিত লিখতে পারেন। কোন বিশেষ শর্ত থাকলে উল্লেখ করতে পারেন।"
    />

</div>

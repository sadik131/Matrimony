<div x-show="step === 1" class="space-y-6 max-w-xl">

    {{-- বায়োডাটার ধরন --}}
    <x-form.select label="বায়োডাটার ধরন" required>
        <option>পাত্রের বায়োডাটা</option>
        <option>পাত্রীর বায়োডাটা</option>
    </x-form.select>

    {{-- বৈবাহিক অবস্থা --}}
    <x-form.select label="বৈবাহিক অবস্থা" required>
        <option>অবিবাহিত</option>
        <option>বিবাহিত</option>
        <option>ডিভোর্সড</option>
        <option>বিধবা</option>
        <option>বিপত্নীক</option>
    </x-form.select>

    {{-- জন্ম তারিখ --}}
    <x-form.input
        type="date"
        label="জন্ম তারিখ"
        required
        hint='অবশ্যই আসল জন্মসন দিবেন। জন্মনিবন্ধন বা জাতীয় পরিচয়পত্রের <span class="font-semibold">কমানো/অসত্য বয়স দেয়া হলে এপ্রুভ করা হবে না।</span>'
    />

    {{-- উচ্চতা --}}
    <x-form.select label="উচ্চতা" required>
        <option>৫&apos;৪&quot;</option>
        <option>৫&apos;৫&quot;</option>
        <option>৫&apos;৬&quot;</option>
        <option>৫&apos;৭&quot;</option>
        <option>৫&apos;৮&quot;</option>
        <option>৫&apos;৯&quot;</option>
    </x-form.select>

    {{-- গাত্রবর্ণ --}}
    <x-form.select label="গাত্রবর্ণ" required>
        <option>উজ্জ্বল শ্যামলা</option>
        <option>কালো</option>
        <option>শ্যামলা</option>
        <option>ফর্সা</option>
        <option>উজ্জ্বল ফর্সা</option>
    </x-form.select>

    {{-- ওজন --}}
    <x-form.select label="ওজন" required>
        <option>৪৬ কেজি</option>
        <option>৪৭ কেজি</option>
        <option>৪৮ কেজি</option>
        <option>৪৯ কেজি</option>
        <option>৫০ কেজি</option>
        <option>৫১ কেজি</option>
    </x-form.select>

    {{-- রক্তের গ্রুপ --}}
    <x-form.select label="রক্তের গ্রুপ" required>
        <option>O+</option>
        <option>A+</option>
        <option>AB-</option>
        <option>A-</option>
        <option>O-</option>
        <option>AB</option>
    </x-form.select>

    {{-- জাতীয়তা --}}
    <x-form.select label="জাতীয়তা" required>
        <option>বাংলাদেশী</option>
        <option>ভারতীয়</option>
    </x-form.select>

</div>

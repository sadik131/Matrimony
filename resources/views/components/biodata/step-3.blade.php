<div x-show="step === 3" class="space-y-6 max-w-xl">

    {{-- শিক্ষাগত যোগ্যতা --}}
    <x-form.select label="শিক্ষাগত যোগ্যতা" required>
        <option>নির্বাচন করুন</option>
        <option>শিক্ষাগত যোগ্যতা</option>
        <option>জেএসসি</option>
        <option>এসএসসি</option>
        <option>এইচএসসি</option>
        <option>স্নাতক</option>
        <option>স্নাতকোত্তর</option>
    </x-form.select>

    {{-- অন্যান্য শিক্ষাগত যোগ্যতা --}}
    <x-form.textarea label="অন্যান্য শিক্ষাগত যোগ্যতা" required rows="5"
        hint="শিক্ষাপ্রতিষ্ঠানের নাম, বিষয়, পাসের সন সহ বিস্তারিত লিখবেন। কিছু না থাকলে ঘরটি ফাঁকা রাখবেন" />


    {{-- দ্বীনি শিক্ষাগত পদবী সমূহ --}}
    <x-form.select label="দ্বীনি শিক্ষাগত পদবী সমূহ" required>
        <option></option>
        <option>হাফেজ</option>
        <option>মাওলানা</option>
        <option>মুফতি</option>
        <option>মুফাসসির</option>
        <option>এইচএসসি</option>
        <option>আদিব</option>
        <option>ক্বারী</option>
    </x-form.select>

    <p class="text-xs pt-2 text-teal-600">
        আপনার কোনো পদবী না থাকলে ঘরটি ফাঁকা রাখুন। থাকলে এক বা একাধিক নির্বাচন করতে পারবেন।
    </p>

</div>
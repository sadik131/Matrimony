<div x-show="step === 6" class="space-y-6 max-w-xl">

    {{-- পেশা --}}
    <x-form.select label="পেশা" required>
        <option>নির্বাচন করুন</option>
        <option>ইঞ্জিনিয়ার</option>
        <option>ব্যবসায়ী</option>
        <option>শিক্ষক</option>
        <option>মাদ্রাসা শিক্ষক</option>
        <option>ইমাম</option>
    </x-form.select>

    {{-- পেশার বিস্তারিত বিবরণ --}}
    <x-form.textarea
        label="পেশার বিস্তারিত বিবরণ"
        required
        rows="3"
        hint="আপনার কর্মস্থল কোথায়, আপনি কোন প্রতিষ্ঠানে কাজ করছেন, আপনার উপার্জন হালাল কি না ইত্যাদি লিখতে পারেন।"
    />

    {{-- মাসিক আয় --}}
    <x-form.input
        label="মাসিক আয়"
        required
    />

</div>

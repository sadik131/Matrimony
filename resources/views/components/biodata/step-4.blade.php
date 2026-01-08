<div x-show="step === 4" class="space-y-6 max-w-xl">

    {{-- পিতার নাম --}}
    <x-form.input label="পিতার নাম" required hint="শুধুমাত্র কর্তৃপক্ষের জন্য" />

    {{-- পিতা জীবিত কিনা --}}
    <x-form.select label="আপনার পিতা কি জীবিত?" required>
        <option>নির্বাচন করুন</option>
        <option>জী, জীবিত</option>
        <option>না, মৃত</option>
    </x-form.select>

    {{-- পিতার পেশার বিবরণ --}}
    <x-form.input label="পিতার পেশার বিবরণ" required
        hint="শুধু 'চাকরিজীবী' বা 'ব্যবসায়ী' এভাবে লিখবেন না। চাকরিজীবী হলে প্রতিষ্ঠানের ধরণ এবং পদবী, আর ব্যবসায়ী হলে কী ধরণের ব্যবসা করেন/করতেন ইত্যাদি বিস্তারিত লিখবেন।" />

    {{-- মাতার নাম --}}
    <x-form.input label="মাতার নাম" required hint="শুধুমাত্র কর্তৃপক্ষের জন্য" />

    {{-- মাতা জীবিত কিনা --}}
    <x-form.select label="আপনার মাতা কি জীবিত?" required>
        <option>নির্বাচন করুন</option>
        <option>জী, জীবিত</option>
        <option>না, মৃত</option>
    </x-form.select>

    {{-- মাতার পেশার বিবরণ --}}
    <x-form.input label="মাতার পেশার বিবরণ" required hint="শুধুমাত্র কর্তৃপক্ষের জন্য" />

    {{-- ভাই সংখ্যা --}}
    <x-form.select label="আপনার কতজন ভাই আছে?" required>
        <option>নির্বাচন করুন</option>
        <option>ভাই নেই</option>
        <option>১</option>
        <option>২</option>
        <option>৩</option>
        <option>8</option>
    </x-form.select>

    {{-- ভাইদের তথ্য --}}
    <x-form.textarea label="ভাইদের তথ্য" required rows="3"
        hint="শিক্ষাগত যোগ্যতা, বৈবাহিক অবস্থা এবং পেশা লিখবেন। একাধিক ভাই থাকলে কমা দিয়ে নিচের লাইনে লিখবেন।" />


    {{-- বোন সংখ্যা --}}
    <x-form.select label="আপনার কতজন বোন আছে?" required>
        <option>নির্বাচন করুন</option>
        <option>বোন নেই</option>
        <option>১</option>
        <option>২</option>
        <option>৩</option>
        <option>8</option>
    </x-form.select>

    {{-- বোনদের তথ্য --}}
    <x-form.textarea label="বোনদের তথ্য" required rows="3"
        hint="শিক্ষাগত যোগ্যতা, বৈবাহিক অবস্থা এবং পেশা লিখবেন। একাধিক ভাই থাকলে কমা দিয়ে নিচের লাইনে লিখবেন।" />

    <x-form.textarea label="চাচা মামাদের পেশা" required rows="3" />

    {{-- পারিবারিক অর্থনৈতিক অবস্থা --}}
    <x-form.select label="পারিবারিক অর্থনৈতিক অবস্থা" required>
        <option>নির্বাচন করুন</option>
        <option>উচ্চবিত্ত</option>
        <option>উচ্চ মধ্যবিত্ত</option>
        <option>মধ্যবিত্ত</option>
        <option>নিম্ন মধ্যবিত্ত</option>
    </x-form.select>

    {{-- অর্থনৈতিক অবস্থার বর্ণনা --}}
    <x-form.textarea label="অর্থনৈতিক অবস্থার বর্ণনা" required rows="3"
        hint="বিস্তারিত উল্লেখ করবেন যেমনঃ বসত বাড়ি (ভাড়া নাকি নিজস্ব)..." />

    {{-- পারিবারিক দ্বীনি পরিবেশ --}}
    <x-form.textarea label="পারিবারিক দ্বীনি পরিবেশ কেমন?" required rows="3"
        hint="আপনার পরিবারের সদস্যগণের দ্বীন পালন এবং মাহরাম নন-মাহরাম মেনে চলার বিষয়ে লিখবেন।" />

</div>
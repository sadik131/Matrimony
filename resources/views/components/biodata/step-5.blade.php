<div x-show="step === 5" class="space-y-6 max-w-xl">

    <x-form.input label="ঘরের বাহিরে সাধারণত কি ধরণের পোষাক পরেন?" required
        hint='পাত্রীর ক্ষেত্রে এভাবে লিখতে পারেন- "কালো বোরকা ও হাত-পা মোজা সহ নিকাব পরি" অথবা "বোরকা ও হিজাব পরি, নিকাব পরি না" অথবা "হিজাবের সাথে মাস্ক পরি, নিকাব পরা হয় না" অথবা "সালোয়ার কামিজ পরি, নিকাব পরা হয় না"' />

    <x-form.input label="সুন্নতি দাড়ি আছে কি না? কবে থেকে রেখেছেন?" required
        hint="কত বছর যাবৎ দাড়ি রেখেছেন তা স্পষ্ট করে লিখুন। আপনার যদি বায়োলজিক্যাল কারণে দাড়ি কম উঠে, তাও উল্লেখ করতে হবে।" />

    <x-form.input label="টাখনুর উপরে কাপড় পরেন?" required />

    <x-form.input label="প্রতিদিন পাঁচ ওয়াক্ত নামাজ পড়েন কি? কবে থেকে পড়ছেন?" required
        hint='"হ্যাঁ" অথবা "না" দিয়ে স্পষ্ট করে উত্তর লিখুন। কত বছর যাবৎ পাঁচ ওয়াক্ত নামায পড়ছেন, তা অবশ্যই উল্লেখ করতে হবে।' />

    <x-form.input label="সাধারণত সপ্তাহে কত ওয়াক্ত নামায আপনার কাযা হয়?" required />

    <x-form.input label="মাহরাম/নন-মাহরাম মেনে চলেন কি?" required />

    <x-form.input label="শুদ্ধভাবে কুরআন তিলওয়াত করতে পারেন?" required />

    <x-form.select label="কোন ফিকহ অনুসরণ করেন?" required>
        <option>নির্বাচন করুন</option>
        <option>হানাফি</option>
        <option>মালিকি</option>
        <option>শাফিঈ</option>
        <option>হাম্বলি</option>
        <option>আহলে হাদীস / সালাফি</option>
    </x-form.select>

    <x-form.input label="নাটক / সিনেমা / সিরিয়াল / গান এসব দেখেন বা শুনেন?" required />

    <x-form.input label="আপনার মানসিক বা শারীরিক কোনো রোগ আছে?" required />

    <x-form.input label="দ্বীনের কোন বিশেষ মেহনতে যুক্ত আছেন?" required hint="যেমনঃ তাবলীগ ইত্যাদি।" />

    <x-form.input label="মাজার সম্পর্কে আপনার ধারণা বা বিশ্বাস কি?" required />

    {{-- এই দুইটা লম্বা উত্তর → textarea --}}
    <x-form.textarea label="আপনার পড়া হয়েছে এমন অন্তত ৩ টি ইসলামি বই এর নাম লিখুন" required rows="3" />

    <x-form.textarea label="আপনার পছন্দের অন্তত ৩ জন আলেমের নাম লিখুন" required rows="3" />

    <x-form.select label="আপনার ক্ষেত্রে প্রযোজ্য হয় এমন ক্যাটাগরি সিলেক্ট করুন। (অন্যথায় ঘরটি ফাঁকা রাখুন)" required>
        <option></option>
        <option>প্রতিবন্ধী</option>
        <option>বন্ধ্যা</option>
        <option>নওমুসলিম</option>
        <option>এতিম</option>
        <option>২য় স্ত্রী হতে আগ্রহী</option>
    </x-form.select>

    <p class="text-xs pt-2 text-teal-600">
        উদাহরণঃ আপনি নওমুসলিম হলে নওমুসলিম ক্যাটাগরি সিলেক্ট করুন।
        আপনি তাবলীগের সাথে যুক্ত থাকলে তাবলীগ ক্যাটাগরি সিলেক্ট করুন।
        একাধিক ক্যাটাগরি সিলেক্ট করা যাবে।
    </p>

    <x-form.textarea label="নিজের শখ, পছন্দ-অপছন্দ, রুচিবোধ, স্বপ্ন ইত্যাদি বিষয়ে লিখুন" required rows="4"
        hint="যত বিস্তারিত লিখবেন, অপরপক্ষের জন্য আপনার সম্পর্কে জানা সহজ হবে এবং প্রস্তাব পাওয়ার সম্ভাবনা বৃদ্ধি পাবে।" />

    <x-form.input label="পাত্রের মোবাইল নাম্বার" required
        hint="বায়োডাটা ভেরিফিকেশনের জন্য পাত্রের ব্যক্তিগত মোবাইল নাম্বার নেয়া হচ্ছে। এটি কর্তৃপক্ষ ব্যতীত কারো কাছে প্রকাশ করা হবে না।" />

    {{-- ছবি আপলোড --}}
    <div>
        <label for="uploadFile1"
            class="bg-white text-slate-500 font-semibold text-base rounded h-24 w-full flex flex-col items-center justify-center cursor-pointer border-2 border-teal-500 border-dashed mt-5">
            Upload file
            <input type="file" id="uploadFile1" class="hidden" />
        </label>

        <p class="text-xs pt-2 text-teal-600 font-semibold">
            পাসপোর্ট সাইজ বা এডিট করা বা দূর থেকে তোলা ছবি গ্রহণযোগ্য নয়।
            <span class="font-normal">
                ছবিটি শুধুমাত্র আইডেন্টিটি ভেরিফিকেশনের জন্য ব্যবহার করা হবে।
            </span>
        </p>
    </div>

</div>
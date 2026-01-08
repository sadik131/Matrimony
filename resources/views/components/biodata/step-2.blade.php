<div x-show="step === 2" class="space-y-6 max-w-xl">

    {{-- স্থায়ী ঠিকানা --}}
    <x-form.select label="স্থায়ী ঠিকানা" required>
        <option value="">জেলা নির্বাচন করুন</option>
        <option value="dhaka">ঢাকা</option>
        <option value="gazipur">গাজীপুর</option>
        <option value="narayanganj">নারায়ণগঞ্জ</option>
        <option value="chittagong">চট্টগ্রাম</option>
        <option value="sylhet">সিলেট</option>
        <option value="khulna">খুলনা</option>
    </x-form.select>

    {{-- বর্তমান ঠিকানা --}}
    <x-form.select label="বর্তমান ঠিকানা" required>
        <option value="">জেলা নির্বাচন করুন</option>
        <option value="dhaka">ঢাকা</option>
        <option value="gazipur">গাজীপুর</option>
        <option value="narayanganj">নারায়ণগঞ্জ</option>
        <option value="chittagong">চট্টগ্রাম</option>
        <option value="sylhet">সিলেট</option>
        <option value="khulna">খুলনা</option>
    </x-form.select>

    {{-- কোথায় বড় হয়েছেন --}}
    <x-form.input
        label="কোথায় বড় হয়েছেন?"
        required
    />

</div>

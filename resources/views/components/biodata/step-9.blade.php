<div x-show="step === 9" class="space-y-6 max-w-xl">

    <x-form.select required>
        <x-slot:label>
            <span class="font-medium text-lg">mominjoti.com</span>
            ওয়েবসাইটে বায়োডাটা জমা দিচ্ছেন, তা আপনার অভিভাবক জানেন?
        </x-slot:label>

        <option>নির্বাচন করুন</option>
        <option>হ্যাঁ</option>
        <option>না</option>
    </x-form.select>

    <x-form.select
        label="আল্লাহ'র শপথ করে সাক্ষ্য দিন, যে তথ্যগুলো দিয়েছেন সব সত্য?"
        required
    >
        <option>নির্বাচন করুন</option>
        <option>হ্যাঁ</option>
        <option>না</option>
    </x-form.select>

    <x-form.select required>
        <x-slot:label>
            কোনো মিথ্যা তথ্য প্রদান করলে দুনিয়াবী আইনগত এবং আখিরাতের দায়ভার
            <span class="font-medium text-lg">mominjoti.com</span>
            কর্তৃপক্ষ নিবে না। আপনি কি সম্মত?
        </x-slot:label>

        <option>নির্বাচন করুন</option>
        <option>হ্যাঁ</option>
        <option>না</option>
    </x-form.select>

</div>

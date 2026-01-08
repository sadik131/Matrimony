<div class="flex justify-between py-5">

    <button
        x-show="step > 1"
        @click="step--"
        class="cursor-pointer bg-gray-300 text-gray-700 px-6 py-2 rounded"
    >
        পূর্ববর্তী
    </button>

    <button
        x-show="step < 10"
        @click="step++"
        class="cursor-pointer ml-auto bg-teal-600 text-white px-6 py-2 rounded"
    >
        পরবর্তী
    </button>

    <button
        x-show="step === 10"
        class="cursor-pointer ml-auto text-white px-6 py-2 rounded
               bg-linear-to-r from-teal-500 to-sky-500"
    >
        সম্পূর্ণ করুন
    </button>

</div>

@props([
    'lable',
    'type'=>'text',
    'placeHolder',
    'show'=>false
])

<div>
    <label class="block mb-1 text-sm font-medium text-gray-700 ">{{$lable}}</label>
    <input type="{{ $type }}" placeholder="{{ $placeHolder }}" class="w-full bg-white border border-[#E5E7EB] px-4 py-2 rounded text-sm outline-teal-500" />
    <p x-show="{{ $show ? 'true' : 'false' }}" class="text-xs text-gray-500 mt-1">যার সাথে যোগাযোগ করতে চাচ্ছেন। একাধিক হলে কমা দিয়ে লিখুন।</p>
</div>
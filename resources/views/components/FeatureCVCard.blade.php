@props([
    'image',
    'code',
    'status',
    'location',
    'birth_year',
    'profession',
    'details_link'
])


<div class="border border-gray-200 rounded-lg bg-white">

    <!-- Header -->
    <div class="flex justify-between items-center bg-teal-100 p-4">
        <img class="h-24 w-24" src="{{ $image }}" alt="">

        <div class="text-center">
            <h1 class="text-xl font-bold text-gray-800">বায়োডাটা নাম্বার</h1>
            <p class="text-sm text-gray-600">{{ $code }}</p>
        </div>
    </div>

    <hr class="border-t border-gray-300 mb-2">

    <!-- Info -->
    <div class="p-4">
        <table class="w-full mb-4 text-[#374151]">
            <tbody>
                <tr class="border-b border-t border-gray-200">
                    <td class="py-2 text-sm border-r border-r-[#E5E7EB]">বৈবাহিক অবস্থা</td>
                    <td class="py-2 text-sm text-right">{{ $status }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="py-2 text-sm border-r border-r-[#E5E7EB]">বর্তমান ঠিকানা</td>
                    <td class="py-2 text-sm text-right">{{ $location }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="py-2 text-sm border-r border-r-[#E5E7EB]">জন্মসন (আসল)</td>
                    <td class="py-2 text-sm text-right">{{ $birth_year }}</td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="py-2 text-sm border-r border-r-[#E5E7EB]">পেশা</td>
                    <td class="py-2 text-sm text-right">{{ $profession }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Actions -->
    <div class="flex justify-center gap-7 pb-5">
        {{-- <a href="{{ $details_link }}"
           class="bg-teal-500 p-3 rounded-sm text-sm font-semibold text-white">
            বায়োডাটা দেখুন
        </a> --}}

        <div class="bg-teal-500 p-3 rounded-sm ">
          <a href="{{ $details_link }}" class="text-sm font-semibold text-white">বায়োডাটা দেখুন</a>
        </div>

        <button class="bg-teal-500 px-6 py-3 rounded-sm text-white">
            <i class="fa fa-heart"></i>
        </button>
    </div>
</div>
@extends('layout.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="max-w-md w-full text-center space-y-6">

        <h2 class="text-2xl font-bold text-gray-800">
            কিভাবে একাউন্ট তৈরি করতে চান?
        </h2>

        {{-- Google --}}
        <x-google-button>
            Google দিয়ে একাউন্ট তৈরি করুন
        </x-google-button>

        {{-- Email --}}
        <a href="/login">
            <x-primary-button>
                <i class="fa fa-envelope text-[#FC5158] text-xl mr-2"></i>
                ইমেইল দিয়ে একাউন্ট তৈরি করুন
            </x-primary-button>
        </a>

        <p class="text-sm text-gray-600 mt-6">
            বুঝতে পারছেন না? এই ভিডিওটি দেখুন
        </p>

        <button class="flex items-center justify-center w-full py-3 cursor-pointer bg-white border border-[#E5E7EB] rounded-full shadow-sm hover:shadow-md transition">
            <i class="fa-brands fa-youtube text-red-600 text-2xl"></i>

            <span class="text-gray-700 font-medium">
                যেভাবে বায়োডাটা তৈরি করবেন
            </span>
        </button>

    </div>
</div>
@endsection

@extends('layout.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="max-w-md w-full text-center space-y-6">

        <h2 class="text-2xl font-bold text-gray-800">
            একাউন্টে লগইন করুন
        </h2>

        {{-- Google --}}
        <x-google-button>
            Google দিয়ে লগইন করুন
        </x-google-button>

        {{-- Email --}}
        <x-email-button>
            ইমেইল দিয়ে লগইন করুন
        </x-email-button>

        <p class="text-sm text-gray-600 mb-2">
            অ্যাকাউন্ট নেই?
        </p>

        {{-- Create account --}}
        <a href="/signin">
            <x-primary-button>
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                একাউন্ট তৈরি করুন
            </x-primary-button>
        </a>

    </div>
</div>
@endsection

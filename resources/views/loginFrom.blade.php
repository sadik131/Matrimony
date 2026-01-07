<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @extends('layout.app')


    @section('content')
     
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-16 py-10 md:mt-32 md:mb-20">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">একাউন্টে লগইন করুন</h2>

    <form>
      <!-- Mobile or Email -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm mb-2" for="email">মোবাইল নাম্বার অথবা ইমেইল</label>
        <div class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-white">
          <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 2H8a2 2 0 00-2 2v16l4-4h6a2 2 0 002-2V4a2 2 0 00-2-2z"/>
          </svg>
          <input type="text" id="email" placeholder="মোবাইল নাম্বার অথবা ইমেইল লিখুন" class="w-full focus:outline-none text-gray-700" />
        </div>
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm mb-2" for="password">পাসওয়ার্ড</label>
        <div class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-white">
          <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.38 0 2.5-1.12 2.5-2.5S13.38 6 12 6s-2.5 1.12-2.5 2.5S10.62 11 12 11z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 13c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z" />
          </svg>
          <input type="password" id="password" placeholder="পাসওয়ার্ড লিখুন" class="w-full focus:outline-none text-gray-700" />
        </div>
      </div>

      <!-- Remember Me & Forgot -->
      <div class="flex items-center justify-between mb-6">
        <label class="flex items-center text-sm text-gray-700">
          <input type="checkbox" class="mr-2" />
          মনে রাখুন
        </label>
        <a href="#" class="text-sm text-teal-600 hover:underline">পাসওয়ার্ড ভুলে গেছেন?</a>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full flex items-center cursor-pointer justify-center gap-2 py-3 text-white font-semibold rounded-full bg-gradient-to-r from-teal-500 to-sky-500 hover:opacity-90 shadow-lg">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A11.953 11.953 0 0112 15c2.206 0 4.262.635 5.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        লগইন করুন
      </button>
    </form>
  </div>

    @endsection

</body>

</html>
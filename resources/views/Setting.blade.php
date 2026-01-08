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

        <div class="flex overflow-hidden mt-20">

            <x-dashboard.layout>

                {{-- SIDEBAR --}}
                <x-dashboard.sidebar />

                {{-- MAIN CONTENT --}}
                <div class="flex-1 flex flex-col">
                    {{-- TOGGLE BUTTON --}}

                    <div class="">
                        <x-dashboard.sidebar-toggle />
                    </div>
                    {{-- content here --}}
                    <div class="min-h-screen bg-gray-50 p-6">
                        <form class="space-y-5 max-w-xl mx-auto mt-4">
                            <!-- Heading -->
                            <h2 class="text-3xl  text-center text-teal-800 mb-6">Account Setting </h2>
                            <h3 class="border-b border-b-[#E5E7EB] pb-3 text-xl font-semibold text-gray-700">Change Password
                            </h3>
                            <x-dashboard.form-input-icon type="password" placeholder="New Password" />
                            <x-dashboard.form-input-icon type="password" placeholder="Confirm New Password" />
                            <x-dashboard.gradient-button full>
                                Update Password
                            </x-dashboard.gradient-button>
                            <h3 class="border-b border-b-[#E5E7EB] pb-3 text-xl font-semibold text-gray-700">Delete Biodata
                            </h3>
                            <p class="text-gray-600 text-sm font-medium block">
                                If it is temporary you can hide it from the sidebar menu. This action will be permanently
                                deleted your biodata.
                            </p>

                            <div class="flex items-center mt-5">
                                <input type="checkbox" class="w-4 h-4 shrink-0" />
                                <label class="text-sm text-slate-600 ml-3">
                                    I understand and would like to delete this biodata.
                                </label>
                            </div>

                            <x-dashboard.gradient-button>
                                Delete Biodata
                            </x-dashboard.gradient-button>

                        </form>

                    </div>
                </div>
                </x-layout>
        </div>


    @endsection

</body>

</html>
@props([
    'emptyText' => 'কোনো তথ্য পাওয়া যায়নি'
])

<div class="overflow-x-auto">
    <table class="min-w-full shadow-xl">
        
        {{-- TABLE HEAD --}}
        <thead>
            <tr class="bg-white text-left text-sm text-gray-700 shadow rounded-md border-b border-[#E5E7EB]">
                {{ $head }}
            </tr>
        </thead>

        {{-- TABLE BODY --}}
        <tbody>
            {{ $body }}
        </tbody>

    </table>
</div>

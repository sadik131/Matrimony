<div>
    <label class="text-gray-600 text-sm">
        {{ $label }} @if($required)<span class="text-red-500">*</span>@endif
    </label>

    <input
        type="{{ $type ?? 'text' }}"
        class="w-full border border-gray-300 rounded-md p-3 bg-gray-50 text-gray-600 text-xs outline-none focus:border-teal-500"
    />

    @if(!empty($hint))
    <p class="text-xs pt-2 text-teal-600">{!! $hint !!}</p>
@endif

</div>

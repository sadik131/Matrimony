@props([
    'label',
    'value'
])

<tr class="border-b border-gray-300">
    <td class="py-2 font-medium text-gray-600">
        {{ $label }}
    </td>
    <td class="py-2 text-gray-600 text-sm">
        {{ $value }}
    </td>
</tr>

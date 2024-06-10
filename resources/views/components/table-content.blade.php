@props(['value'])

<td {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-nowrap']) }}>
    {{ $value ?? $slot }}
</td>
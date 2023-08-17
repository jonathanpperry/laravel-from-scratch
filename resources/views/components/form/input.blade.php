@props(['name'])

<x-form.field>
    {{-- Label --}}
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-200 p-2 w-full rounded" name="{{ $name }}"
        id="{{ $name }}" value="{{ old($name) }}" required {{ $attributes }}>

    {{-- Error --}}
    <x-form.error name="{{ $name }}" />
</x-form.field>

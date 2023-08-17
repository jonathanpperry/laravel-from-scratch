@props(['name'])

<x-form.field>
    {{-- Label --}}
    <x-form.label name="{{ $name }}" />

    <textarea class="border border-gray-400 p-2 w-full" name="{{ $name }}" id="{{ $name }}" required>{{ old($name) }}</textarea>

    {{-- Error --}}
    <x-form.error name="{{ $name }}" />
</x-form.field>

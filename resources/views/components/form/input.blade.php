@props(['name', 'type' => 'text'])

<x-form.field>
    {{-- Label --}}
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-400 p-2 w-full" type="{{ $type }}" name="{{ $name }}"
        id="{{ $name }}" value="{{ old($name) }}" required>

    {{-- Error --}}
    <x-form.error name="{{ $name }}" />
</x-form.field>

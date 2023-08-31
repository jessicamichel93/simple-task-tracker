@props(['name'])

<label class="block text-left mb-2 text-xs font-bold text-gray-700 uppercase" for="{{ $name }}">
    {{ ucwords($name) }}
</label>

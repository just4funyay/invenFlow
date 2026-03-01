@props([
    'id',
    'title'
])

<div id="{{ $id }}"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm 
           hidden flex items-center justify-center
           opacity-0 transition-opacity duration-300">

    <div
        class="bg-white w-full max-w-md p-6 rounded-2xl
               transform scale-95 opacity-0
               transition-all duration-300 modal-box"
        onclick="event.stopPropagation()">

        <h3 class="text-lg font-semibold mb-4">
            {{ $title }}
        </h3>

        {{ $slot }}

    </div>
</div>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | InvenFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<script>
function openModal(id) {
    const modal = document.getElementById(id);
    const box = modal.querySelector('.modal-box');

    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
        box.classList.remove('opacity-0', 'scale-95');
        box.classList.add('opacity-100', 'scale-100');
    }, 10);
}

function closeModal(id) {
    const modal = document.getElementById(id);
    const box = modal.querySelector('.modal-box');

    modal.classList.add('opacity-0');
    box.classList.add('opacity-0', 'scale-95');

    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('fixed')) {
        const id = e.target.id;
        closeModal(id);
    }
});
</script>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('monitor.partials.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- Topbar --}}
        @include('monitor.partials.topbar')

        {{-- Content --}}
        <main class="p-8">
            @yield('content')
        </main>

    </div>

</div>
    @stack('scripts')
</body>
</html>
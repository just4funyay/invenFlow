<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | InvenFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

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

</body>
</html>
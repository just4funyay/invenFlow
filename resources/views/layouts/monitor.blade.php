<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | InvenFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

    @include('monitor.partials.sidebar')

    <div class="flex-1 flex flex-col">

        @include('monitor.partials.topbar')

        <main class="p-8">
            @yield('content')
        </main>

    </div>

</div>
    @stack('scripts')
</body>
</html>
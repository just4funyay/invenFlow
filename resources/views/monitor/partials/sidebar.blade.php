<aside class="w-64 bg-white shadow-lg hidden md:flex flex-col">

    <div class="p-3 shadow-sm">
        <h1 class="text-l font-bold text-gray-800">
            InvenFlow
        </h1>
        <p class="text-xs text-gray-400">Monitoring Panel</p>
    </div>

    <nav class="flex-1 p-4 space-y-2">

        <a href="/monitor" class="block px-4 py-2 rounded-lg {{ request()->is('monitor') ? 'bg-blue-50 text-blue-600 font-medium' : 'hover:bg-gray-100 text-gray-600' }}">
            Dashboard
        </a>

        <a href="/monitor/kategori" class="block px-4 py-2 rounded-lg {{ request()->is('monitor/kategori') ? 'bg-blue-50 text-blue-600 font-medium' : 'hover:bg-gray-100 text-gray-600' }}">
            Kategori
        </a>

        <a href="/monitor/laporan" class="block px-4 py-2 rounded-lg {{ request()->is('monitor/laporan') ? 'bg-blue-50 text-blue-600 font-medium' : 'hover:bg-gray-100 text-gray-600' }}">
            Laporan
        </a>

    </nav>

</aside>
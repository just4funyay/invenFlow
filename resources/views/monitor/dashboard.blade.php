@extends('layouts.monitor')

@section('title', 'Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- Statistik --}}
    <div class="bg-white p-6 rounded-2xl shadow-sm">
        <p class="text-sm text-gray-500">Total Barang</p>
        <h2 class="text-3xl font-bold mt-2">1,240</h2>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm">
        <p class="text-sm text-gray-500">Barang Masuk</p>
        <h2 class="text-3xl font-bold mt-2">320</h2>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm">
        <p class="text-sm text-gray-500">Barang Keluar</p>
        <h2 class="text-3xl font-bold mt-2">210</h2>
    </div>

</div>

@endsection
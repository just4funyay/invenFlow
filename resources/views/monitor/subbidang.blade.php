@extends('layouts.monitor')

@section('title', 'Subbidang')

@section('content')

<div class="space-y-6">

    <!-- Header -->
    <div class="flex justify-between items-center">
        <h3 class="text-xl font-semibold text-gray-800">
            Manajemen Subbidang
        </h3>

        <button onclick="openModal('modalSubbidang')"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
            + Tambah Subbidang
        </button>
    </div>

    @if($subbidang->count()>0)
    <!-- List Subbidang -->
        <div class="grid md:grid-cols-2 gap-6">
        @foreach ( $subbidang as $sb )
            
            <div class="bg-white p-6 rounded-2xl shadow-sm border">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="text-lg font-semibold">
                            {{ $sb->name }}
                        </h4>
                        <p class="text-sm text-gray-500 mt-1">
                            {{ $sb->description }}
                        </p>
                    </div>

                    <button onclick="openModal('modalKategori')"
                        class="text-xs bg-gray-100 px-3 py-1 rounded-lg hover:bg-gray-200">
                        + Kategori
                    </button>
                </div>

                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">
                        Laptop
                    </span>
                    <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">
                        Printer
                    </span>
                    <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">
                        Server
                    </span>
                </div>

            </div>
        @endforeach
        </div>
    @endif
</div>

@include('monitor.partials.modal-subbidang')
@include('monitor.partials.modal-kategori')

@endsection
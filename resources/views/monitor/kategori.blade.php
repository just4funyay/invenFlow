@extends('layouts.monitor')

@section('title', 'Kategori')

@section('content')

<div class="bg-white p-6 rounded-2xl shadow-sm">

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold">
            Daftar Kategori
        </h3>

        <button onclick="openModal()"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition cursor-pointer">
            + Tambah Kategori
        </button>
    </div>

    <table class="w-full text-sm">
        <thead class="text-left text-gray-500 border-b">
            <tr>
                <th class="py-3">Nama Kategori</th>
                <th class="py-3">Deskripsi</th>
                <th class="py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <tr>
                <td class="py-3">Elektronik</td>
                <td class="py-3">Peralatan elektronik kantor</td>
                <td class="py-3">
                    <button class="text-blue-600 text-sm">Edit</button>
                </td>
            </tr>
        </tbody>
    </table>

</div>

@include('monitor.partials.modal-kategori')

@endsection
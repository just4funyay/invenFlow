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
            class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition cursor-pointer">
            + Tambah Subbidang
        </button>
    </div>

    <!-- Tabel -->
    <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-3 text-left w-8">#</th>
                    <th class="px-6 py-3 text-left">Subbidang</th>
                    <th class="px-6 py-3 text-left">Deskripsi</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">

                @forelse($subbidang as $index => $sb)

                {{-- Baris Subbidang --}}
                <tr class="hover:bg-gray-50 cursor-pointer transition"
                    onclick="toggleAccordion('accordion-{{ $sb->id }}')">
                    <td class="px-6 py-4 text-gray-400">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 font-medium text-gray-800">
                        <div class="flex items-center gap-2">
                            {{-- Arrow icon --}}
                            <svg id="arrow-{{ $sb->id }}"
                                class="w-4 h-4 text-gray-400 transition-transform duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            {{ $sb->name }}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $sb->description }}</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex flex-col items-end gap-2">    
                            <button onclick="event.stopPropagation(); openModal('modalKategori', 'subbidang_id',{{ $sb->id }})"
                                class="text-xs bg-gray-100 px-3 py-1 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                                + Kategori
                            </button>
                            <form action="{{ route('subbidang.destroy', $sb->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus subbidang ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="event.stopPropagation()"
                                    class="text-xs bg-red-100 text-red-600 px-3 py-1 rounded-lg hover:bg-red-200 transition cursor-pointer">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

                {{-- Baris Accordion Kategori --}}
                <tr id="accordion-{{ $sb->id }}" class="hidden">
                    <td colspan="4" class="px-6 py-3 bg-gray-50">
                        @if($sb->categories->count() > 0)
                            <div class="flex flex-wrap gap-2 py-1">
                                @foreach($sb->categories as $kategori)
                                    <span class="inline-flex items-center gap-1 bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">
                                        {{ $kategori->name }}
                                        <button 
                                         onclick="event.stopPropagation(); openModal('modalDeleteKategori', 'kategori_id', {{ $kategori->id }})"
                                         class="ml-1 text-gray-500 hover:text-red-500 leading-none cursor-pointer">
                                            &times;
                                        </button>
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <p class="text-xs text-gray-400 italic py-1">Belum ada kategori.</p>
                        @endif
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-400 text-sm italic">
                        Belum ada subbidang.
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

</div>

@include('monitor.partials.modal-subbidang')
@include('monitor.partials.modal-kategori')
@include('monitor.partials.modal-delete-kategori')

@endsection

@push('scripts')
<script>
    function toggleAccordion(id) {
        const row = document.getElementById(id);
        const sbId = id.replace('accordion-', '');
        const arrow = document.getElementById('arrow-' + sbId);

        row.classList.toggle('hidden');
        arrow.classList.toggle('rotate-90');
    }
</script>
@endpush
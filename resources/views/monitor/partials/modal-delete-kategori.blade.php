<x-modal id="modalDeleteKategori" title="Hapus Kategori">
    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="hidden" id="kategori_id" name="kategori_id">

        <p class="text-sm text-gray-600">
            Apakah kamu yakin ingin menghapus kategori ini?
        </p>

        <div class="flex justify-end gap-3 mt-6">
            <button type="button"
                onclick="closeModal('modalDeleteKategori')"
                class="text-sm text-gray-600 hover:underline cursor-pointer">
                Batal
            </button>

            <button type="submit"
                class="px-4 py-2 bg-red-600 text-white rounded-lg text-sm hover:bg-red-700 cursor-pointer">
                Hapus
            </button>
        </div>
    </form>
</x-modal>
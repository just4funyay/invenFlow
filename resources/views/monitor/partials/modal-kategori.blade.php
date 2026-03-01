<x-modal id="modalKategori" title="Tambah Kategori">
    <form>
        <div class="space-y-4">
            <input type="text"
                placeholder="Nama Kategori"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex justify-end gap-3 mt-6">
            <button type="button" onclick="closeModal('modalKategori')"
                    class="text-sm text-gray-600 hover:underline">
                    Batal
            </button>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700">
                Simpan
            </button>
        </div>
    </form>
</x-modal>
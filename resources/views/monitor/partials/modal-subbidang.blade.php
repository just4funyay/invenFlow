<x-modal id="modalSubbidang" title="Tambah Subbidang">
    <form method="POST" action="/monitor/subbidang">
        @csrf
        <div class="space-y-4">
            <input type="text"
                name="subbidangName"
                placeholder="Nama Subbidang"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500">

            <textarea
                name="subbidangDescription"
                placeholder="Deskripsi"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="flex justify-end gap-3 mt-6">
            <button type="button"
                onclick="closeModal('modalSubbidang')"
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
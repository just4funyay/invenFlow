<div id="modalKategori"
    class="fixed inset-0 backdrop-blur-sm bg-opacity-40 hidden items-center justify-center"
    onclick="closeModal()">

    <div class="bg-white w-full max-w-md p-6 rounded-2xl">

        <h3 class="text-lg font-semibold mb-4">
            Tambah Kategori
        </h3>

        <div class="space-y-4">
            <input type="text"
                placeholder="Nama Kategori"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">

            <textarea
                placeholder="Deskripsi"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </textarea>
        </div>

        <div class="flex justify-end gap-3 mt-6">
            <button onclick="closeModal()"
                class="px-4 py-2 text-sm text-gray-600 cursor-pointer hover:underline">
                Batal
            </button>

            <button
                class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 cursor-pointer">
                Simpan
            </button>
        </div>

    </div>
</div>

<script>
function openModal() {
    document.getElementById('modalKategori').classList.remove('hidden');
    document.getElementById('modalKategori').classList.add('flex');
}

function closeModal() {
    document.getElementById('modalKategori').classList.remove('flex');
    document.getElementById('modalKategori').classList.add('hidden');
}
</script>
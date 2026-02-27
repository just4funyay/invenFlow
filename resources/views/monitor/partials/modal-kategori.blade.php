<div id="modalKategori"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm 
           hidden flex items-center justify-center
           opacity-0 transition-opacity duration-300">

    <div id="modalKategoriBox"
        class="bg-white w-full max-w-md p-6 rounded-2xl
               transform scale-95 opacity-0
               transition-all duration-300"
        onclick="event.stopPropagation()">

        <h3 class="text-lg font-semibold mb-4">
            Tambah Kategori
        </h3>

        <form>
            <div class="space-y-4">
                <input type="text"
                    placeholder="Nama Kategori"
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeKategoriModal()"
                    class="text-sm text-gray-600 hover:underline">
                    Batal
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>

    </div>
</div>

<script>
const modalKat = document.getElementById('modalKategori');
const modalKatBox = document.getElementById('modalKategoriBox');

function openKategoriModal() {
    modalKat.classList.remove('hidden');
    setTimeout(() => {
        modalKat.classList.remove('opacity-0');
        modalKat.classList.add('opacity-100');
        modalKatBox.classList.remove('opacity-0', 'scale-95');
        modalKatBox.classList.add('opacity-100', 'scale-100');
    }, 10);
}

function closeKategoriModal() {
    modalKat.classList.add('opacity-0');
    modalKatBox.classList.add('opacity-0', 'scale-95');
    setTimeout(() => modalKat.classList.add('hidden'), 300);
}

modalKat?.addEventListener('click', closeKategoriModal);
</script>
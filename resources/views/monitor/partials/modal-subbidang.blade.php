<div id="modalSubbidang"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm 
           hidden flex items-center justify-center
           opacity-0 transition-opacity duration-300">

    <div id="modalSubbidangBox"
        class="bg-white w-full max-w-md p-6 rounded-2xl
               transform scale-95 opacity-0
               transition-all duration-300"
        onclick="event.stopPropagation()">

        <h3 class="text-lg font-semibold mb-4">
            Tambah Subbidang
        </h3>

        <form method="POST" action="/monitor/subbidang">
            @csrf
            <div class="space-y-4">
                <input type="text"
                    placeholder="Nama Subbidang"
                    name="subbidangName"
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500">

                <textarea
                    placeholder="Deskripsi"
                    name="subbidangDescription"
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeSubbidangModal()"
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
const modalSub = document.getElementById('modalSubbidang');
const modalSubBox = document.getElementById('modalSubbidangBox');

function openSubbidangModal() {
    modalSub.classList.remove('hidden');
    setTimeout(() => {
        modalSub.classList.remove('opacity-0');
        modalSub.classList.add('opacity-100');
        modalSubBox.classList.remove('opacity-0', 'scale-95');
        modalSubBox.classList.add('opacity-100', 'scale-100');
    }, 10);
}

function closeSubbidangModal() {
    modalSub.classList.add('opacity-0');
    modalSubBox.classList.add('opacity-0', 'scale-95');
    setTimeout(() => modalSub.classList.add('hidden'), 300);
}

modalSub?.addEventListener('click', closeSubbidangModal);
</script>
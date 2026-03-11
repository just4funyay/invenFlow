export function openModal(id, fieldId = null, value = null) {
    const modal = document.getElementById(id);
    const box = modal.querySelector('.modal-box');

    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
        box.classList.remove('opacity-0', 'scale-95');
        box.classList.add('opacity-100', 'scale-100');
    }, 10);

    if (fieldId && value) {
        const input = document.getElementById(fieldId);
        if (input) input.value = value;
    }
}

export function closeModal(id) {
    const modal = document.getElementById(id);
    const box = modal.querySelector('.modal-box');

    modal.classList.add('opacity-0');
    box.classList.add('opacity-0', 'scale-95');

    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

document.addEventListener('click', function(e) {
    // cek apakah ada modal
    if (e.target.classList.contains('fixed')) {
        const id = e.target.id;
        closeModal(id);
    }
});


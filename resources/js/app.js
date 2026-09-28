document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btnAlert');

    if (btn) {
        btn.addEventListener('click', () => {
            alert('Js telah diaktifkan menyala on mode on');
        });
    }
});
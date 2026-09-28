//
import './bootstrap';

// Contoh Interaktivitas Simple
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btnAlert');
    
    btn.addEventListener('click', () => {
        alert('Js telah diaktifkan menyala on mode on');
    });
});
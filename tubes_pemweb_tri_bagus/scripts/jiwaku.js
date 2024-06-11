// Menambahkan event listener untuk DOMContentLoaded untuk memastikan DOM telah sepenuhnya dimuat sebelum menjalankan skrip
document.addEventListener('DOMContentLoaded', () => {
    // Menambahkan efek animasi ketika pengguna menggulir halaman
    window.addEventListener('scroll', () => {
        const heroSection = document.querySelector('.hero');
        const scrollPosition = window.scrollY;

        // Jika pengguna menggulir lebih dari 50 piksel, tambahkan kelas 'scrolled' ke heroSection
        if (scrollPosition > 50) {
            heroSection.classList.add('scrolled');
        } else {
            heroSection.classList.remove('scrolled');
        }
    });

    // Menambahkan event listener untuk link navigasi
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            alert('Navigasi ke ' + link.textContent);
        });
    });
});

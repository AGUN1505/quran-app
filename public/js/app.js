// SEARCH (index page)
const searchInput = document.getElementById('search');
if (searchInput) {
    const cards = document.querySelectorAll('.surah-card');
    const emptyState = document.getElementById('emptyState');

    searchInput.addEventListener('input', function () {
        const keyword = this.value.toLowerCase().trim();
        let visible = 0;

        cards.forEach(card => {
            const match = card.innerText.toLowerCase().includes(keyword);
            card.style.display = match ? 'flex' : 'none';
            if (match) visible++;
        });

        emptyState.style.display = visible === 0 ? 'block' : 'none';
    });
}

// SCROLL TO TOP (detail page)
const scrollBtn = document.getElementById('scrollTop');
if (scrollBtn) {
    window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('visible', window.scrollY > 300);
    });

    scrollBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

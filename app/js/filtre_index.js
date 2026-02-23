const filtre = document.getElementById('Filtre');

function applyFilter() {
    const selectedType = filtre.value;
    console.log('Application du filtre:', selectedType);

    // Sections à filtrer
    const sections = [
        { id: 'recently-added', sortKey: 'data-id', sortFn: (a, b) => parseInt(b.getAttribute('data-id')) - parseInt(a.getAttribute('data-id')) },
        { id: 'most-popular', sortKey: 'data-note', sortFn: (a, b) => parseFloat(b.getAttribute('data-note')) - parseFloat(a.getAttribute('data-note')) }
    ];

    sections.forEach(section => {
        const sectionElement = document.getElementById(section.id);
        const cards = Array.from(sectionElement.querySelectorAll('.col-12.col-md-6.col-lg-4'));

        // Filtrer par type
        let filteredCards = cards;
        if (selectedType !== 'Tout') {
            filteredCards = cards.filter(card => card.getAttribute('data-type') === selectedType);
        }

        // Trier
        filteredCards.sort(section.sortFn);

        // Masquer toutes les cartes de la section
        cards.forEach(card => card.classList.add('d-none'));

        // Afficher les 3 premières filtrées et triées
        filteredCards.slice(0, 3).forEach(card => card.classList.remove('d-none'));
    });
}

filtre.addEventListener('change', function() {
    if (document.querySelector('.rm_all').classList.contains('d-block')) {
        console.log('Mode recherche actif, relance de la recherche');
        document.getElementById('search_bar').dispatchEvent(new Event('input'));
    } else {
        applyFilter();
    }
});

// Appliquer le filtre initial
applyFilter();

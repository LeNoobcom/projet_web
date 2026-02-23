const filtre = document.getElementById('Filtre');

filtre.addEventListener('change', function() {
    const selectedType = this.value;
    console.log('Filtre changé vers:', selectedType);
    const cards = document.querySelectorAll('.col-12.col-md-6.col-lg-4');

    cards.forEach(card => {
        const cardType = card.getAttribute('data-type');
        if (selectedType === 'Tout' || cardType === selectedType) {
            card.classList.remove('d-none');
        } else {
            card.classList.add('d-none');
        }
    });

    // Si on est en mode recherche, relancer la recherche avec le nouveau filtre
    if (document.querySelector('.rm_all').classList.contains('d-block')) {
        console.log('Mode recherche actif, relance de la recherche');
        document.getElementById('search_bar').dispatchEvent(new Event('input'));
    }
});

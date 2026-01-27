
const genresParType = {
    Film: ['Action', 'Drame', 'Comédie', 'Horreur', 'Science-Fiction', 'Aventure', 'Thriller'],
    Serie: ['Action', 'Drame', 'Comédie', 'Horreur', 'Science-Fiction', 'Aventure', 'Thriller'],
    Jeu: ['RPG', 'MMO', 'FPS', 'Stratégie', 'Aventure', 'Puzzle', 'Sport', 'Plateforme']
};


document.getElementById('TypeObjet').addEventListener('change', function () {
    const typeSelected = this.value;
    const selectGenre = document.getElementById('genre');

    selectGenre.innerHTML = '<option selected disabled>Choisir un genre...</option>';

    if (genresParType[typeSelected]) {
        genresParType[typeSelected].forEach(genre => {
            const option = document.createElement('option');
            option.value = genre;
            option.textContent = genre;
            selectGenre.appendChild(option);
        });
    }
});

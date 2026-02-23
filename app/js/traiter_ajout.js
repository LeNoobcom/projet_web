const typeSelect = document.getElementById("TypeObjet");
const gender_form = document.querySelector(".gender_form");

const genresFilm = `
    <option value="" disabled selected hidden>Choisir un genre...</option>
    <option value="Action">Action</option>
    <option value="Aventure">Aventure</option>
    <option value="Comedie">Comédie</option>
    <option value="Drame">Drame</option>
    <option value="Horreur">Horreur</option>
    <option value="Science-Fiction">Science-Fiction</option>
    <option value="Fantastique">Fantastique</option>
    <option value="Thriller">Thriller / Suspense</option>
    <option value="Policier">Policier / Crime</option>
    <option value="Animation">Animation</option>
    <option value="Documentaire">Documentaire</option>
    <option value="Romance">Romance</option>
    <option value="Biopic">Biopic (Film biographique)</option>
    <option value="Guerre">Guerre</option>
    <option value="Western">Western</option>
    <option value="Musical">Comédie Musicale</option>
`;

const genresSerie = `
    <option value="" disabled selected hidden>Choisir un genre...</option>
    <option value="Action">Action</option>
    <option value="Aventure">Aventure</option>
    <option value="Drame">Drame</option>
    <option value="Comedie">Comédie</option>
    <option value="Science-Fiction">Science-Fiction</option>
    <option value="Fantastique">Fantastique / Fantasy</option>
    <option value="Horreur">Horreur</option>
    <option value="Thriller">Thriller / Suspense</option>
    <option value="Policier">Policier / Crime</option>
    <option value="Mystere">Mystère</option>
    <option value="Historique">Historique</option>
    <option value="Romance">Romance</option>
    <option value="Animation">Animation</option>
    <option value="Documentaire">Documentaire</option>
    <option value="Mini-serie">Mini-série</option>
    <option value="Reality-TV">Téléréalité</option>
`;

const genresJeu = `
    <option value="" disabled selected hidden>Choisir un genre...</option>
    <option value="Action">Action</option>
    <option value="Aventure">Aventure</option>
    <option value="FPS">FPS (Tir à la première personne)</option>
    <option value="RPG">RPG (Jeu de rôle)</option>
    <option value="Strategie">Stratégie</option>
    <option value="Gestion">Gestion / Simulation</option>
    <option value="Plateforme">Plateforme</option>
    <option value="Horreur-Survie">Horreur / Survie</option>
    <option value="Combat">Combat</option>
    <option value="Course">Course</option>
    <option value="Sport">Sport</option>
    <option value="Puzzle">Réflexion / Puzzle</option>
    <option value="MMORPG">MMORPG</option>
    <option value="Infiltration">Infiltration</option>
    <option value="Visual-Novel">Visual Novel</option>
    <option value="Bac-a-sable">Bac à sable (Sandbox)</option>
`;

typeSelect.addEventListener('change', () => {
    const val = typeSelect.value;

    if (val === "Film")       gender_form.innerHTML = genresFilm;
    else if (val === "Serie") gender_form.innerHTML = genresSerie;
    else if (val === "Jeu")   gender_form.innerHTML = genresJeu;
});
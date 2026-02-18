const search_bar = document.getElementById('search_bar');
const rm_all = document.querySelector('.rm_all');
const home_menu = document.querySelector('.home_menu');

let medias = [];
let notes = [];
let donneesR;

// Fonction pour récupérer les titres
async function recupererMedias() {
    const response = await fetch('../server/traiter_search_bar.php');
    medias = await response.json();
    medias.forEach((elem)=>{
        if(elem['moyenne'] == null){
            elem['moyenne'] = 0;
        }
    })
    return medias;
}

recupererMedias()
.then((donneesRecues) => {
    search_bar.addEventListener('input', () => {
        if(search_bar.value === ''){
            home_menu.classList.add('d-block');
            home_menu.classList.remove('d-none');
            rm_all.classList.add('d-none');
            rm_all.classList.remove('d-block');
        }
        else{
            home_menu.classList.add('d-none');
            home_menu.classList.remove('d-block');
            rm_all.classList.add('d-block');
            rm_all.classList.remove('d-none');
        }

        const searchText = search_bar.value.toLowerCase().trim();
        
        rm_all.innerHTML = '';

        rm_all.innerHTML = `
            <section class="mb-5">
                <h2 class="mb-4 pb-2 border-bottom border-danger border-3">Résultats de recherche</h2>
                <div class="row g-4" id="search-results-grid"></div>
            </section>
        `;

        const grid = document.getElementById('search-results-grid');
        let count = 0;

        donneesRecues.forEach((elem) => {
            if (elem['titre'].toLowerCase().includes(searchText)) {
                count++;
                grid.innerHTML += `
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card movie-card h-100 shadow">
                            <a href="html/detail.php?id=${elem['id']}" class="stretched-link"></a>
                            <img src="./css/images/${elem['img']}" class="card-img-top" alt="${elem['titre']}">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h5 class="card-title text-center m-0 fw-bold">${elem['titre']}</h5>
                                <div class="text-center mt-2">
                                    <span class="badge bg-warning text-dark">★ ${Math.round((elem['moyenne'] * 10) / 10).toFixed(1)}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
        });

        if (count === 0) {
            grid.innerHTML = `<p class="text-muted ms-3">Aucun média trouvé pour "${searchText}"</p>`;
        }
    });
});






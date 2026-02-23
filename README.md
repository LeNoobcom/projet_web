# RateIt

RateIt est une application web communautaire permettant de noter, commenter et répertorier des films, des séries et des jeux vidéo. 

## 🚀 Fonctionnalités principales

* **Authentification des utilisateurs :** Inscription, connexion et déconnexion avec gestion des sessions.
* **Catalogue dynamique :** Affichage des médias les plus populaires et des ajouts récents sur la page d'accueil.
* **Recherche et Filtrage :** Barre de recherche en temps réel et filtre par catégorie (Film, Série, Jeu).
* **Ajout de contenu :** Les utilisateurs connectés peuvent enrichir la base de données en ajoutant de nouveaux films, séries ou jeux avec une affiche, une description, une date de sortie et un genre.
* **Système d'évaluation :** Possibilité de laisser une note (de 0 à 5 étoiles) et un commentaire sur la page détaillée de chaque média.

## 🛠️ Technologies utilisées

* **Frontend :** HTML5, CSS3, JavaScript (Vanille), et Bootstrap 5 pour un design responsive.
* **Backend :** PHP (scripts natifs avec `mysqli` pour les requêtes).
* **Base de données :** MySQL (version 9.5).
* **Conteneurisation :** Docker et Docker Compose pour un déploiement simplifié.

## ⚙️ Installation et Déploiement (via Docker)

Le projet utilise Docker Compose pour orchestrer le serveur web (Apache/PHP), la base de données MySQL et l'interface phpMyAdmin.

### Prérequis
* Docker
* Docker Compose
* Git
  
### Instructions

1. Clonez ce dépôt sur votre machine locale.
2. Placez-vous dans le répertoire racine du projet (où se trouve le fichier `docker-compose.yaml`).
3. Lancez les conteneurs en arrière-plan avec la commande suivante :
   ```bash
   docker-compose up -d

### Structure

.
├── docker-compose.yaml       # Configuration de l'environnement (PHP/MySQL)
├── README.md                 # Documentation du projet
├── db/
│   └── db.sql                # Schéma de la base de données et INSERTS
└── app/
    ├── index.php             # Page d'accueil (Portail principal)
    ├── css/
    │   └── styles.css        # Feuilles de style globales
    ├── images/               # Posters et assets visuels
    │   └── [imgs].jpg     # Images des médias (Spider-man, Zelda, etc.)
    ├── html/                 # Pages de l'interface utilisateur
    │   ├── ajout.php         # Formulaire d'ajout de média
    │   ├── detail.php        # Page de détails d'un média + avis
    │   ├── login.php         # Page de connexion
    │   └── signup.php        # Page d'inscription
    ├── js/                   # Scripts JavaScript (côté client)
    │   ├── afficher_cgu.js   # Gestion des conditions d'utilisation
    │   ├── search_bar.js     # Logique de la barre de recherche
    │   └── traiter_ajout.js  # Validation dynamique du formulaire d'ajout
    ├── php/                  # Composants d'affichage dynamiques
    │   ├── populaires.php    # Section des médias les mieux notés
    │   └── recemment.php     # Section des derniers ajouts
    └── server/               # Logique Backend (Traitement des données)
        ├── traiter_ajout.php # Insertion en BDD des nouveaux médias
        ├── traiter_detail.php# Récupération des infos et notes
        ├── traiter_login.php # Vérification des identifiants
        ├── traiter_logout.php# Gestion de la déconnexion
        ├── traiter_note.php  # Enregistrement des avis utilisateurs
        ├── traiter_search.php# Requêtes SQL pour la recherche
        └── traiter_signup.php# Création de compte utilisateur
        
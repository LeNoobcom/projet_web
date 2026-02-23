-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : mar. 17 fév. 2026 à 13:27
-- Version du serveur : 9.5.0
-- Version de PHP : 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int NOT NULL,
  `type` varchar(10) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `date_sortie` date NOT NULL,
  `createur` varchar(30) DEFAULT NULL,
  `genre` varchar(20) NOT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` longtext,
  `dateajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `type`, `titre`, `date_sortie`, `createur`, `genre`, `img`, `description`, `dateajout`) VALUES
(5, "Film", "Spider-Man: Far From Home", "2019-07-03", "Jon Watts", "Action", "spiderman_20260215_155531.png", "Peter Parker doit faire face à de nouvelles menaces dans un monde qui a changé à jamais après l'éclipse et la mort d'Iron Man.", "2026-02-15 15:55:31"),
(9, "Serie", "Arcane", "2021-11-06", "Netflix", "Science-Fiction", "noposter.jpg", "Au cœur de l'éternel conflit entre les cités de Piltover et Zaun, deux sœurs se battent pour l'avenir de la technologie magique.", "2026-02-16 13:47:51"),
(10, "Serie", "The Last of Us", "2023-01-15", "Craig Mazin", "Drame", "tlou_20260216.jpg", "Vingt ans après l'effondrement de la civilisation moderne, Joel est engagé pour faire sortir l'intrépide Ellie d'une zone de quarantaine.", "2026-02-16 14:52:01"),
(11, "Jeu", "Pokémon HeartGold", "2009-09-10", "Game Freak", "Aventure", "pokemon_20260217_132559.jpg", "Explorez l'immense région de Johto pour devenir l'ultime dresseur et capturer l'ensemble des créatures légendaires.", "2026-02-17 13:25:59");

INSERT INTO `media` (`id`, `type`, `titre`, `date_sortie`, `createur`, `genre`, `img`, `description`, `dateajout`) VALUES
-- FILMS
(12, "Film", "Inception", "2010-07-21", "Christopher Nolan", "Science-Fiction", "inception.jpg", "Dom Cobb est un voleur expérimenté dans l'art périlleux de l'extraction : sa spécialité est de s'approprier les secrets les plus précieux d'un individu.", "2026-02-23 14:00:00"),
(13, "Film", "Le Parrain", "1972-10-18", "Francis Ford Coppola", "Policier", "godfather.jpg", "L'histoire de la famille Corleone, une dynastie de la mafia sicilienne à New York, entre loyauté familiale et crime organisé.", "2026-02-23 14:05:00"),
(14, "Film", "Interstellar", "2014-11-05", "Christopher Nolan", "Science-Fiction", "interstellar.jpg", "Alors que la Terre meurt, une équipe d'astronautes traverse un trou de ver pour trouver une nouvelle planète habitable pour l'humanité.", "2026-02-23 14:10:00"),
(15, "Film", "Le Voyage de Chihiro", "2001-07-20", "Hayao Miyazaki", "Animation", "chihiro.jpg", "Une petite fille se retrouve coincée dans un monde d'esprits et doit travailler dans les bains publics d'une sorcière pour sauver ses parents.", "2026-02-23 14:15:00"),
(16, "Film", "Parasite", "2019-05-30", "Bong Joon-ho", "Thriller", "parasite.jpg", "Toute la famille de Ki-taek est au chômage et s'intéresse de près au train de vie de la richissime famille Park.", "2026-02-23 14:20:00"),
(17, "Film", "Oppenheimer", "2023-07-19", "Christopher Nolan", "Biopic", "oppenheimer.jpg", "Le récit de la vie du physicien J. Robert Oppenheimer et de son rôle crucial dans la création de la bombe atomique.", "2026-02-23 14:25:00"),
(18, "Film", "Gladiator", "2000-05-01", "Ridley Scott", "Action", "gladiator.jpg", "Un général romain trahi cherche à se venger de l'empereur corrompu qui a assassiné sa famille et l'a envoyé en esclavage.", "2026-02-23 14:30:00"),

-- SERIES
(19, "Serie", "Breaking Bad", "2008-01-20", "Vince Gilligan", "Drame", "breaking_bad.jpg", "Un professeur de chimie atteint d'un cancer s'associe à l'un de ses anciens élèves pour fabriquer de la drogue afin d'assurer l'avenir de sa famille.", "2026-02-23 14:35:00"),
(20, "Serie", "Stranger Things", "2016-07-15", "The Duffer Brothers", "Fantastique", "stranger_things.jpg", "À Hawkins, un jeune garçon disparaît. Ses amis, sa famille et la police locale se retrouvent mêlés à des expériences gouvernementales secrètes.", "2026-02-23 14:40:00"),
(21, "Serie", "Chernobyl", "2019-05-06", "Craig Mazin", "Mini-serie", "chernobyl.jpg", "Une reconstitution poignante de l'explosion de la centrale nucléaire de Tchernobyl et des efforts héroïques pour sauver l'Europe d'un désastre.", "2026-02-23 14:45:00"),
(22, "Serie", "Mindhunter", "2017-10-13", "David Fincher", "Thriller", "mindhunter.jpg", "Deux agents du FBI interrogent des tueurs en série pour comprendre leur psychologie et résoudre des affaires criminelles en cours.", "2026-02-23 14:50:00"),
(23, "Serie", "The Bear", "2022-06-23", "Christopher Storer", "Comedie", "the_bear.jpg", "Un jeune chef issu du monde de la gastronomie retourne à Chicago pour diriger la sandwicherie familiale après un décès tragique.", "2026-02-23 14:55:00"),
(24, "Serie", "Succession", "2018-06-03", "Jesse Armstrong", "Drame", "succession.jpg", "La famille Roy est à la tête de l'un des plus gros conglomérats de médias au monde, mais la question de la succession déchire le clan.", "2026-02-23 15:00:00"),

-- JEUX
(25, "Jeu", "Elden Ring", "2022-02-25", "FromSoftware", "RPG", "elden_ring.jpg", "Explorez l'Entre-terre, combattez des demi-dieux et tentez de restaurer le Cercle d'Elden dans ce monde ouvert magistral.", "2026-02-23 15:05:00"),
(26, "Jeu", "The Legend of Zelda: Breath of the Wild", "2017-03-03", "Nintendo", "Aventure", "botw.jpg", "Link se réveille d'un sommeil de 100 ans dans un Hyrule dévasté et doit retrouver ses souvenirs pour affronter le Fléau Ganon.", "2026-02-23 15:10:00"),
(27, "Jeu", "Red Dead Redemption 2", "2018-10-26", "Rockstar Games", "Action", "rdr2.jpg", "Une épopée au cœur de l'Amérique sauvage à l'aube de l'ère moderne, suivant le hors-la-loi Arthur Morgan et son gang.", "2026-02-23 15:15:00"),
(28, "Jeu", "Hollow Knight", "2017-02-24", "Team Cherry", "Plateforme", "hollow_knight.jpg", "Un jeu d'aventure épique et classique dans un vaste royaume en ruine peuplé d'insectes et de héros.", "2026-02-23 15:20:00"),
(29, "Jeu", "Cyberpunk 2077", "2020-12-10", "CD Projekt Red", "RPG", "cyberpunk.jpg", "Une histoire d'action-aventure en monde ouvert qui se déroule à Night City, une mégalopole obsédée par le pouvoir et les modifications corporelles.", "2026-02-23 15:25:00"),
(30, "Jeu", "Minecraft", "2011-11-18", "Mojang Studios", "Bac-a-sable", "minecraft.jpg", "L'imagination est votre seule limite dans ce monde composé de blocs où vous pouvez construire, miner et explorer à l'infini.", "2026-02-23 15:30:00"),
(31, "Jeu", "Baldur's Gate 3", "2023-08-03", "Larian Studios", "RPG", "bg3.jpg", "Rassemblez votre groupe et retournez dans les Royaumes Oubliés dans une histoire d'amitié, de trahison et de sacrifice.", "2026-02-23 15:35:00");

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `idcomment` int NOT NULL,
  `idmedia` int NOT NULL,
  `iduser` int NOT NULL,
  `note` int NOT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idcomment`, `idmedia`, `iduser`, `note`, `commentaire`) VALUES
-- 5: Spider-Man
(1, 5, 2, 4, "C'est un excellent divertissement, les effets visuels sont bluffants."),
(2, 5, 3, 3, "Un peu trop tourné vers l'humour adolescent pour moi, mais ça reste sympa."),
-- 9: Arcane
(3, 9, 1, 5, "Une claque visuelle monumentale. L'animation est d'un niveau jamais vu."),
(4, 9, 2, 5, "L'écriture des personnages est incroyable, même sans connaître le jeu."),
-- 10: The Last of Us
(5, 10, 3, 5, "Fidèle au jeu et terriblement émouvant. Pedro Pascal est parfait."),
(6, 10, 1, 4, "Quelques longueurs sur certains épisodes, mais la qualité est indéniable."),
-- 11: Pokémon
(7, 11, 2, 5, "Le sommet de la 2D pour Pokémon. Une durée de vie colossale."),
(8, 11, 3, 4, "J'adore l'ambiance de Johto, c'est toute mon enfance !"),
-- 12: Inception
(9, 12, 1, 5, "Un concept brillant. On ne s'ennuie pas une seconde malgré la complexité."),
(10, 12, 2, 4, "La fin me laisse encore perplexe, Nolan est vraiment un tortionnaire d'esprit."),
-- 13: Le Parrain
(11, 13, 1, 5, "Le chef-d'œuvre absolu du cinéma de gangster. À voir au moins une fois."),
(12, 13, 2, 5, "Marlon Brando est d'une prestance incroyable. C'est du grand art."),
-- 14: Interstellar
(13, 14, 3, 5, "La bande son de Hans Zimmer me donne encore des frissons."),
(14, 14, 1, 4, "Un peu complexe sur la fin, mais visuellement c'est une merveille."),
-- 15: Le Voyage de Chihiro
(15, 15, 2, 5, "Une poésie incroyable. Miyazaki nous transporte dans un autre monde."),
(16, 15, 3, 5, "L'imagination débordante de ce film est tout simplement magnifique."),
-- 16: Parasite
(17, 16, 1, 5, "Une critique sociale acerbe et un scénario aux rebondissements fous."),
(18, 16, 2, 4, "Un film qui reste en tête bien après l'avoir terminé."),
-- 17: Oppenheimer
(19, 17, 3, 4, "C'est dense, c'est sonore, c'est intense. Une vraie expérience."),
(20, 17, 1, 5, "La tension lors de l'essai Trinity est insoutenable."),
-- 18: Gladiator
(21, 18, 2, 5, "Force et honneur ! Un film épique qui n'a pas vieilli d'un pouce."),
(22, 18, 3, 4, "Russell Crowe habite vraiment le rôle de Maximus."),
-- 19: Breaking Bad
(23, 19, 1, 5, "L'évolution de Walter White est la mieux écrite de l'histoire des séries."),
(24, 19, 2, 5, "Chaque saison est meilleure que la précédente. Du génie pur."),
-- 20: Stranger Things
(25, 20, 3, 4, "L'ambiance des années 80 est parfaitement restituée. Très addictif."),
(26, 20, 1, 3, "La dernière saison traîne un peu en longueur, mais ça reste cool."),
-- 21: Chernobyl
(27, 21, 2, 5, "Glacial, réaliste et terrifiant. Une reconstitution historique majeure."),
(28, 21, 3, 5, "On se rend compte du sacrifice de ces hommes. Bouleversant."),
-- 22: Mindhunter
(29, 22, 1, 5, "Passionnant d'un point de vue psychologique. Fincher au sommet."),
(30, 22, 2, 4, "Dommage qu'il n'y ait pas de saison 3, c'était une pépite."),
-- 23: The Bear
(31, 23, 3, 4, "C'est stressant, c'est bruyant, c'est la cuisine ! J'ai adoré."),
(32, 23, 1, 5, "L'épisode en plan-séquence est une prouesse technique et d'acting."),
-- 24: Succession
(33, 24, 2, 5, "Des personnages détestables mais tellement fascinants à regarder."),
(34, 24, 3, 4, "Les dialogues sont d'une finesse et d'une cruauté rares."),
-- 25: Elden Ring
(35, 25, 3, 5, "L'exploration est récompensée à chaque recoin. Un jeu immense."),
(36, 25, 1, 4, "C'est exigeant, mais quelle satisfaction quand on bat un boss !"),
-- 26: Zelda BotW
(37, 26, 2, 5, "Un sentiment de liberté que je n'ai retrouvé dans aucun autre jeu."),
(38, 26, 3, 4, "La durabilité des armes est un peu agaçante, mais l'aventure est top."),
-- 27: Red Dead Redemption 2
(39, 27, 1, 5, "Plus qu'un jeu, c'est une simulation de vie de cow-boy. Arthur est inoubliable."),
(40, 27, 2, 5, "Le souci du détail est poussé à un niveau jamais vu auparavant."),
-- 28: Hollow Knight
(41, 28, 3, 5, "Une direction artistique sublime et un challenge relevé."),
(42, 28, 1, 4, "L'univers est mélancolique et profond, un vrai chef-d'œuvre indé."),
-- 29: Cyberpunk 2077
(43, 29, 2, 4, "Après les patchs, le jeu est enfin devenu ce qu'il devait être."),
(44, 29, 3, 3, "L'ambiance de Night City est folle, mais l'IA est parfois aux fraises."),
-- 30: Minecraft
(45, 30, 1, 4, "Le jeu infini par excellence. Toujours plaisant de s'y replonger."),
(46, 30, 3, 3, "Un classique, même si le style graphique ne plaît pas à tout le monde."),
-- 31: Baldur's Gate 3
(47, 31, 2, 5, "La liberté d'approche est hallucinante. Le meilleur RPG de la décennie."),
(48, 31, 3, 5, "J'ai passé 100 heures dessus et j'ai encore envie de recommencer !");

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, "Admin_Master", "admin@mediarate.fr", "password_secure_123"),
(2, "CinePhil_92", "philippe.dupont@email.com", "jaimelecinema78"),
(3, "GamerGirl_XP", "sarah.j@provider.net", "pixels_and_coffee_2026");

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `creation_media_unique` (`type`,`titre`,`date_sortie`,`genre`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idcomment`),
  ADD UNIQUE KEY `idmedia` (`idmedia`,`iduser`),
  ADD KEY `cleetrangeremedia` (`idmedia`),
  ADD KEY `cleetrangereuser` (`iduser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `creation_user_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `idcomment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `cleetrangeremedia` FOREIGN KEY (`idmedia`) REFERENCES `media` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cleetrangereuser` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

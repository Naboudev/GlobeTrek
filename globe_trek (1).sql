-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 juil. 2025 à 03:35
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `globe trek`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `titre`, `auteur`, `description`, `date`, `image`) VALUES
(1, 'Banff, Canada – Le paradis alpin aux lacs turquoise', 'Céline', 'Blog Description :\r\nSi vous rêvez de montagnes majestueuses, de forêts denses et de lacs aux reflets surréalistes, bienvenue à Banff. Nichée au cœur des Rocheuses canadiennes, cette petite ville est une porte d’entrée vers une nature brute et spectaculaire. Dans ce billet, je vous emmène en randonnée au lac Moraine, je vous parle d’élans croisés au lever du jour, et je vous partage mes spots photo préférés pour Instagram.', '2025-06-17', '686dad891a7dd.jpg'),
(2, 'Îles du Saloum, Sénégal – L’Afrique préservée entre mangrove et traditions', 'Moussa', 'Blog Description :\r\nLoin des sentiers battus, les Îles du Saloum offrent un voyage hors du temps. Dans ce coin préservé du Sénégal, la vie suit le rythme de la marée, des pirogues et des chants traditionnels. Entre villages de pêcheurs, balades en kayak à travers la mangrove et nuits étoilées dans des écolodges, je vous raconte mon immersion au cœur de l’un des plus beaux trésors naturels d’Afrique de l’Ouest.', '2025-06-17', '686dade9a36ce.jpg'),
(3, 'Paris, France – Au-delà de la Tour Eiffel', 'Modou Sané', 'Blog Description :\r\nParis ne se limite pas aux clichés : il y a une ville plus intime derrière les grands boulevards. Dans ce blog, je vous fais découvrir mon Paris secret – les librairies anciennes de Saint-Germain, les marchés de quartier, les ruelles de Montmartre au petit matin, et les terrasses où l\'on écrit encore à la main. Laissez tomber les files d’attente : ici, je vous montre le Paris que les Parisiens aiment vraiment.', '2025-06-17', '686dae85da09e.jpg'),
(4, 'Chefchaouen, Maroc – La ville bleue et ses ruelles enchantées', 'Cherif ', 'Blog Description :\r\nDans les montagnes du Rif, un petit miracle bleu attend les voyageurs : Chefchaouen. Chaque ruelle, chaque escalier, chaque porte y est peinte dans une palette céleste. Dans ce billet, je vous parle de cette ville paisible, des femmes berbères rencontrées au marché, des balades dans les hauteurs, et de l’ambiance spirituelle qui y règne. Une pause poétique dans un monde de douceur.', '2025-06-17', '686daf0bd086e.jpg'),
(5, ' Tadoussac, Québec – Là où les baleines viennent respirer', 'Jordan', 'Blog Description :\r\nImaginez-vous sur un bateau, au cœur du fleuve Saint-Laurent, et soudain… une baleine surgit de l’eau. Tadoussac est l’un des meilleurs endroits au monde pour observer ces géants marins, mais c’est aussi un village québécois au charme fou. Dans ce blog, je vous raconte mon aventure à travers forêts boréales, nuits étoilées et rencontres maritimes inoubliables.', '2025-06-17', '686dafb3de049.jpg'),
(6, 'Gorée – Mémoire, beauté et silence au large de Dakar', 'Mamadou ', 'À seulement 20 minutes en bateau de Dakar, l’île de Gorée est un lieu chargé d’histoire et de poésie. Ancien centre de la traite négrière, elle abrite la célèbre Maison des Esclaves, symbole universel de mémoire et de souffrance.\r\nMais au-delà de son passé douloureux, Gorée séduit par son charme coloré, ses ruelles fleuries, ses maisons coloniales, et son ambiance paisible.\r\n\r\nAujourd’hui, l’île est aussi un lieu de culture et de création artistique, avec ses galeries, musées et ateliers d’artisans.\r\nUn endroit idéal pour flâner, apprendre, se recueillir, et admirer un magnifique coucher de soleil sur l’Atlantique.', '2025-06-17', '686db208911aa.jpg'),
(7, 'Cap Skirring – Tranquillité, plages et culture en Casamance', 'Babou', 'Cap Skirring, situé au sud du Sénégal en Casamance, est un véritable joyau balnéaire. Réputé pour ses plages immaculées, sa nature luxuriante, et son ambiance paisible, c’est la destination idéale pour se ressourcer loin de l’agitation urbaine.\r\n\r\nEntre balades en pirogue dans les bolongs, rencontres avec la culture diola, et dégustation de plats locaux, le Cap offre une expérience authentique et chaleureuse. Accessible par route, bateau ou avion, il combine détente, nature et découverte culturelle, dans un décor encore préservé du tourisme de masse.', '2025-06-17', '686db30172387.jpg'),
(8, 'Marrakech, Maroc – Un tourbillon de couleurs et de parfums', 'Mouhamed', 'log Description :\r\nPerdez-vous dans les ruelles animées de la médina de Marrakech, où le parfum des épices flotte entre les étals de tapis et les lanternes artisanales. Entre les palais historiques, les jardins exotiques et les appels à la prière, la ville rouge vous transporte dans un conte oriental. Dans ce blog, je vous dévoile mes incontournables, mes bonnes adresses cachées et quelques secrets pour vivre Marrakech comme un local.', '2025-06-17', '686daca4c8e2b.jpg'),
(9, 'Sydney, Australie – Une ville entre surf, skyline et culture', 'Sydney ', 'Blog Description :\r\nSydney, c’est le charme fou d’une ville où l’on peut surfer à l’aube, boire un café design à midi et assister à un opéra le soir. Moderne, cosmopolite et proche de la nature, cette métropole australienne est un coup de cœur garanti. Découvrez mon itinéraire de 3 jours, des plages mythiques à l’Opéra, sans oublier mes meilleures adresses food et les endroits parfaits pour admirer le coucher de soleil sur la baie.\r\n\r\n', '2025-07-08', '686db0ed0e54f.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `capacite` varchar(100) NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `disponible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `nom`, `type`, `description`, `capacite`, `prix`, `image`, `disponible`) VALUES
(9, 'Chambre Deluxe – Confort Premium au cœur du Sénégal', 'deluxe', 'Description :\r\nPlongez dans le luxe avec notre chambre deluxe équipée d’un lit king size, d’un bureau de travail, d’une salle de bain avec baignoire, et d’un balcon privé avec vue panoramique sur la ville, l’océan ou le parc environnant. Le mobilier est artisanal, fait de bois local, et l’ambiance lumineuse crée un espace relaxant idéal pour les séjours prolongés.\r\n\r\nSuperficie : 35 m² | Capacité : 2 adultes + 1 enfant\r\nServices inclus : Room service, peignoirs et chaussons, machine à café, bouteille d’eau offerte chaque jour', '2', 124000, '686d593cd094a.jpg', 'oui'),
(10, 'Suite Familiale – Espace et Sérénité', 'suite', 'Description :\r\nPensée pour les familles ou groupes d’amis, notre suite familiale se compose de deux chambres communicantes, d’un salon indépendant, et de deux salles de bain modernes. Vous y trouverez tout le confort nécessaire pour un séjour paisible, avec climatisation individuelle, Wi-Fi, et espace de jeux pour les enfants.\r\n\r\nSuperficie : 45 m² | Capacité : jusqu’à 5 personnes\r\nServices inclus : Petit-déjeuner buffet, baby-sitting sur demande, kitchenette', '5', 540900, '686d59907a1f7.jpg', 'non'),
(11, 'Bungalow Vue Mer – Évasion en bord de plage (Casamance / Saly / Ngor)', 'standard', 'Description :\r\nVivez une expérience unique dans nos bungalows en bord de mer, nichés dans un jardin tropical. Chaque unité est indépendante, avec terrasse privée, hamac, lit à baldaquin, et ventilateur au plafond. La décoration artisanale vous plonge dans l’ambiance locale, pour un séjour romantique ou nature.\r\n\r\nSuperficie : 30 m² + terrasse | Capacité : 2 personnes\r\nServices inclus : Accès direct à la plage, douche extérieure, petit-déjeuner local inclus\r\n\r\n', '2', 654000, '686d5a0957cef.jpg', 'oui'),
(12, 'Chambre Éco-Lodge – Authenticité et Nature (Niokolo-Koba, Fathala, îles du Saloum)', 'deluxe', 'Description :\r\nNos chambres éco-conçues en matériaux naturels (terre, chaume, bois) vous accueillent dans un cadre respectueux de l’environnement, au cœur de la nature sénégalaise. Idéales pour les voyageurs écoresponsables, elles allient charme rustique et confort moderne.\r\n\r\nSuperficie : variable selon lodge | Capacité : 2 à 4 personnes\r\nServices inclus : Électricité solaire, moustiquaire, vue sur la savane ou la mangrove', '4', 654900, '686d5a774a324.jpg', 'non'),
(13, ' Chambre Standard – Confort urbain', 'standard', 'Description :\r\nSituée au cœur de la ville (Montréal, Toronto ou Vancouver), cette chambre standard offre tout le nécessaire pour un séjour confortable : lit queen-size, bureau de travail, Wi-Fi haut débit, et salle de bain privative avec douche moderne.\r\nUn espace chaleureux, parfait pour les voyageurs d\'affaires ou les couples souhaitant explorer la ville à pied.\r\n\r\nSuperficie : 22 m² | Capacité : 1 à 2 personnes\r\nÉquipements : Climatisation, télévision HD, machine à café Keurig, chauffage individuel', '2', 1276500, '686d5b7fe08a2.jpg', 'non'),
(14, 'Chambre Deluxe – Chic et confort hivernal', 'deluxe', 'Description :\r\nParfaitement isolée pour les hivers canadiens, cette chambre haut de gamme allie design contemporain et ambiance chaleureuse avec parquet en bois, grands rideaux thermiques, lit king-size, et salle de bain en marbre avec baignoire profonde.\r\nSituée dans des hôtels 4 ou 5 étoiles, elle est idéale pour un séjour cocooning en hiver.\r\n\r\nSuperficie : 30 à 35 m² | Capacité : 2 personnes\r\nÉquipements : Chauffage intelligent, TV 4K, station d’accueil Bluetooth, service en chambre', '2', 1276500, '686d5be446f76.jpg', 'oui'),
(15, 'Suite Familiale – Spacieuse et équipée', 'suite', 'Description :\r\nCette suite est idéale pour les familles en vacances au Canada, avec deux chambres séparées, un salon confortable, et une cuisine équipée (frigo, plaques, micro-ondes). Certains établissements incluent également lave-linge et espace de jeux.\r\n\r\nSuperficie : 45 à 60 m² | Capacité : 4 à 5 personnes\r\nÉquipements : Télévision connectée, coin repas, lit bébé sur demande, Wi-Fi, stationnement gratuit', '5', 2540900, '686d5c3b2b27b.jpg', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `nom`, `description`, `prix`, `pays_id`, `image`) VALUES
(18, 'Ile de Gorée', 'Localisation : Au large de Dakar (accessible en ferry).\r\nDescription :\r\nL’Île de Gorée est un site historique emblématique, classé au patrimoine mondial de l’UNESCO. C’est l’un des lieux les plus symboliques de la traite négrière transatlantique.\r\nLa célèbre Maison des Esclaves, avec sa \"porte du voyage sans retour\", témoigne de ce passé douloureux. Aujourd’hui, Gorée séduit aussi par ses maisons coloniales colorées, ses galeries d’art, ses musées et son ambiance paisible, sans voitures.\r\n\r\nActivités : Visites guidées historiques, musées, baignade, artisanat local.\r\n\r\n', 123000, 8, '686badf7e0484.jpg'),
(19, 'Lac rose', 'Localisation : À 30 km au nord-est de Dakar.\r\nDescription :\r\nLe Lac Rose tire sa couleur unique du sel et de la présence d’algues halophiles qui donnent une teinte rosée à l’eau, surtout en saison sèche. Il est également connu pour sa forte salinité, ce qui permet de flotter facilement, comme dans la Mer Morte.\r\nDes centaines de ramasseurs de sel y travaillent quotidiennement.\r\n\r\nActivités : Flottabilité dans le lac, balade en quad ou 4x4 sur les dunes, visite des bassins de sel.', 254000, 8, '686bae30d03aa.jpg'),
(20, 'Annecy – La Venise des Alpes', 'Région : Auvergne-Rhône-Alpes\r\nDescription :\r\nAnnecy, entourée de montagnes, est célèbre pour son lac aux eaux turquoise, ses canaux pittoresques, ses ruelles médiévales et ses marchés locaux. C’est un lieu parfait pour les sports nautiques, le vélo ou le ski dans les stations voisines.\r\n\r\nÀ ne pas manquer : La vieille ville, une balade en pédalo sur le lac, le festival international du film d’animation.', 427600, 15, '686d4a6335757.jpg'),
(25, 'Rome – La Ville Éternelle', 'Région : Latium\r\nDescription :\r\nRome est un véritable musée à ciel ouvert où se côtoient les vestiges de l’Empire romain, les chefs-d\'œuvre de la Renaissance et l\'effervescence de la vie moderne. Le Colisée, le Forum Romain, le Panthéon, et la Fontaine de Trevi racontent l’histoire millénaire de cette ville. À l’intérieur de la cité, le Vatican abrite la Basilique Saint-Pierre, la Chapelle Sixtine de Michel-Ange, et les Musées du Vatican, trésors de l’art chrétien.\r\n\r\nÀ ne pas manquer : Déguster une pizza en terrasse à Trastevere, et une balade au coucher du soleil au bord du Tibre.', 654900, 16, '686d439f05085.jpg'),
(26, 'Ile Sine Saloum', 'Localisation : Région de Fatick (Ndangane, Palmarin, Djiffer).\r\nDescription :\r\nLe delta du Sine-Saloum, formé par la rencontre du fleuve Saloum et de l’océan Atlantique, est une mosaïque de mangroves, de bolongs (canaux), d’îlots et de forêts.\r\nClassé réserve de biosphère par l’UNESCO, c’est un véritable paradis écologique. Les populations sérères y vivent de pêche, d’agriculture et de traditions bien ancrées.\r\n\r\nActivités : Pirogue, observation des oiseaux, pêche traditionnelle, écotourisme, campements chez l’habitant.', 654900, 8, '686baeddc5cb8.jpg'),
(27, 'Cap Skirring', 'Localisation : Région de Fatick (Ndangane, Palmarin, Djiffer).\r\nDescription :\r\nLe delta du Sine-Saloum, formé par la rencontre du fleuve Saloum et de l’océan Atlantique, est une mosaïque de mangroves, de bolongs (canaux), d’îlots et de forêts.\r\nClassé réserve de biosphère par l’UNESCO, c’est un véritable paradis écologique. Les populations sérères y vivent de pêche, d’agriculture et de traditions bien ancrées.\r\n\r\nActivités : Pirogue, observation des oiseaux, pêche traditionnelle, écotourisme, campements chez l’habitant.', 727600, 8, '686bb2834263e.jpg'),
(28, 'Ile de Fadiouth (Joal Fadiouth)', 'Localisation : Près de Joal, ville natale de Léopold Sédar Senghor.\r\nDescription :\r\nFadiouth est une île entièrement composée de coquillages, reliée à Joal par un pont de bois.\r\nElle est un exemple rare de cohabitation religieuse pacifique entre chrétiens et musulmans. Le cimetière mixte en coquillages est un symbole fort de tolérance.\r\n\r\nActivités : Visite de l’île, balade en pirogue, immersion dans la culture sérère.', 6540900, 8, '686bb3af5ca5d.jpg'),
(29, 'Parc national des oiseaux du Djoudj', 'Localisation : À 60 km au nord de Saint-Louis.\r\nDescription :\r\nTroisième réserve ornithologique du monde, le parc du Djoudj abrite plus de 3 millions d’oiseaux migrateurs, dont des pélicans, flamants roses, cormorans, etc.\r\nSitué dans une zone humide alimentée par le fleuve Sénégal, il est classé au patrimoine mondial de l’UNESCO.\r\n\r\nActivités : Safari ornithologique en pirogue, photographie, observation d’espèces rares (novembre à avril).', 6540900, 8, '686bb642b5791.jpg'),
(30, 'Florence – Berceau de la Renaissance', 'Région : Toscane\r\nDescription :\r\nFlorence est la capitale artistique et intellectuelle de l’Italie. Elle a vu naître des génies comme Léonard de Vinci, Dante ou Michel-Ange. La ville est dominée par le Duomo (Santa Maria del Fiore), dont la coupole de Brunelleschi est un chef-d’œuvre. La Galerie des Offices expose les œuvres de Botticelli, Raphaël et Titien. Les ruelles pavées, les ponts historiques comme le Ponte Vecchio et les palais majestueux donnent à Florence une élégance hors du temps.\r\n\r\nÀ ne pas manquer : Un coucher de soleil depuis la Piazzale Michelangelo.', 127600, 16, '686d445c6c00d.jpg'),
(31, 'Venise – La Sérénissime', 'Région : Vénétie\r\nDescription :\r\nConstruite sur un ensemble d’îles reliées par plus de 400 ponts, Venise est l’une des villes les plus uniques au monde. Elle séduit par son Grand Canal, ses gondoles, ses palais vénitiens et la magnifique Place Saint-Marc dominée par la basilique et le campanile. Le Palais des Doges rappelle l’époque où Venise était une grande puissance maritime. Les îles de Murano (verre soufflé) et Burano (maisons colorées et dentelle) complètent l’expérience.\r\n\r\nÀ ne pas manquer : Le Carnaval de Venise en février, une fête magique et historique.\r\n\r\n', 654900, 16, '686d44faa8f5e.jpg'),
(32, 'Naples & Pompéi – Ville vibrante et cité figée dans le temps', 'Région : Campanie\r\nDescription :\r\nNaples est une ville vivante, authentique et pleine de contrastes. Son centre historique est classé à l’UNESCO, et sa cuisine est l’une des meilleures d’Italie (berceau de la pizza !). À quelques kilomètres, Pompéi et Herculanum, figées par l’éruption du Vésuve en 79 ap. J.-C., offrent un témoignage exceptionnel de la vie romaine antique. Le Vésuve est lui-même accessible pour une randonnée au bord du cratère.\r\n\r\nÀ ne pas manquer : Déguster une pizza Margherita à la pizzeria Da Michele.', 124000, 16, '686d45a278fc9.jpg'),
(33, 'Milan – Capitale du design et de la mode', 'Région : Lombardie\r\nDescription :\r\nMilan est une ville cosmopolite, dynamique et branchée. Elle abrite le célèbre Duomo, une cathédrale gothique spectaculaire, la Galerie Vittorio Emanuele II, temple du shopping, et le Théâtre La Scala, haut lieu de l’opéra. On peut aussi y admirer La Cène de Léonard de Vinci. Milan est également le cœur économique et créatif de l’Italie.\r\n\r\nÀ ne pas manquer : La Fashion Week de Milan, les boutiques de luxe de la Via Montenapoleone.\r\n\r\n', 654900, 16, '686d4693bc117.jpg'),
(34, 'Les Cinque Terre – Villages suspendus sur la mer', 'Région : Ligurie\r\nDescription :\r\nClassées au patrimoine mondial de l’UNESCO, les Cinque Terre sont cinq villages colorés accrochés aux falaises de la côte ligure : Monterosso, Vernazza, Corniglia, Manarola, et Riomaggiore. Reliés par des sentiers de randonnée, ils offrent des vues spectaculaires sur la Méditerranée.\r\n\r\nÀ ne pas manquer : La Via dell\'Amore, sentier romantique entre Manarola et Riomaggiore.\r\n\r\n', 654900, 16, '686d471f6777a.jpg'),
(35, 'Paris – La Ville Lumière', 'Région : Île-de-France\r\nDescription :\r\nParis, capitale mondiale de l’art, de la mode et de la culture, séduit par son architecture élégante, ses monuments emblématiques comme la Tour Eiffel, le Louvre, la Cathédrale Notre-Dame ou l’Arc de Triomphe. Les balades le long de la Seine, les cafés de Montmartre et les expositions font de Paris un incontournable.\r\n\r\nÀ ne pas manquer : Une croisière en bateau-mouche, le musée d’Orsay, un coucher de soleil depuis la butte Montmartre.', 124000, 15, '686d47c4869b8.jpg'),
(36, 'Côte d’Azur – Luxe, soleil et mer Méditerranée', 'Région : Provence-Alpes-Côte d’Azur\r\nDescription :\r\nLa Côte d’Azur brille par son climat ensoleillé, ses plages de sable ou de galets, ses villages perchés et ses stations balnéaires chics comme Nice, Cannes, Monaco, ou Saint-Tropez. C’est un lieu où se côtoient jet-set, culture, paysages marins et villages provençaux.\r\n\r\nÀ ne pas manquer : Le festival de Cannes, la promenade des Anglais, les parfumeries de Grasse.', 654900, 15, '686d486678725.jpg'),
(37, 'Châteaux de la Loire – Histoire et élégance', 'Région : Centre-Val de Loire\r\nDescription :\r\nLe Val de Loire est le berceau de la Renaissance française, inscrit à l’UNESCO. On y découvre des châteaux féeriques comme Chambord, Chenonceau, Amboise, ou Blois, entourés de jardins magnifiques et de forêts royales.\r\n\r\nÀ ne pas manquer : Une balade en vélo le long de la Loire, visite guidée des châteaux, dégustation de vins de Touraine.', 654900, 15, '686d48f47a00e.jpg'),
(38, 'Strasbourg – L’Alsace entre France et Allemagne', 'Région : Grand Est\r\nDescription :\r\nCapitale européenne, Strasbourg charme par son architecture à colombages, ses canaux fleuris, et son célèbre marché de Noël. Sa cathédrale gothique est l’une des plus belles d’Europe, et son quartier de la Petite France est digne d’un conte.\r\n\r\nÀ ne pas manquer : Les marchés de Noël, la route des vins d’Alsace, les villages comme Colmar, Eguisheim, ou Riquewihr.', 124000, 15, '686d49a50d248.jpg'),
(39, 'Marseille – Cité phocéenne entre mer, culture et traditions', 'Région : Provence-Alpes-Côte d’Azur\r\nPopulation : ~870 000 habitants (2e plus grande ville de France)\r\nAccès : Gare Saint-Charles, Aéroport Marseille-Provence, autoroute A7\r\n\r\nMarseille, fondée par des marins grecs de Phocée vers 600 av. J.-C., est la plus ancienne ville de France et un carrefour méditerranéen historique. Avec son mélange unique de cultures, son port légendaire et ses paysages entre mer et calanques, elle offre une expérience à la fois authentique, vivante et solaire.\r\n', 124000, 15, '686d4b512c001.jpg'),
(40, 'Marrakech – La perle du Sud', 'Description :\r\nVille impériale incontournable, Marrakech est célèbre pour sa médina classée à l’UNESCO, ses soukhs parfumés, ses palais (Bahia, El Badi), et ses jardins (Majorelle). La place Jemaa el-Fna, vibrante jour et nuit, est le cœur vivant de la ville.\r\n\r\nÀ ne pas manquer : Hammam traditionnel, balade en calèche, coucher de soleil sur les toits.', 1276500, 22, '686d4c19ad25f.jpg'),
(41, 'Merzouga & le désert du Sahara', 'Description :\r\nAux portes du désert, Merzouga est le point de départ pour des excursions en chameau, des nuits sous tentes nomades berbères, et l’exploration des dunes de l’Erg Chebbi, parmi les plus hautes du Maroc.\r\n\r\nÀ ne pas manquer : Lever du soleil sur les dunes, musique gnawa, campement saharien.\r\n\r\n', 1276500, 22, '686d4cd32b1e4.jpg'),
(42, 'Essaouira – Ville blanche sur l’Atlantique', 'Description :\r\nEssaouira, l’ancienne Mogador, est une ville côtière au charme bohème. Son port animé, ses remparts portugais, ses galeries d’art et sa médina classée font d’elle un lieu paisible et artistique.\r\n\r\nÀ ne pas manquer : Dégustation de poisson frais, kitesurf, festival Gnaoua.', 124000, 22, '686d4d617752e.jpg'),
(43, 'Casablanca – Capitale économique et moderne', 'Description :\r\nModerne et dynamique, Casablanca abrite la mosquée Hassan II, l’une des plus grandes au monde, ouverte aux non-musulmans. Son architecture art déco, ses restaurants branchés et sa vie nocturne en font une ville cosmopolite.\r\n\r\nÀ ne pas manquer : Corniche d’Aïn Diab, shopping au Morocco Mall, balade sur les boulevards coloniaux.', 654900, 22, '686d4df29049c.jpg'),
(44, 'Chefchaouen – La ville bleue', 'Description :\r\nNichée dans les montagnes du Rif, Chefchaouen est célèbre pour ses ruelles peintes en bleu. Elle offre une atmosphère paisible, loin de l’agitation des grandes villes, et un cadre naturel exceptionnel.\r\n\r\nÀ ne pas manquer : Randonnée au mont Jebel El Kelaa, artisanat local, thé à la menthe sur une terrasse panoramique.', 1276500, 22, '686d4e7e8ccca.jpg'),
(45, 'Les montagnes de l’Atlas – Nature et villages berbères', 'Description :\r\nL’Atlas est la colonne vertébrale montagneuse du Maroc, avec des sommets dépassant 4000 m (Toubkal). On y découvre des villages en pisé, des vallées fertiles (Ourika, Dadès), et des traditions amazighes ancestrales.\r\n\r\nÀ ne pas manquer : Trek dans le Haut Atlas, rencontre avec les Berbères, vallée des Aït Bouguemez.', 124000, 22, '686d4f0f1358f.jpg'),
(46, 'Montréal – La métropole culturelle', 'Province : Québec\r\nDescription :\r\nMontréal est une ville dynamique, bilingue, jeune et festive. Elle mêle architecture européenne, modernité nord-américaine et scène artistique effervescente. C’est une capitale mondiale des festivals (jazz, humour, cirque).\r\n\r\nÀ ne pas manquer : Vieux-Montréal, Mont Royal, musée des Beaux-Arts, marché Jean-Talon, street food.', 1540900, 23, '686d4fb9a1066.jpg'),
(47, ' Québec – Ville fortifiée et patrimoine francophone', 'Province : Québec\r\nDescription :\r\nLe Vieux-Québec, classé au patrimoine mondial de l’UNESCO, est une ville fortifiée au charme européen, fondée en 1608. Avec ses ruelles pavées, ses toits en ardoise et le célèbre Château Frontenac, elle raconte l’histoire de la Nouvelle-France.\r\n\r\nÀ ne pas manquer : Quartier Petit-Champlain, Citadelle, Chutes Montmorency, Carnaval d’hiver.', 1276500, 23, '686d50540a967.jpg'),
(48, 'Chutes du Niagara – Merveille naturelle', 'Province : Ontario\r\nDescription :\r\nLes Chutes du Niagara sont parmi les plus célèbres au monde. Situées à la frontière des États-Unis, elles offrent un spectacle impressionnant d’eau, de lumière et de brume. La ville voisine propose hôtels, casinos et attractions touristiques.\r\n\r\nÀ ne pas manquer : Croisière Maid of the Mist, tunnel sous les chutes, tour Skylon.\r\n\r\n', 1240000, 23, '686d50ed4bd45.jpg'),
(49, ' Parc national Banff & les Rocheuses', 'Province : Alberta\r\nDescription :\r\nC’est le parc national le plus ancien du Canada, situé au cœur des montagnes Rocheuses. On y découvre des lacs glaciaires d’un bleu saisissant (Lac Louise, Moraine), des sommets enneigés, et une faune abondante (élans, ours, caribous).\r\n\r\nÀ ne pas manquer : Randonnées, bains dans les sources thermales, route panoramique Icefields Parkway.', 1276500, 23, '686d51a394568.jpg'),
(50, ' Ottawa – Capitale politique et culturelle', 'Province : Ontario\r\nDescription :\r\nCapitale du Canada, Ottawa regorge de musées prestigieux, de monuments officiels (Parlement), et de canaux qui deviennent en hiver la plus longue patinoire naturelle du monde (canal Rideau).\r\n\r\nÀ ne pas manquer : Colline du Parlement, musée des civilisations, patinage sur le canal, Tulip Festival.\r\n\r\n', 540900, 23, '686d5253ce2a4.jpg'),
(51, 'Gaspésie – Falaises, forêts et villages de pêcheurs', 'Province : Québec\r\nDescription :\r\nLa Gaspésie est un territoire naturel et authentique, au bord du golfe du Saint-Laurent. Entre montagnes, plages, et rocher Percé, on y trouve une culture maritime forte, de petits villages colorés, et de superbes parcs nationaux.\r\n\r\nÀ ne pas manquer : Rocher Percé, parc Forillon, randonnée au mont Jacques-Cartier (caribous), gastronomie locale.', 127500, 23, '686d52eee72d9.jpg'),
(52, ' Sydney – Ville emblématique entre mer et gratte-ciel', 'État : Nouvelle-Galles du Sud\r\nDescription :\r\nCélèbre pour son Opéra au design iconique, ses plages comme Bondi Beach, et son pont Harbour Bridge, Sydney est une ville vibrante et cosmopolite. Elle offre un parfait mélange entre culture urbaine et nature côtière.\r\n\r\nÀ ne pas manquer :\r\nOpéra de Sydney, balade dans les Jardins botaniques, croisière sur la baie, surf à Bondi Beach.', 654900, 24, '686d53d375e41.jpg'),
(53, 'Grande Barrière de Corail – Joyau marin mondial', 'État : Queensland\r\nDescription :\r\nClassée au patrimoine mondial de l’UNESCO, la Grande Barrière de Corail est le plus grand récif corallien de la planète. Avec ses 1200 km de long, c’est un paradis pour le snorkeling, la plongée sous-marine et la vie marine (poissons tropicaux, tortues, coraux multicolores).\r\n\r\nÀ ne pas manquer : Croisière en catamaran, plongée à Cairns ou Port Douglas, survol en hélicoptère.', 127500, 24, '686d549fdd079.jpg'),
(54, 'Uluru (Ayers Rock) – Le cœur spirituel de l’Australie', 'Territoire : Territoire du Nord\r\nDescription :\r\nUluru est un monolithe sacré pour les peuples aborigènes, situé dans le désert rouge. C’est l’un des symboles les plus puissants de l’Australie, particulièrement spectaculaire au lever et au coucher du soleil.\r\n\r\nÀ ne pas manquer : Coucher de soleil sur Uluru, sentier Mala Walk, musée de la culture Anangu.\r\n\r\n', 124000, 24, '686d553e5e118.jpg'),
(55, 'Melbourne – Capitale culturelle et artistique', 'État : Victoria\r\nDescription :\r\nMelbourne est réputée pour ses cafés branchés, son art de rue, ses festivals, ses galeries, et sa scène culinaire dynamique. C’est aussi un point de départ idéal pour la Great Ocean Road et la péninsule de Mornington.\r\n\r\nÀ ne pas manquer : Quartier de Fitzroy, laneways artistiques, plage de St Kilda, match de cricket au MCG.', 1276500, 24, '686d55febaf46.jpg'),
(56, ' Gold Coast – Surf, soleil et gratte-ciels', 'État : Queensland\r\nDescription :\r\nLa Gold Coast combine plages dorées, parcs d’attractions, gratte-ciel en bord de mer, et forêts subtropicales dans l’arrière-pays. C’est un paradis pour les amateurs de surf et de vacances balnéaires.\r\n\r\nÀ ne pas manquer : Surfers Paradise, Dreamworld, Springbrook National Park, observation des baleines.\r\n\r\n', 1276500, 24, '686d56b3603d4.jpg'),
(57, 'Tasmanie – L’île nature', 'État : Tasmanie\r\nDescription :\r\nLa Tasmanie est une île montagneuse au sud du continent australien, connue pour ses forêts denses, ses côtes spectaculaires, et ses villages historiques. C’est une destination prisée des randonneurs et amoureux de la nature sauvage.\r\n\r\nÀ ne pas manquer : Cradle Mountain, parc national Freycinet, Bay of Fires, Hobart et MONA (musée d’art moderne).\r\n\r\n', 124000, 24, '686d5761be44f.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(1255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `image`) VALUES
(8, 'Sénégal', ''),
(15, 'France', '6830bca90a5eb.jpg'),
(16, 'Italie', '6830bcb686894.jpg'),
(22, 'Maroc', '686ba47fabc10.jpg'),
(23, 'Canada', '686ba4c165d12.jpg'),
(24, 'Australie', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `nombre_nuits` int(11) NOT NULL,
  `nombre_personnes` int(11) NOT NULL,
  `demandes_speciales` text NOT NULL,
  `methode_paiement` varchar(255) NOT NULL,
  `date_reservation` int(11) NOT NULL,
  `chambre_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `actions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `reference`, `date_arrivee`, `date_depart`, `nombre_nuits`, `nombre_personnes`, `demandes_speciales`, `methode_paiement`, `date_reservation`, `chambre_id`, `client_id`, `prix`, `actions`) VALUES
(6, '#ref1750700266', '2025-06-26', '2025-07-06', 10, 2, 'Avec un wifi', 'creditCard', 2025, 8, 19, 1230000, '1'),
(7, '#ref1750771531', '2025-06-26', '2025-07-06', 10, 2, 'Avec un wifi', 'bankTransfer', 2025, 11, 19, 6540900, '2');

-- --------------------------------------------------------

--
-- Structure de la table `reservationspays`
--

CREATE TABLE `reservationspays` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_heure` datetime NOT NULL,
  `destination_id` int(11) NOT NULL,
  `pays_depart` varchar(255) NOT NULL,
  `personnes` int(11) NOT NULL,
  `enfants` int(11) NOT NULL,
  `demandes_speciales` text NOT NULL,
  `prix` float NOT NULL,
  `methode_paiement` varchar(255) NOT NULL,
  `statuts` varchar(255) NOT NULL,
  `actions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `adresse`, `tel`, `email`, `mdp`, `role`) VALUES
(16, 'Seynabou', 'Sarr', 'Guédiawaye', '755243969', 'seynabousarr322@gmail.com', '$2y$12$dAAxuuU8P8yXUV89S0buWe5ZMvT4vA.n/WXNAK1yTGx1USHh3nEV6', 'admin'),
(17, 'Modou', 'Sarr', 'Pikine', '755243969', 'client322@gmail.com', '$2y$12$wFxBKTUnwOKMWZQd/oYh6eMMDKbin0DLDT0IqZnguW5aLkB2Mbsb6', 'client'),
(19, 'Oumy', 'Sarr', 'Guédiawaye', '785302447', 'oumy322@gmail.com', '$2y$12$WsJGjkF/ZK2IzojtUYL/ZeDwfv/4.ag0IkpH6tvPn.FmTjyI3c7Yi', 'client'),
(21, 'Mabou', 'Ndiaye', 'Parcelles U17', '763602665', 'maboundiaye322@gmail.com', '$2y$12$8xrrgQERgVhAtxNP2OG.d.p9o4xcoMHH2Y9j.QpluJlXXBTi6K40G', 'employe'),
(22, 'Mouhamad', 'Sarr', 'Parcelles U17', '755243969', 'mouhamadsarr322@gmail.com', '$2y$12$pe3wWmxDWBHG3H0YvboibuTQKbeT7RB/aq2nwaF00YFVhYTFgzlM.', 'employe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays_id` (`pays_id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chambre_id` (`chambre_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `reservationspays`
--
ALTER TABLE `reservationspays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `id_destination` (`destination_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservationspays`
--
ALTER TABLE `reservationspays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `reservationspays`
--
ALTER TABLE `reservationspays`
  ADD CONSTRAINT `reservationspays_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

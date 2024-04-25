-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 avr. 2024 à 06:53
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `galerie_art`
--

-- --------------------------------------------------------

--
-- Structure de la table `objet_art`
--

DROP TABLE IF EXISTS `objet_art`;
CREATE TABLE IF NOT EXISTS `objet_art` (
  `id_objet` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `artistes` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_objet`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objet_art`
--

INSERT INTO `objet_art` (`id_objet`, `type`, `artistes`, `titre`, `description`, `prix`, `url_image`) VALUES
(1, 'Ai', 'Claude LeChat', 'L’Élégance Féline', 'Cette œuvre captivante présente trois chats majestueux vêtus de costumes victoriens élégants, illustrant une fusion harmonieuse entre la noblesse animale et humaine. Le chat à gauche, avec son pelage roux éclatant, dégage une aura chaleureuse et accueillante. Au centre, un chat mystérieux portant un chapeau est enveloppé dans un manteau sombre, évoquant une présence autoritaire. À droite, un chat au pelage gris sombre affiche une expression sérieuse et distinguée. Ensemble, ils incarnent l’élégance et la grandeur, capturées magistralement dans un style artistique réaliste empreint de romantisme.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\Ai généré\\ai-generated-cat.jpg'),
(2, 'Ai', ' Léa Dupont', 'Harmonie Universelle', 'Cette œuvre magnifique représente un être mystique, dont le visage est flouté pour préserver son anonymat, avec une chevelure luxuriante composée d’arbres et de feuillages verdoyants. Des planètes colorées, semblables à la Terre mais avec des variations de couleurs et de textures, flottent harmonieusement autour de sa tête, créant une atmosphère sereine et magique. L’être est ancré dans un environnement forestier sombre, éclairé par la lumière douce qui se dégage des planètes. Cela symbolise l’unité et l’équilibre entre la nature et l’univers', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\Ai généré\\ai-generated-women.jpg'),
(3, 'Ai', 'Jeanne Dupont', 'Mystique Émergence', 'Cette œuvre abstraite et moderne utilise des couleurs vives et contrastées pour représenter l’émergence mystique d’une forme indéfinie, symbolisant la beauté éphémère et insaisissable de l’art. Les textures riches et les motifs complexes invitent le spectateur à une exploration visuelle profonde, révélant de nouvelles interprétations à chaque regard.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\Ai généré\\ai-generated-eyes.jpg'),
(4, 'Ai', 'Élise Valentin', 'Étreinte Éternelle', 'Étreinte Éternelle” capture un moment intime et romantique entre deux individus, enveloppés dans une lumière douce et chaleureuse qui filtre à travers les arbres environnants. L’homme, vêtu d’une chemise blanche et d’un pantalon noir, tient délicatement la femme, dont la robe blanche ornée de motifs floraux s’épanouit gracieusement autour d’elle. Ils sont entourés par un paysage forestier mystique, où la nature semble célébrer leur union.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\Ai généré\\ai-generated-amoureux.jpg'),
(5, 'Ai', 'Sophie Martin', 'Clair de lune mystique', 'Cette œuvre en noir et blanc capture un paysage montagneux éthéré baigné dans la lumière d’une lune pleine, majestueuse et lumineuse. Les étoiles scintillantes et les galaxies lointaines ornent le ciel nocturne, ajoutant une profondeur et une dimension mystiques à la scène. Un ruisseau sinueux serpente à travers les vallées sombres, reflétant la lumière lunaire et créant un contraste saisissant avec les ombres environnantes.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\Ai généré\\moon.jpg'),
(6, 'dessin', 'Clara Monet', 'Harmonie en Rouge', 'Harmonie en Rouge” est une œuvre d’art captivante qui illustre une femme (dont le visage est flouté pour préserver l’anonymat) vêtue d’une robe rouge éclatante, tenant un panier rempli de fleurs noires. La technique mixte utilisée confère à l’image un aspect à la fois réaliste et abstrait, où les couleurs vives et les formes distinctes se mêlent à des traits de pinceau expressifs et des éclaboussures d’encre, symbolisant la fusion de la beauté naturelle et de l’énergie artistique.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\dessin\\girl_lavande.jpg'),
(7, 'dessin', 'Sophie Lemoine', 'Regard Loyal', 'Regard Loyal” est une œuvre d’art exquise qui capture la beauté et l’innocence d’un chiot. Chaque trait est méticuleusement dessiné, révélant les détails fins et délicats du pelage doux et soyeux du chien. Le regard intense et pénétrant du chiot exprime une loyauté et une affection incommensurables, évoquant un sentiment de connexion profonde entre l’homme et l’animal', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\dessin\\dog.jpg'),
(8, 'dessin', 'Amélie Durand ', 'La Rencontre Mystique', 'Cette œuvre captivante illustre une rencontre intime et mystique entre une femme et un léopard, symbolisant la connexion profonde entre l’humanité et la nature. La femme, dépeinte avec des traits doux et délicats, se trouve dans un état de sérénité totale, ses yeux fermés en signe d’acceptation et de paix. Le léopard, orné de taches dorées scintillantes sur son pelage sombre, incarne la force sauvage et l’énergie mystérieuse de la nature. Les deux figures sont dessinées avec une précision exquise, leurs visages se touchant presque dans un moment d’échange spirituel silencieux. ', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\dessin\\woman_cat.jpg'),
(9, 'dessin', 'Camille Delaroche', 'Regard Intérieur', 'Regard Intérieur” est une œuvre en noir et blanc, réalisée au fusain, qui dépeint un œil humain agrandi avec une intensité et une précision remarquables. Les cils épais et désordonnés encadrent un iris dans lequel se reflète la silhouette d’une personne, créant ainsi un contraste saisissant entre le macroscopique et le microscopique. L’artiste joue habilement avec les ombres et les lumières pour donner vie à cette représentation intime du regard', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\dessin\\eye.jpg'),
(10, 'dessin', 'Juliette Rousseau', 'Fragmentation de l’âme', 'Cette œuvre est une représentation graphique complexe et détaillée, où le visage d’une personne est partiellement obscurci, illustrant peut-être la complexité et la multifacette de l’identité humaine. Les lignes fines et les ombres créent un effet dramatique, tandis que les éléments abstraits ajoutent une dimension mystérieuse à l’image', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\dessin\\sketch.jpg'),
(11, 'peinture', 'Antoine Renardt', 'L’Élan des Vagues', 'Cette peinture à l’aquarelle dépeint un oiseau majestueux, probablement une mouette ou un albatros, s’élevant au-dessus des vagues tumultueuses de l’océan. Les couleurs douces et fluides se mélangent harmonieusement pour créer une scène apaisante mais dynamique, où le ciel et la mer se rencontrent dans une danse éternelle. Les touches légères et expressives de peinture donnent vie à la scène, capturant l’instant précis où l’oiseau déploie ses ailes pour s’élever au-dessus des flots.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\peintures\\bird.jpg'),
(12, 'peinture', 'Isabella Morawetz', 'Regard Intemporel', ' Cette œuvre captivante représente un œil humain d’une beauté saisissante, où le bleu intense de l’iris contraste magnifiquement avec les éclaboussures d’encre brune et dorée qui l’entourent, évoquant une fusion entre la réalité organique et l’abstraction artistique', 500, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\peintures\\eye.jpg'),
(13, 'peinture', 'Léa Dupont', 'Sérénité suspendue', 'Sérénité suspendue” est une œuvre d’art qui illustre une figure humaine, vue de dos, se balançant paisiblement sur une balançoire. La personne tient un bouquet de fleurs sauvages, symbolisant la connexion avec la nature. L’utilisation subtile des couleurs chaudes et froides crée une atmosphère apaisante et méditative. Les taches d’aquarelle ajoutent une touche d’abstraction et de mouvement à l’image, invitant le spectateur à une réflexion intérieure.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\peintures\\girl.jpg'),
(14, 'peinture', 'Isabelle Monet', 'Fenêtre sur le Printemps', 'Cette œuvre magnifique capture une fenêtre ancienne, encadrée par des fleurs roses éclatantes et des touches de peinture expressive. Les couleurs vives et la texture riche créent une atmosphère de renaissance et d’émerveillement, illustrant la beauté éphémère du printemps.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\peintures\\window.jpg'),
(15, 'peinture', 'Lucas Girard', 'Harmonie Éphémère', ' “Harmonie Éphémère” est une œuvre d’art délicate et expressive, capturant la beauté éthérée d’une figure féminine dont le visage est obscurci. Les couleurs aquarelles douces et fluides se mélangent harmonieusement, créant une ambiance apaisante et mystérieuse. Les teintes de jaune, vert, orange et brun se fondent naturellement, évoquant une connexion intime avec la nature. La technique de l’aquarelle utilisée ici permet un jeu subtil entre transparence et opacité, révélant la profondeur émotionnelle et la vulnérabilité inhérente à chaque être humain.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerie Dart\\images_photos\\oeuvres\\peintures\\woman.jpg'),
(16, 'photos', 'Monique Lévesque', 'Élégance Naturelle', 'Cette œuvre captivante capture un moment exquis où un oiseau aux couleurs vives, avec des ailes déployées, se perche délicatement sur une branche ornée de baies dorées. Le fond flou met en valeur la clarté et la précision de l’oiseau et des baies, évoquant une danse délicate entre la nature et la lumière.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\photographie\\bird.jpg'),
(17, 'photos', 'Alexia Dupont', 'Éclat de Couleurs', 'Éclat de Couleurs” est une œuvre d’art contemporaine qui capture l’intensité et la complexité des émotions humaines à travers un visage peint avec des couleurs vives et expressives. Les mains, également colorées, se posent sur le visage, révélant un regard profond qui invite à une introspection. Cette pièce est un mélange audacieux de textures et de teintes, illustrant la beauté dans la diversité et le chaos', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\photographie\\colors.jpg'),
(18, 'photos', 'Marina Bleu', 'Danse des Méduses', 'Cette œuvre captivante capture la beauté éthérée et le mouvement gracieux des méduses, illuminées d’une lumière dorée, flottant dans les profondeurs bleues sombres de l’océan. Les détails exquis et la luminosité des créatures contrastent magnifiquement avec le fond obscur, évoquant un sentiment de mystère et d’émerveillement.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\photographie\\meduse.jpg'),
(19, 'photos', 'Maxime Lefèvre', 'La Sérénité du Renard', 'Cette magnifique photographie capture un renard solitaire, baignant dans la lumière dorée du crépuscule. Le pelage roux et flamboyant de l’animal contraste superbement avec les teintes douces et naturelles des herbes sauvages qui l’entourent. Le regard du renard, empreint de calme et de sérénité, invite le spectateur à une réflexion intérieure, évoquant la beauté tranquille et insaisissable de la nature.', 450, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\photographie\\renard.jpg'),
(20, 'photos', 'Léa Dupont', 'La Danse des Éléments', 'Cette œuvre captivante dépeint un ciel orageux où les nuages tumultueux, teintés de bleus profonds et de violets mystérieux, s’entremêlent en une danse majestueuse. Un éclair brillant et puissant perce le ciel, illuminant la scène d’une lumière éthérée et révélant la beauté sauvage et indomptée de la nature.', 1200, 'C:\\Users\\momij\\OneDrive\\Documents\\GitHub\\Luce57.github.io\\Mes projets\\galerieDart\\images_photos\\oeuvres\\photographie\\thunderstorm.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_creation` timestamp NOT NULL,
  `d_connect` timestamp NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `role`, `nom`, `prenom`, `email`, `password`, `date_creation`, `d_connect`) VALUES
(1, 'Lulu', 'admin', 'Da', 'Lu', 'silveLu@outlook.com', 'momo', '2024-04-10 06:34:27', '2024-04-10 06:34:27'),
(2, 'test', 'utilisateur', 'test', 'test', 'jetest@outlook.com', 'test', '2024-04-10 06:34:27', '2024-04-10 06:34:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

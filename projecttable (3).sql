-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 juin 2024 à 11:05
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
-- Base de données : `projecttable`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `book_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1080) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `book_id`, `img`, `title`, `description`, `autor`, `category`, `status`, `price`, `comment`) VALUES
(10, 722, '627511.2.jpg', 'Entre le lys et le lion', '1690, Nouvelle-France.\r\n\r\nLe jeune Akian, qui s’est promis de venger la mort de son frère, de son père et l’enlèvement de celle qu’il aime, a la rage au cœur. En effet, Pierre Le Moyne d’Iberville, qui se disait son ami, l’a empêché de réaliser une partie', 'Erik le Duc', 'Histoire', 'Disponible', 2800, ''),
(11, 488, '248731.4.jpg', 'Les Misérables', 'Les Misérables de Victor Hugo est un roman réaliste. Il décrit la vie dans la France et le Paris pauvre au début du XIXe siècle. Le roman est considéré comme l\'un des chef-d\'œuvres de la littérature française. Il est une satire réaliste de la condition des classes populaires dans la société française à l\'époque de la Révolution. Le roman brosse un tableau de la France du début du XIXème siècle, autour du personnage de Jean Valjean.', 'Victor Hugo', 'Romance', 'Disponible', 1600, ''),
(12, 391, '584181.3.webp', 'L\'étranger', 'Le roman explore les profondeurs de l’existence humaine et les questions fondamentales de la vie, de la mort et du sens de l’existence1. L’histoire est celle du narrateur, un homme dont on ne connait que le nom, Meursault, qui va être amené par différente', 'Albert camus', 'Romance', 'Disponible', 1600, ''),
(13, 225, '313531.5.jpg', 'Death on the Nile', 'Linnet Doyle possède tout : la beauté, la richesse et… le fiancé de sa meilleure amie. Mais la lune de miel de Linnet sur le Nil devient un cauchemar quand l’un des passagers est retrouvé assassiné sur le navire de croisière du voyage. Hercule Poirot doit', 'Agatha Christie', 'Policier', 'Disponible', 2000, ''),
(14, 933, '367641.6.jpg', 'Le bouchon de cristal', 'Arsène Lupin découvre un mystérieux bouchon de cristal. Mais il disparait aussitôt. Où est-il ? Que cache-t-il ? Cette fois, les adversaires de Lupin sont très forts. Certains se moquent de lui. Mais le célèbre gentleman cambrioleur a plus d’un tour dans ', 'Maurice Leblanc', 'Policier', 'Disponible', 4000, ''),
(15, 703, '206551.1.jpg', 'L\' Egypte ancienne', 'Nous connaissons tous les pyramides, les hiéroglyphes et Cléopâtre, mais que savonsnous vraiment de l’Égypte ancienne? Quel rôle capital a joué le Nil dans l’unification de l’Égypte? Quel est le mystère qui entoure la sépulture de la reine Hétep-Hérès? Qu', 'Peter der manuelian', 'Histoire', 'Disponible', 3200, ''),
(20, 796, '557411.jpg', 'Harry potter', 'Après la mort de ses parents (Lily et James Potter), Harry Potter est recueilli par sa tante maternelle Pétunia et son oncle Vernon à l\'âge d\'un an. Ces derniers, animés depuis toujours d\'une haine féroce envers les parents du garçon qu\'ils qualifient de gens « bizarres », voire de « monstres », traitent froidement leur neveu et demeurent indifférents aux humiliations que leur fils Dudley lui fait subir. ', 'J. K. Rowling', 'Fantasy', 'Disponible', 200, ''),
(21, 781, '998692.jpg', 'Le Seigneur des anneaux', 'Le Seigneur des anneaux (The Lord of the Rings) est un roman de J. R. R. Tolkien paru en trois volumes en 1954 et en 1955. Prenant place dans le monde fictionnel de la Terre du Milieu, il suit la quête du hobbit Frodon Sacquet (Frodo Bessac), qui doit détruire l\'Anneau unique afin que celui-ci ne tombe pas entre les mains de Sauron, le Seigneur des ténèbres, qui l\'a créé. Plusieurs personnages lui viennent en aide, parmi lesquels son jardinier Sam, les hobbits Meriadoc et Peregrin (Merry et Pippin), le mage Gandalf ou encore l\'humain Aragorn, héritier d\'une longue lignée de rois.', 'J. R. R. Tolkien', 'Fantasy', 'Disponible', 2100, ''),
(22, 525, '514823.jpg', 'Le Trône de fer', 'L\'histoire se déroule dans un monde imaginaire où la société est de type féodal et où la magie et des créatures légendaires (telles que les dragons) ont existé mais sont censées avoir disparu. Trois intrigues principales s\'y entremêlent : dans le royaume des Sept Couronnes, plusieurs maisons nobles rivalisent pour l\'obtention du trône ; dans les contrées glacées situées au nord du royaume, une race de créatures supposée appartenir aux légendes se réveille ; et sur le continent oriental, la dernière héritière des Targaryen (la dynastie royale des Sept Couronnes renversée quinze ans auparavant), cherche à reconquérir le trône.', 'George R. R. Martin', 'Fantasy', 'Disponible', 1600, ''),
(23, 532, '316324.jpg', 'Dix Petits Nègres', 'Dans ce roman, dix personnes apparemment sans lien entre elles sont invitées à se rendre sur une île. Bien qu\'elles soient seules à se trouver sur ce lieu, elles sont assassinées les unes après les autres, à chaque fois d\'une façon qui rappelle les couplets d\'une comptine.', 'Agatha Christie', 'Thriller', 'Indisponible', 1400, ''),
(25, 292, '92005.webp', 'Le Silence des agneaux', 'L\'histoire décrit l\'enquête d\'une jeune étudiante du FBI, Clarice Starling qui, lors de sa recherche d\'un tueur en série psychopathe, se voit forcée d\'aller interroger un psychiatre, lui aussi psychopathe, emprisonné pour meurtres dans un asile, le Dr Hannibal Lecter.', 'Thomas Harris', 'Thriller', 'Indisponible', 1100, ''),
(27, 767, '711676.jpg', 'Shutter Island', 'L\'histoire se passe en 1954 sur l\'île de Shutter Island, dans un hôpital psychiatrique abritant des patients malades mentaux s\'étant rendus coupables d\'actes criminels. Les marshals Teddy Daniels et Chuck Aule enquêtent sur la disparition d\'une patiente, Rachel Solando.', 'Dennis Lehane', 'Thriller', 'Disponible', 2100, ''),
(28, 860, '782977.jpg', 'Orgueil et préjugés', 'À Longbourn, petit bourg du Hertfordshire, sous le règne du roi George III, Mrs Bennet est déterminée à marier ses cinq filles afin d\'assurer leur avenir53, compromis par certaines dispositions testamentaires. Lorsqu\'un riche jeune homme, Mr Bingley, loue Netherfield, le domaine voisin, elle espère vivement qu\'une de ses filles saura lui plaire assez pour qu\'il l\'épouse. Malheureusement il est accompagné de ses deux sœurs, Caroline et Louisa, plutôt imbues d\'elles-mêmes, et d\'un ami très proche, Mr Darcy, jeune homme immensément riche, propriétaire d\'un grand domaine dans le Derbyshire, mais très dédaigneux et méprisant envers la société locale.', 'Jane Austen', 'Romance', 'Sous Réservation', 3000, ''),
(29, 832, '819008.jpeg', 'Lettre d\'une inconnue', 'À son retour à Vienne d\'une excursion de trois jours dans la montagne, le jour de ses 41 ans, le célèbre écrivain R. reçoit une lettre d\'une inconnue.', 'Stefan Zweig', 'Romance', 'Sous Réservation', 1800, ''),
(30, 865, '752929.jpg', 'Anna Karénine', 'Anna Karénine est une jeune femme mariée à Alexis Karénine, fidèle et mère d\'un jeune garçon, Serioja. Anna Karénine se rend à Moscou chez son frère Stiva Oblonski. En descendant du train, elle croise le comte Vronski. Anna tombe amoureuse de Vronski, cet officier brillant, mais frivole. Elle lutte contre cette passion et finit pourtant par s\'abandonner avec un bonheur coupable au courant qui la porte vers ce jeune officier. Puis Anna tombe enceinte. Se sentant coupable et profondément déprimée par sa faute, elle décide d\'avouer son infidélité à son mari.', 'Léon Tolstoï ', 'Romance', 'Indisponible', 2000, '');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_book` int(255) NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_book`, `comment_user`, `comment`, `date`) VALUES
(1, 610, 'Mariano Mariano', 'hgf', '2024/05/29 12:24'),
(2, 610, 'Mariano ouhhih', 'dvsZ', '2024/05/29 12:24'),
(3, 610, 'Mariano teh', 'ef', '2024/05/29 12:26'),
(4, 610, 'ergr\"\"r', 'rvevde', '2024/05/29 12:26'),
(5, 692, 'Mariano ohouo', 'rg', '2024/05/29 13:00'),
(6, 692, '', '', '2024/05/29 13:00'),
(7, 692, '', '', '2024/05/29 13:00'),
(8, 692, '', '', '2024/05/29 13:00'),
(9, 692, '', '', '2024/05/29 13:00'),
(10, 692, '', '', '2024/05/29 13:00'),
(11, 692, 'Mariano ouhhih', 'vohi', '2024/05/29 13:01'),
(12, 692, 'Mariano teh', 'kk', '2024/05/29 13:02'),
(13, 692, 'Lenxo KITI', 'yy', '2024/05/29 13:02'),
(14, 692, 'Mariano ouhhih', 'boirioriubruihbuitrhibribirburbtruhribrbrhb', '2024/05/29 13:03'),
(15, 692, 'Mariano ouhhih', 'boirioriubruihbuitrhibribirburbtruhribrbrhb', '2024/05/29 13:04'),
(16, 692, 'Mariano ohouo', 'uuuuuuuuuuu', '2024/05/29 13:04'),
(17, 692, 'oxnel', 'trop nul\r\n', '2024/05/29 13:05'),
(18, 692, 'C', '', '2024/05/29 13:05'),
(19, 692, 'viesky', 'c\'est quoi ça ?', '2024/05/29 13:06'),
(20, 610, 'ILLa', 'pas mal', '2024/05/29 13:09'),
(21, 610, '', '', '2024/05/29 13:09'),
(22, 64, 'Mariano jjnj', '', '2024/05/29 13:15'),
(23, 64, 'Maria', '', '2024/05/29 13:16'),
(24, 64, 'Maria', '', '2024/05/29 13:17'),
(25, 64, 'Maria', 'hviug', '2024/05/29 13:17'),
(26, 64, 'Mariano ouhhih', 'jkb', '2024/05/29 13:17'),
(27, 64, 'Lenxo KITI', 'lll', '2024/05/29 13:17'),
(28, 64, 'Mariano ouhhih', 'kkk', '2024/05/29 13:18'),
(29, 64, 'Mariano ohouo', '\"\'\"\'', '2024/05/29 13:18'),
(30, 64, 'Mariano ouhhih', 'jjjn', '2024/05/29 13:18');

-- --------------------------------------------------------

--
-- Structure de la table `espace_client`
--

CREATE TABLE `espace_client` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `book_id` int(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `id_book` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `user_id`, `id_book`, `title`, `price`) VALUES
(34, 53215, 488, '', 0),
(35, 53215, 391, '', 0),
(36, 53215, 488, '', 0),
(37, 53215, 225, '', 0),
(38, 53215, 722, '', 0),
(39, 53215, 703, '', 0),
(40, 53215, 488, '', 0),
(41, 53215, 703, '', 0),
(42, 0, 933, '', 0),
(43, 53215, 722, '', 0),
(44, 53215, 225, '', 0),
(45, 53215, 225, '', 0),
(46, 53215, 391, '', 0),
(47, 53215, 933, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `login_date`) VALUES
(31002, 0, 'KITI', 'Lenxo', 'li@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '64827picture$.jpg', '09/06/2024 15:19'),
(33248, 0, 'Mariano Mariano', 'Mariano', 'maxwander45@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '93785car6.png', '10/06/2024 17:01'),
(38928, 0, 'florence', 'florence', 'florence@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '72878image.jpg', '09/06/2024 15:58'),
(46700, 0, 'max', 'max', 'maxviesky@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '59644folder.png', '09/06/2024 14:08'),
(53215, 0, 'KITI', 'Lenxo', 'ali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '59432folder.png', '09/06/2024 15:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `espace_client`
--
ALTER TABLE `espace_client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `espace_client`
--
ALTER TABLE `espace_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96464;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Août 2015 à 12:29
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `celialibrary`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbRecette` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `nbRecette`) VALUES
(1, 'Aucune', 0),
(2, 'Déjeuners', 2),
(3, 'Dîners rapides', 1),
(4, 'Desserts', 1),
(5, 'Plats principaux', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'gmedhoover@gmail.com', 'gmedhoover@gmail.com', 1, 'ihu22ocpp4gssowoo8sggwkwcg4cgsk', '$2y$13$ihu22ocpp4gssowoo8sggu9JNhKvEA8UHkEgx7e/fTQSFlCVoX5v2', '2015-08-12 10:43:03', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `url`, `alt`) VALUES
(1, 'none', 'none'),
(2, 'none', 'none'),
(3, 'none', 'none'),
(4, 'none', 'none'),
(5, 'none', 'none'),
(6, 'jpg', 'muffins_erable_raisins2.jpg'),
(7, 'jpg', 'panini.jpg'),
(8, 'jpg', 'brownies_alleges.jpg'),
(9, 'jpg', 'crepes_minces.jpg'),
(10, 'jpg', 'pizza_polenta.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL,
  `nomMarque` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbProd` int(11) DEFAULT NULL,
  `nbProdAutorise` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `nomMarque`, `nbProd`, `nbProdAutorise`) VALUES
(1, 'Aucune', 0, 0),
(2, 'CocaCola', 1, 1),
(3, 'Delice', 2, 2),
(4, 'Doliprane', 1, 0),
(5, 'Vanoise', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `marque_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estAutorise` tinyint(1) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `image_id`, `marque_id`, `nom`, `estAutorise`, `description`) VALUES
(1, 1, 5, 'Levure', 0, 'a'),
(2, 2, 3, 'Danao', 1, 'a'),
(3, 3, 4, '500 mg cp : 100', 0, 'a'),
(4, 4, 2, 'Boisson Zero', 1, 'a'),
(5, 5, 3, 'Yaourt Naturelle', 1, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `temp` smallint(6) NOT NULL,
  `ingredients` longtext COLLATE utf8_unicode_ci NOT NULL,
  `direction` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`id`, `image_id`, `categorie_id`, `nom`, `temp`, `ingredients`, `direction`) VALUES
(1, 6, 2, 'Muffins aux raisins et à l’érable', 40, '5 g de farine d’amarante\r\n50 g de farine de sorgho\r\n2 c. à soupe de psyllium\r\n1 c. à soupe de poudre à pâte\r\nUne pincée de sel\r\n½ tasse de raisins secs ou canneberges séchées\r\n75 ml d’huile d’olive\r\n75 ml de lait ou de lait végétal\r\n60 ml de miel\r\n2 œufs\r\nFlocons de sucre d’érable pour la garniture', 'Préchauffer le four à 350°.\r\nGraisser le moule à muffins ou utilisez des caissettes en papier.\r\nDans un grand bol, mélanger tous les ingrédients secs sauf les raisins\r\nDans un autre bol, bien mélanger l’huile, le miel et le lait.\r\nAjouter les œufs aux ingrédients liquides et bien brasser.\r\n Ajouter les ingrédients liquides aux ingrédients secs et mêler à l’aide d’une spatule sans trop brasser.\r\nAjouter les raisins secs ou les canneberges.\r\nRépartir la pâte dans les caissettes.\r\nSaupoudrer de flocons de sucre d’érable et cuire 20 minutes.'),
(2, 7, 3, 'Panini au sarrasin garni sans gluten', 30, 'Pâte\r\n\r\n½ tasse  de farine de sarrasin sans gluten\r\n½ tasse de farine tout usage sans gluten\r\n1/4 c. à thé de gomme de xanthane\r\n1 Pincée de sel\r\n1/3 tasse  de lait\r\n2 Œufs (gros)\r\n2 c. à table d’huile d’olive ou canola\r\nUn peu d’huile de canola ou d’olive  pour badigeonner une poêle antiadhésive \r\nGarniture\r\n\r\n1 c. à table  de fromage à la crème léger à tartiner\r\n1 ½ c. à thé  de pesto de tomates séchées\r\nMorceaux finement coupés de volaille cuite ou 2 à 3 tranches de poitrines de dinde cuites\r\nQuelques feuilles de bébé épinards\r\nFromage Suisse ou Jarsberg en lanières finement tranchées', 'Dans un grand bol, bien mélanger les farines et le sel. Ajouter progressivement le lait en mélangeant avec un fouet; incorporer les œufs et l’huile. Laisser reposer 15 minutes à la température ambiante.\r\nChauffer une poêle antiadhésive ou une poêle à crêpes d’environ 9 pouces (23 cm) à feu moyen.\r\nÀ l’aide d’un pinceau, badigeonner la poêle d’un peu d’huile de canola ou d’olive. Verser environ ½ tasse (125 ml) de pâte à crêpes  et basculer légèrement la poêle dans tous les sens pour bien répartir la pâte sur toute la surface.\r\nCuire pendant environ 2 minutes ou jusqu’à ce que des petites bulles apparaissent en surface et que le pourtour de la pâte soit cuit. Tourner la crêpe et poursuivre la cuisson pendant 30 secondes. Retirer de la poêle et disposer sur une tôle. Procéder de la même façon pour le reste de la pâte.\r\nTartiner chaque crêpe du fromage à la crème puis du pesto de tomates séchées. Disposer les morceaux de poulet au centre du panini, les épinards et le fromage. Replier les 2 côtés opposés puis rouler pour bien fermer.\r\nChauffer une poêle striée ou antiadhésive et faire griller les rouleaux à feu moyen-vif pendant environ 1 minute de chaque côté ou jusqu’à ce qu’elles soient dorées. Couper chaque rouleau et servir avec une salade.'),
(3, 8, 4, 'Brownies allégés sans gluten', 30, '1 Œuf\r\n½ tasse  de sucre\r\nc. table d’huile de canola\r\n¼ tasse de poudre de cacao sans gluten, tamisée\r\n¾ tasse  de compote de pommes non sucrée\r\n2 c. thé de vanille\r\n½ tasse de farine tout usage sans gluten\r\n¼ c. thé  de bicarbonate de sodium\r\n¼ c. thé de sel', 'Préchauffer le four à 350° F et graisser un moule carré de 8 pouces. Saupoudrer d’un peu de poudre de cacao et secouer pour éliminer le surplus.\r\nTamiser ensemble  la farine, le bicarbonate et le sel; réserver.\r\nDans un bol, fouetter l’œuf avec le sucre, l’huile, la poudre de cacao, la compote  et la vanille. Battre jusqu’à l’obtention d’un mélange homogène.\r\nIncorporer doucement les ingrédients secs puis verser dans le moule graissé. Laisser reposer 20 minutes à la température de la pièce avant de mettre au four.\r\nCuire au four pendant 20 minutes ou jusqu’à ce que  la pâte soit prise. Laisser refroidir complètement avant de couper avec un couteau rincé à l’eau chaude.\r\nServir avec des fruits ou un peu de yogourt.'),
(4, 9, 2, 'Crêpes minces sans gluten', 20, '1 tasse de lait\r\n1 c. à  soupe de vanille\r\n1 ou 2 œufs\r\n1 c. à  soupe d’huile d''olive\r\n1 c. à  soupe  de sucre blanc\r\n1 c. à  soupe de poudre d''amandes\r\n1 tasse de farine tout usage sans gluten', 'Mélanger tous les ingrédients avec une mixette\r\nFaire chauffer une poêle antiadhésive de 10 po.\r\nFaire fondre du beurre ou y verser de l''huile\r\nVerser une cuillère de service du mélange\r\nAttendre en roulant la poêle de tous les côtés.\r\nLaisser cuire jusqu''à ce que le côté visible semble plus sec. Tourner la crêpe pour cuire de l''autre côté. \r\nP.S. Brasser souvent la pâte afin de bien mélanger la farine avec le liquide, la farine a tendance à s''en aller vers le fond.'),
(5, 10, 5, 'Pizza sans gluten sur polenta', 40, 'Base en semoule de maïs\r\n ¾ tasse (180 ml)  de semoule de maïs sans gluten\r\n3 tasses (750 ml) de bouillon de poulet sans gluten\r\n15 ml d’huile d’olive \r\nSauce aux tomates maison\r\n1 c. thé de fleur d’ail conservée dans l’huile ou une gousse d’ail hachée\r\n1 c. table d’huile d’olive\r\nOignon moyen haché\r\ntasses de tomates fraîches (idéalement des tomates italiennes pour avoir moins de liquide et de pépins)\r\nc. table d’huile d’olive vierge\r\nFines herbes séchées  (basilic, origan) ou basilic frais au goût (à ajouter à la toute fin de la cuisson seulement)\r\nSel et poivre au goût', 'Amener le bouillon à ébullition et ajouter la semoule progressivement.\r\nBrasser légèrement pour éviter la formation de grumeaux. Couvrir et faire cuire pendant 15 minutes ou jusqu’à ce que la semoule ait absorbé tout le liquide et ait épaissi.\r\nAjouter l’huile, brasser et verser sur une tôle à pizza graissée.\r\nÉtendre uniformément \r\nSauce\r\nDans un chaudron moyen, faire suer l’oignon haché avec l’ail et laisser attendrir quelques instants.\r\nAjouter les tomates, l’huile, les fines herbes séchées, le sel et le poivre. Laisser mijoter à feu doux, à découvert pendant 30 à 40 minutes. Si utilisation de basilic frais, l’ajouter à la fin seulement de la cuisson. \r\nGarniture\r\n1 tasse de sauce tomates maison\r\nLégumes au choix, sautés légèrement dans un poêlon antiadhésif avec un peu d’huile d’olive\r\nThon en conserve ou surplus de morceaux de poulet ou de dinde\r\nFromage Mozzarella partiellement écrémé, râpé (environ 200 g) \r\nMontage\r\nÉtendre la sauce tomates sur la base de semoule,  disposer  les légumes sautés et parsemer de fromage râpé.\r\n \r\nCuisson\r\nCuire à 425°F pendant 10-15  minutes ou jusqu’à ce que le fromage ait fondu et soit légèrement doré.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_29A5EC273DA5256D` (`image_id`), ADD KEY `IDX_29A5EC274827B9B2` (`marque_id`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_49BB63903DA5256D` (`image_id`), ADD KEY `IDX_49BB6390BCF5E72D` (`categorie_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
ADD CONSTRAINT `FK_29A5EC273DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
ADD CONSTRAINT `FK_29A5EC274827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
ADD CONSTRAINT `FK_49BB63903DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
ADD CONSTRAINT `FK_49BB6390BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

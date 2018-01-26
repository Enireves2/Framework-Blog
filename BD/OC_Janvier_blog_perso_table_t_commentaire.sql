
-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

CREATE TABLE `t_commentaire` (
  `COM_ID` int(11) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(33, '2018-01-07 22:48:15', 'A. Nonyme', 'Bravo pour ce début', 1),
(34, '2018-01-07 22:48:15', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1),
(35, '2018-01-07 22:49:57', 'A. Nonyme', 'Bravo pour ce début', 1),
(36, '2018-01-07 22:49:57', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1),
(37, '2018-01-07 22:49:58', 'A. Nonyme', 'Bravo pour ce début', 1),
(38, '2018-01-07 22:49:58', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1),
(39, '2018-01-07 22:49:58', 'A. Nonyme', 'Bravo pour ce début', 1),
(40, '2018-01-07 22:49:58', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1),
(41, '2018-01-07 22:51:16', 'A. Nonyme', 'Bravo pour ce début', 1),
(42, '2018-01-07 22:51:16', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1),
(43, '2018-01-07 22:51:16', 'A. Nonyme', 'Bravo pour ce début', 1),
(44, '2018-01-07 22:51:16', 'A. Nonyme', 'Merci ! Je vais continuer sur ma lancée', 1);


-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

CREATE TABLE `t_billet` (
  `BIL_ID` int(11) NOT NULL,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(73, '2018-01-07 22:48:15', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(74, '2018-01-07 22:48:15', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(75, '2018-01-07 22:49:57', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(76, '2018-01-07 22:49:57', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(77, '2018-01-07 22:49:58', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(78, '2018-01-07 22:49:58', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(79, '2018-01-07 22:49:58', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(80, '2018-01-07 22:49:58', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(81, '2018-01-07 22:51:16', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(82, '2018-01-07 22:51:16', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(83, '2018-01-07 22:51:16', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur mon blog.'),
(84, '2018-01-07 22:51:16', 'Au travail', 'Il faut enrichir ce blog dès maintenant.');

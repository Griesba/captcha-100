CREATE TABLE `couple` (
  `IdCouple` int(11) NOT NULL,
  `IdImage` int(11) NOT NULL,
  `IdQuestion` int(11) NOT NULL,
  `PositionCouple` int(11) NOT NULL,
  `CompteurCouple` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`IdCouple`, `IdImage`, `IdQuestion`, `PositionCouple`, `CompteurCouple`) VALUES
(2, 1, 3, 0, 0),
(3, 1, 1, 0, 0),
(4, 1, 1, 0, 0),
(5, 1, 2, 0, 0),
(6, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `IdImage` int(11) NOT NULL,
  `LienImage` varchar(100) NOT NULL,
  `CompteurImage` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`IdImage`, `LienImage`, `CompteurImage`) VALUES
(1, 'image1.jpg', 0),
(2, 'image2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `IdQuestion` int(11) NOT NULL,
  `LibelleQuestion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`IdQuestion`, `LibelleQuestion`) VALUES
(1, 'Quelle est la couleur du cheval blanc d\'Henri IV ?'),
(2, 'Question 2'),
(3, 'Hello world'),
(4, 'How are you ?'),
(5, 'Im fine'),
(6, 'And u ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
  ADD PRIMARY KEY (`IdCouple`),
  ADD KEY `FK_IdImage_Couple` (`IdImage`),
  ADD KEY `FK_IdQuestion_Couple` (`IdQuestion`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`IdImage`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`IdQuestion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couple`
--
ALTER TABLE `couple`
  MODIFY `IdCouple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `IdImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `IdQuestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `couple`
--
ALTER TABLE `couple`
  ADD CONSTRAINT `FK_IdImage_Couple` FOREIGN KEY (`IdImage`) REFERENCES `image` (`IdImage`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_IdQuestion_Couple` FOREIGN KEY (`IdQuestion`) REFERENCES `question` (`IdQuestion`) ON DELETE CASCADE ON UPDATE NO ACTION;
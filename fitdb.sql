-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 11:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `idExercise` int(11) NOT NULL,
  `exerciseName` varchar(45) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE `mentorship` (
  `idMentorship` int(11) NOT NULL,
  `startDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `endDate` timestamp NULL DEFAULT NULL,
  `idTrainee` int(11) NOT NULL,
  `idTrainer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `noteentry`
--

CREATE TABLE `noteentry` (
  `idNoteEntry` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  `sets` int(11) NOT NULL,
  `idExercise` int(11) NOT NULL,
  `idTrainingNote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(45) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `deactivationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `roleName`, `isActive`, `creationDate`, `deactivationDate`) VALUES
(1, 'admin', 1, '2024-05-13 13:08:28', NULL),
(2, 'trainee', 1, '2024-05-13 13:09:18', NULL),
(3, 'trainer', 1, '2024-05-13 13:10:55', NULL);

--
-- Triggers `role`
--
DELIMITER $$
CREATE TRIGGER `reset_role_deactivation_date` BEFORE UPDATE ON `role` FOR EACH ROW BEGIN
   IF NEW.isActive = 1 THEN
      SET NEW.deactivationDate = NULL;
   END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_role_deactivation_date` BEFORE UPDATE ON `role` FOR EACH ROW BEGIN
   IF NEW.isActive = 0 THEN
      SET NEW.deactivationDate = NOW();
   END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rolelog`
--

CREATE TABLE `rolelog` (
  `idRoleLog` int(11) NOT NULL,
  `assignmentDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `removalDate` timestamp NULL DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `rolelog`
--

INSERT INTO `rolelog` (`idRoleLog`, `assignmentDate`, `removalDate`, `idUser`, `idRole`) VALUES
(1, '2024-05-13 14:36:41', NULL, 1, 1),
(2, '2024-05-13 14:50:10', '2024-05-28 17:08:04', 2, 2),
(3, '2024-05-13 14:50:47', '2024-05-28 17:12:33', 3, 3),
(4, '2024-05-13 14:51:32', NULL, 4, 2),
(5, '2024-05-13 19:10:17', NULL, 5, 3),
(6, '2024-05-13 19:39:25', '2024-05-28 18:07:16', 6, 2),
(7, '2024-05-14 12:37:44', NULL, 7, 2),
(8, '2024-05-14 13:14:19', '2024-05-28 17:49:30', 8, 2),
(9, '2024-05-27 19:20:26', '2024-05-28 17:24:10', 9, 1),
(12, '2024-05-28 17:08:04', '2024-05-28 17:10:26', 2, 3),
(13, '2024-05-28 17:10:26', '2024-05-28 17:19:49', 2, 1),
(14, '2024-05-28 17:12:33', '2024-05-28 17:49:37', 3, 3),
(15, '2024-05-28 17:19:49', '2024-05-28 18:06:38', 2, 3),
(16, '2024-05-28 17:24:11', '2024-05-28 17:49:08', 9, 2),
(17, '2024-05-28 17:49:08', '2024-05-28 22:13:56', 9, 1),
(18, '2024-05-28 17:49:30', NULL, 8, 2),
(19, '2024-05-28 17:49:37', '2024-05-28 17:49:51', 3, 1),
(20, '2024-05-28 17:49:51', '2024-05-28 18:06:33', 3, 3),
(21, '2024-05-28 18:06:33', NULL, 3, 3),
(22, '2024-05-28 18:06:38', '2024-05-28 18:08:55', 2, 2),
(23, '2024-05-28 18:07:16', NULL, 6, 2),
(24, '2024-05-28 18:08:55', NULL, 2, 1),
(25, '2024-05-28 22:13:56', NULL, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trainingnote`
--

CREATE TABLE `trainingnote` (
  `idTrainingNote` int(11) NOT NULL,
  `noteTitle` varchar(45) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `typeName` varchar(45) NOT NULL,
  `repUnit` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registrationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `isActive` tinyint(1) NOT NULL,
  `deactivationDate` timestamp NULL DEFAULT NULL,
  `editDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `idEditor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `email`, `password`, `registrationDate`, `isActive`, `deactivationDate`, `editDate`, `idEditor`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$0rG7.9Ung1B1RSvnjYOZAeOIgbIU.0udx8KkL/gwDtYCDIZdOIHEa', '2024-05-13 14:34:55', 1, NULL, '2024-05-28 14:57:37', NULL),
(2, 'ziutek12', 'ziutek@gmail.com', '$2y$10$Y3vRMX49n3LeeBS.2ZDGKeyLaqeK1KsGUrbkgiG0CzjUKBYEJKtjq', '2024-05-13 14:50:10', 1, NULL, '2024-05-28 22:13:39', 1),
(3, 'stefek121', 'stefek@gmail.com', '$2y$10$rv1XsHt2.Mv8nmh62/1uI.cXWQQ..JIXvf6SFSAo2pLiJtj7jyjf2', '2024-05-13 14:50:47', 0, '2024-05-28 18:06:32', '2024-05-28 18:06:32', 1),
(4, 'janusz3', 'janusz@123.com', '$2y$10$Em.KOzTcgSxPRG21PAktWOKqnYRQojVidg6m7GgQ7Uq8YrslovQ5W', '2024-05-13 14:51:32', 0, '2024-05-28 17:19:07', '2024-05-28 17:19:07', 1),
(5, 'adam', 'adam@gmail.com', '$2y$10$JM0l6YxIKIc3WdQVFfoo/Oz3gfeMRI27PGXZvXhGXoFE4OBCBvL0K', '2024-05-13 19:10:17', 1, NULL, '2024-05-28 17:16:07', 2),
(6, 'bartek15', 'bartek@b.com', '$2y$10$8O.CFWf0ie1i.SfaVIpaZumTykkCyrx.Napo9Ou7fsedzxdfYjv82', '2024-05-13 19:39:25', 1, NULL, '2024-05-28 18:08:39', 1),
(7, 'fajnyuser', 'user@user.com', '$2y$10$KzwxLSPVd34IIUwgcmmvluIfBZe/IL2rTW/vD3Pswc1.O6fLMYA..', '2024-05-14 12:37:44', 1, NULL, '2024-05-28 14:57:37', NULL),
(8, 'gosc4', 'gosc@gmail.com', '$2y$10$Vbzuozj0AdtKMMY5vgNzDuRRvdTHdyQxkXpzS0NiNzxQmkvCx37mm', '2024-05-14 13:14:19', 1, NULL, '2024-05-28 17:49:30', NULL),
(9, 'mietek', 'admin2@gmail.com', '$2y$10$Ty5hnuRZGusVZBiXCQjRcuGOEE9YP/dxXvrzD/T6VPWJfdEz.7lqm', '2024-05-27 19:17:45', 1, NULL, '2024-05-28 22:13:56', 1);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `reset_user_deactivation_date` BEFORE UPDATE ON `user` FOR EACH ROW BEGIN
   IF NEW.isActive = 1 THEN
      SET NEW.deactivationDate = NULL;
   END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_user_deactivation_date` BEFORE UPDATE ON `user` FOR EACH ROW BEGIN
   IF NEW.isActive = 0 THEN
      SET NEW.deactivationDate = NOW();
   END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`idExercise`),
  ADD UNIQUE KEY `idExercise` (`idExercise`),
  ADD KEY `Exercise_fk2` (`idType`);

--
-- Indexes for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD PRIMARY KEY (`idMentorship`),
  ADD UNIQUE KEY `idMentorship` (`idMentorship`),
  ADD KEY `Mentorship_fk3` (`idTrainee`),
  ADD KEY `Mentorship_fk4` (`idTrainer`);

--
-- Indexes for table `noteentry`
--
ALTER TABLE `noteentry`
  ADD PRIMARY KEY (`idNoteEntry`),
  ADD UNIQUE KEY `idNoteEntry` (`idNoteEntry`),
  ADD KEY `NoteEntry_fk3` (`idExercise`),
  ADD KEY `NoteEntry_fk4` (`idTrainingNote`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`),
  ADD UNIQUE KEY `idRole` (`idRole`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indexes for table `rolelog`
--
ALTER TABLE `rolelog`
  ADD PRIMARY KEY (`idRoleLog`),
  ADD UNIQUE KEY `idRoleLog` (`idRoleLog`),
  ADD KEY `RoleLog_fk3` (`idUser`),
  ADD KEY `RoleLog_fk4` (`idRole`);

--
-- Indexes for table `trainingnote`
--
ALTER TABLE `trainingnote`
  ADD PRIMARY KEY (`idTrainingNote`),
  ADD UNIQUE KEY `idTrainingNote` (`idTrainingNote`),
  ADD KEY `TrainingNote_fk3` (`idUser`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`),
  ADD UNIQUE KEY `idType` (`idType`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser` (`idUser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `User_fk6` (`idEditor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `idExercise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentorship`
--
ALTER TABLE `mentorship`
  MODIFY `idMentorship` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noteentry`
--
ALTER TABLE `noteentry`
  MODIFY `idNoteEntry` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rolelog`
--
ALTER TABLE `rolelog`
  MODIFY `idRoleLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `trainingnote`
--
ALTER TABLE `trainingnote`
  MODIFY `idTrainingNote` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `Exercise_fk2` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);

--
-- Constraints for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD CONSTRAINT `Mentorship_fk3` FOREIGN KEY (`idTrainee`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `Mentorship_fk4` FOREIGN KEY (`idTrainer`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `noteentry`
--
ALTER TABLE `noteentry`
  ADD CONSTRAINT `NoteEntry_fk3` FOREIGN KEY (`idExercise`) REFERENCES `exercise` (`idExercise`),
  ADD CONSTRAINT `NoteEntry_fk4` FOREIGN KEY (`idTrainingNote`) REFERENCES `trainingnote` (`idTrainingNote`);

--
-- Constraints for table `rolelog`
--
ALTER TABLE `rolelog`
  ADD CONSTRAINT `RoleLog_fk3` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `RoleLog_fk4` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);

--
-- Constraints for table `trainingnote`
--
ALTER TABLE `trainingnote`
  ADD CONSTRAINT `TrainingNote_fk3` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_fk6` FOREIGN KEY (`idEditor`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

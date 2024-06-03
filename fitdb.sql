-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:50 PM
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

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`idExercise`, `exerciseName`, `idType`) VALUES
(1, 'podciaganie podchwytem', 2),
(2, 'pompki', 2),
(3, 'plank', 1),
(6, 'przysiad', 2),
(7, 'podciąganie nachwytem', 2),
(8, 'krzesełko', 1),
(9, 'Bieżnia', 3),
(10, 'Pajacyki', 3),
(11, 'bulgary', 2),
(12, 'przysiad ze sztangą', 2),
(13, 'Wykroki', 2),
(14, 'pompki diamentowe', 2),
(15, 'biceps curls', 2);

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

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`idMentorship`, `startDate`, `endDate`, `idTrainee`, `idTrainer`) VALUES
(2, '2024-06-03 11:20:44', NULL, 6, 5),
(3, '2024-06-03 12:16:13', NULL, 2, 4),
(4, '2024-06-03 12:36:18', '2024-06-03 12:44:24', 1, 5),
(5, '2024-06-03 12:45:20', '2024-06-03 14:47:38', 1, 5),
(6, '2024-06-03 13:19:31', NULL, 3, 4),
(7, '2024-06-03 14:48:59', '2024-06-03 17:37:47', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `noteentry`
--

CREATE TABLE `noteentry` (
  `idNoteEntry` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  `sets` int(11) NOT NULL,
  `weight` float DEFAULT NULL,
  `idExercise` int(11) NOT NULL,
  `idTrainingNote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `noteentry`
--

INSERT INTO `noteentry` (`idNoteEntry`, `reps`, `sets`, `weight`, `idExercise`, `idTrainingNote`) VALUES
(1, 5, 3, 20, 1, 1),
(2, 25, 3, 0, 2, 1),
(3, 90, 3, 0, 3, 1),
(4, 12, 5, 0, 6, 1),
(5, 5, 5, 25, 7, 1),
(8, 60, 3, 0, 8, 1),
(9, 3600, 1, 0, 9, 2),
(10, 120, 3, 0, 10, 2),
(11, 12, 3, 20, 11, 2),
(12, 5, 5, 130, 12, 3),
(13, 120, 3, 0, 8, 3),
(14, 12, 3, 80, 13, 3),
(15, 5, 3, 30, 1, 4),
(16, 20, 5, 0, 14, 4),
(17, 12, 3, 18, 15, 4),
(18, 1850, 1, 0, 3, 5),
(19, 8, 5, 15, 1, 5),
(20, 20, 4, 30, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `idRequest` int(11) NOT NULL,
  `sendDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idSender` int(11) NOT NULL,
  `idRecipient` int(11) NOT NULL
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
(1, '2024-05-13 14:36:41', '2024-06-01 10:46:36', 1, 1),
(2, '2024-05-13 14:50:10', '2024-05-28 17:08:04', 2, 2),
(3, '2024-05-13 14:50:47', '2024-05-28 17:12:33', 3, 3),
(4, '2024-05-13 14:51:32', '2024-06-02 21:13:16', 4, 2),
(5, '2024-05-13 19:10:17', '2024-06-01 10:46:30', 5, 3),
(6, '2024-05-13 19:39:25', '2024-05-28 18:07:16', 6, 2),
(7, '2024-05-14 12:37:44', '2024-06-01 10:59:33', 7, 2),
(12, '2024-05-28 17:08:04', '2024-05-28 17:10:26', 2, 3),
(13, '2024-05-28 17:10:26', '2024-05-28 17:19:49', 2, 1),
(14, '2024-05-28 17:12:33', '2024-05-28 17:49:37', 3, 3),
(15, '2024-05-28 17:19:49', '2024-05-28 18:06:38', 2, 3),
(19, '2024-05-28 17:49:37', '2024-05-28 17:49:51', 3, 1),
(20, '2024-05-28 17:49:51', '2024-05-28 18:06:33', 3, 3),
(21, '2024-05-28 18:06:33', '2024-06-01 10:53:23', 3, 3),
(22, '2024-05-28 18:06:38', '2024-05-28 18:08:55', 2, 2),
(23, '2024-05-28 18:07:16', '2024-06-01 10:46:33', 6, 2),
(24, '2024-05-28 18:08:55', '2024-06-01 10:44:39', 2, 1),
(26, '2024-06-01 10:44:40', '2024-06-01 10:44:48', 2, 2),
(27, '2024-06-01 10:44:49', '2024-06-01 10:44:57', 2, 1),
(28, '2024-06-01 10:44:57', '2024-06-01 10:46:41', 2, 2),
(29, '2024-06-01 10:46:30', '2024-06-03 12:49:17', 5, 3),
(30, '2024-06-01 10:46:33', '2024-06-03 12:49:47', 6, 2),
(31, '2024-06-01 10:46:36', '2024-06-01 10:53:41', 1, 1),
(32, '2024-06-01 10:46:41', '2024-06-01 10:46:47', 2, 1),
(33, '2024-06-01 10:46:47', '2024-06-01 10:46:52', 2, 2),
(34, '2024-06-01 10:46:52', '2024-06-01 10:53:16', 2, 1),
(39, '2024-06-01 10:53:16', '2024-06-01 10:54:25', 2, 2),
(40, '2024-06-01 10:53:23', '2024-06-01 10:53:33', 3, 2),
(41, '2024-06-01 10:53:33', '2024-06-02 21:06:30', 3, 3),
(42, '2024-06-01 10:53:41', NULL, 1, 1),
(43, '2024-06-01 10:54:25', '2024-06-01 10:54:30', 2, 2),
(44, '2024-06-01 10:54:30', '2024-06-01 11:00:11', 2, 2),
(45, '2024-06-01 10:59:33', '2024-06-01 11:00:43', 7, 1),
(46, '2024-06-01 11:00:12', '2024-06-01 11:00:40', 2, 3),
(47, '2024-06-01 11:00:40', '2024-06-01 11:22:26', 2, 2),
(48, '2024-06-01 11:00:43', '2024-06-03 12:54:38', 7, 2),
(49, '2024-06-01 11:22:26', '2024-06-01 11:41:15', 2, 1),
(50, '2024-06-01 11:41:15', '2024-06-01 11:41:39', 2, 3),
(51, '2024-06-01 11:41:39', '2024-06-01 11:46:09', 2, 1),
(52, '2024-06-01 11:46:09', '2024-06-02 15:54:55', 2, 1),
(53, '2024-06-02 15:54:56', '2024-06-02 21:06:24', 2, 1),
(54, '2024-06-02 21:06:24', NULL, 2, 2),
(55, '2024-06-02 21:06:30', NULL, 3, 2),
(56, '2024-06-02 21:13:16', '2024-06-03 12:54:27', 4, 3),
(57, '2024-06-03 12:49:17', '2024-06-03 12:49:31', 5, 3),
(58, '2024-06-03 12:49:31', NULL, 5, 3),
(59, '2024-06-03 12:49:47', '2024-06-03 12:54:19', 6, 2),
(60, '2024-06-03 12:54:19', NULL, 6, 2),
(61, '2024-06-03 12:54:27', NULL, 4, 3),
(62, '2024-06-03 12:54:38', NULL, 7, 2);

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

--
-- Dumping data for table `trainingnote`
--

INSERT INTO `trainingnote` (`idTrainingNote`, `noteTitle`, `creationDate`, `idUser`) VALUES
(1, 'FBW', '2024-06-02 11:57:00', 5),
(2, 'Trening cardio', '2024-06-02 15:29:04', 1),
(3, 'Trening nóg', '2024-06-02 17:20:51', 6),
(4, 'Trening góry', '2024-06-02 22:20:55', 1),
(5, 'Fajny trening', '2024-06-03 13:20:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `typeName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idType`, `typeName`) VALUES
(1, 'izometryczne'),
(2, 'izotoniczne'),
(3, 'aerobowe');

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
(1, 'admin', 'admin@gmail.com', '$2y$10$0rG7.9Ung1B1RSvnjYOZAeOIgbIU.0udx8KkL/gwDtYCDIZdOIHEa', '2024-05-13 14:34:55', 1, NULL, '2024-06-02 22:26:51', 1),
(2, 'ziutek1', 'ziutek@gmail.com', '$2y$10$Y3vRMX49n3LeeBS.2ZDGKeyLaqeK1KsGUrbkgiG0CzjUKBYEJKtjq', '2024-05-13 14:50:10', 1, NULL, '2024-06-01 10:54:25', 1),
(3, 'stefek121', 'stefek@gmail.com', '$2y$10$rv1XsHt2.Mv8nmh62/1uI.cXWQQ..JIXvf6SFSAo2pLiJtj7jyjf2', '2024-05-13 14:50:47', 1, NULL, '2024-06-02 21:35:02', 1),
(4, 'janusz3', 'janusz@gmail.com', '$2y$10$Em.KOzTcgSxPRG21PAktWOKqnYRQojVidg6m7GgQ7Uq8YrslovQ5W', '2024-05-13 14:51:32', 1, NULL, '2024-06-03 12:54:27', 1),
(5, 'adam', 'adam@gmail.com', '$2y$10$JM0l6YxIKIc3WdQVFfoo/Oz3gfeMRI27PGXZvXhGXoFE4OBCBvL0K', '2024-05-13 19:10:17', 1, NULL, '2024-06-03 12:49:31', 1),
(6, 'bartek15', 'bartek@gmail.com', '$2y$10$8O.CFWf0ie1i.SfaVIpaZumTykkCyrx.Napo9Ou7fsedzxdfYjv82', '2024-05-13 19:39:25', 1, NULL, '2024-06-03 12:54:19', 1),
(7, 'user', 'user@user.com', '$2y$10$KzwxLSPVd34IIUwgcmmvluIfBZe/IL2rTW/vD3Pswc1.O6fLMYA..', '2024-05-14 12:37:44', 1, NULL, '2024-06-03 12:54:38', 1);

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
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`idRequest`),
  ADD KEY `idSender` (`idSender`),
  ADD KEY `idReceiver` (`idRecipient`);

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
  MODIFY `idExercise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mentorship`
--
ALTER TABLE `mentorship`
  MODIFY `idMentorship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noteentry`
--
ALTER TABLE `noteentry`
  MODIFY `idNoteEntry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idRequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rolelog`
--
ALTER TABLE `rolelog`
  MODIFY `idRoleLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `trainingnote`
--
ALTER TABLE `trainingnote`
  MODIFY `idTrainingNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`idSender`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`idRecipient`) REFERENCES `user` (`idUser`);

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

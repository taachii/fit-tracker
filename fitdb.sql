CREATE TABLE IF NOT EXISTS `User` (
	`idUser` int AUTO_INCREMENT NOT NULL UNIQUE,
	`username` varchar(45) NOT NULL UNIQUE,
	`email` varchar(45) NOT NULL UNIQUE,
	`password` varchar(45) NOT NULL,
	`registrationDate` timestamp NOT NULL,
	`editDate` timestamp NOT NULL,
	`idEditor` int NOT NULL,
	PRIMARY KEY (`idUser`)
);

CREATE TABLE IF NOT EXISTS `Role` (
	`idRole` int AUTO_INCREMENT NOT NULL UNIQUE,
	`roleName` varchar(45) NOT NULL UNIQUE,
	`isActive` boolean NOT NULL,
	`creationDate` timestamp NOT NULL,
	`removalDate` timestamp NOT NULL,
	PRIMARY KEY (`idRole`)
);

CREATE TABLE IF NOT EXISTS `RoleLog` (
	`idRoleLog` int AUTO_INCREMENT NOT NULL UNIQUE,
	`assignmentDate` timestamp NOT NULL,
	`removalDate` timestamp NOT NULL,
	`idUser` int NOT NULL,
	`idRole` int NOT NULL,
	PRIMARY KEY (`idRoleLog`)
);

CREATE TABLE IF NOT EXISTS `Mentorship` (
	`idMentorship` int AUTO_INCREMENT NOT NULL UNIQUE,
	`startDate` timestamp NOT NULL,
	`endDate` timestamp NOT NULL,
	`idTrainee` int NOT NULL,
	`idTrainer` int NOT NULL,
	PRIMARY KEY (`idMentorship`)
);

CREATE TABLE IF NOT EXISTS `TrainingNote` (
	`idTrainingNote` int AUTO_INCREMENT NOT NULL UNIQUE,
	`noteTitle` varchar(45) NOT NULL,
	`creationDate` timestamp NOT NULL,
	`idUser` int NOT NULL,
	PRIMARY KEY (`idTrainingNote`)
);

CREATE TABLE IF NOT EXISTS `NoteEntry` (
	`idNoteEntry` int AUTO_INCREMENT NOT NULL UNIQUE,
	`reps` int NOT NULL,
	`sets` int NOT NULL,
	`idExercise` int NOT NULL,
	`idTrainingNote` int NOT NULL,
	PRIMARY KEY (`idNoteEntry`)
);

CREATE TABLE IF NOT EXISTS `Exercise` (
	`idExercise` int AUTO_INCREMENT NOT NULL UNIQUE,
	`exerciseName` varchar(45) NOT NULL,
	`idType` int NOT NULL,
	PRIMARY KEY (`idExercise`)
);

CREATE TABLE IF NOT EXISTS `Type` (
	`idType` int AUTO_INCREMENT NOT NULL UNIQUE,
	`typeName` varchar(45) NOT NULL,
	`repUnit` varchar(45) NOT NULL,
	PRIMARY KEY (`idType`)
);

ALTER TABLE `User` ADD CONSTRAINT `User_fk6` FOREIGN KEY (`idEditor`) REFERENCES `User`(`idUser`);

ALTER TABLE `RoleLog` ADD CONSTRAINT `RoleLog_fk3` FOREIGN KEY (`idUser`) REFERENCES `User`(`idUser`);

ALTER TABLE `RoleLog` ADD CONSTRAINT `RoleLog_fk4` FOREIGN KEY (`idRole`) REFERENCES `Role`(`idRole`);
ALTER TABLE `Mentorship` ADD CONSTRAINT `Mentorship_fk3` FOREIGN KEY (`idTrainee`) REFERENCES `User`(`idUser`);

ALTER TABLE `Mentorship` ADD CONSTRAINT `Mentorship_fk4` FOREIGN KEY (`idTrainer`) REFERENCES `User`(`idUser`);
ALTER TABLE `TrainingNote` ADD CONSTRAINT `TrainingNote_fk3` FOREIGN KEY (`idUser`) REFERENCES `User`(`idUser`);
ALTER TABLE `NoteEntry` ADD CONSTRAINT `NoteEntry_fk3` FOREIGN KEY (`idExercise`) REFERENCES `Exercise`(`idExercise`);

ALTER TABLE `NoteEntry` ADD CONSTRAINT `NoteEntry_fk4` FOREIGN KEY (`idTrainingNote`) REFERENCES `TrainingNote`(`idTrainingNote`);
ALTER TABLE `Exercise` ADD CONSTRAINT `Exercise_fk2` FOREIGN KEY (`idType`) REFERENCES `Type`(`idType`);

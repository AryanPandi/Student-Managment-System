-- Creating Admin Table
CREATE TABLE `admin`(
    `ID` int(10)  NOT NULL,
    `AdminName` varchar(255) DEFAULT NULL,
    `UserName` varchar(255) DEFAULT NULL,
    `MobileNumber` int(10) DEFAULT NULL,
    `Email` varchar(255)  DEFAULT NULL,
    `Password` varchar(255) DEFAULT NULL,
    `RegDate` timestamp NULL DEFAULT current_timestamp()
);
-- Inserting dummy data into Admin table
INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`) VALUES
(1,'Admin','admin',9876543210,'admin@gmail.com','admin123');
-- --------------------------------------------------------
-- Creating Class Table
CREATE TABLE `class`(
    `ID` int(10) NOT NULL,
    `CLassName` varchar(60) DEFAULT NULL,
    `Section` varchar(50) DEFAULT NULL,
    `ClassTime` timestamp NULL DEFAULT current_timestamp()
);
-- Inserting dummy data into class table
INSERT INTO `class` (`ID`, `ClassName`, `Section`) VALUES (1,'6BCE','A'),
(2,'6BCE','B'),
(3,'6BCE','C'),
(4,'6BCE','D');
-- --------------------------------------------------------
-- Creating Page Details Table
CREATE TABLE `PgDetails`(
    `ID` int(10)  NOT NULL,
    `PageType` varchar(200) DEFAULT NULL,
    `PageName` varchar(50) DEFAULT NULL,
    `PageText` varchar(200) DEFAULT NULL,
    `Email` varchar(200) DEFAULT NULL,
    `MobileNumber` int(10) DEFAULT NULL
);
-- Inserting Dummy data in Page Details tabel
INSERT INTO `PgDetails` (`ID`, `PageType`, `PageName`, `PageText`, `Email`, `MobileNumber`) VALUES
(1, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'infodata@gmail.com', 7896541236);
-- --------------------------------------------------------
-- Creating Student Table
CREATE TABLE `Student` (
  `ID` int(10)  NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` varchar(200) DEFAULT NULL,
  `MotherName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
);

ALTER TABLE admin ADD PRIMARY KEY(ID);
ALTER TABLE admin MODIFY ID int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

ALTER TABLE class ADD PRIMARY KEY(ID);
ALTER TABLE class MODIFY ID int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;

ALTER TABLE PgDetails ADD PRIMARY KEY(ID);
ALTER TABLE PgDetails MODIFY ID int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE Student ADD PRIMARY KEY(ID);
ALTER TABLE Student MODIFY ID int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;


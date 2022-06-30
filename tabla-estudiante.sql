-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para primero
CREATE DATABASE IF NOT EXISTS `primero` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `primero`;

-- Volcando estructura para tabla primero.estudiante
CREATE TABLE IF NOT EXISTS `estudiante` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_nombres` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_apellido` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_cedula` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_edad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_ciudad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `est_genero` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.estudiante: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` (`est_id`, `est_nombres`, `est_apellido`, `est_cedula`, `est_edad`, `est_ciudad`, `est_genero`) VALUES
	(3, 'Jorge', 'Duffy', '635645928-X', '16', 'Curahuasi', 'Male'),
	(5, 'Jaynell', 'Wythill', '723347758-2', '5', 'Rongkou', 'Female'),
	(6, 'Lauree', 'Halligan', '776718035-2', '6', 'Wenfu', 'Female'),
	(7, 'Zed', 'Mercer', '851089144-3', '7', 'Nassarawa', 'Male'),
	(8, 'Jacky', 'Wharmby', '265118038-6', '8', 'Aksu', 'Male'),
	(9, 'Hetty', 'Bernadzki', '841960422-4', '9', 'Cimrutu', 'Female'),
	(10, 'Nappy', 'Conti', '969644248-3', '10', 'San Roque', 'Male'),
	(11, 'Meryl', 'Baggarley', '237680836-7', '11', 'Tilburg', 'Female'),
	(12, 'Anatollo', 'Aylesbury', '614981417-3', '12', 'Águia Branca', 'Non-binary'),
	(13, 'Torey', 'Wreiford', '179723317-3', '13', 'Puncakwangi', 'Female'),
	(14, 'Heather', 'Tincey', '675558933-0', '14', 'Zongluzui', 'Female'),
	(15, 'Fidole', 'Wiggans', '762024792-0', '15', 'Bissorã', 'Male'),
	(16, 'Bevon', 'Luparti', '585300759-9', '16', 'Södertälje', 'Male'),
	(17, 'Rudolf', 'Mustill', '897544350-7', '17', 'Maulawin', 'Male'),
	(18, 'Ruprecht', 'Hallet', '027785184-X', '18', 'Nalbandyan', 'Male'),
	(19, 'Vinson', 'Ashbridge', '061115022-0', '19', 'Wugong', 'Non-binary'),
	(20, 'Fields', 'Delete', '496209458-0', '20', 'Xiyuan', 'Male'),
	(21, 'Lisa', 'Neale', '521990956-8', '21', 'Marbel', 'Female'),
	(22, 'Garek', 'Calliss', '347395580-9', '22', 'Volodarsk', 'Male'),
	(23, 'Ddene', 'Lackham', '746260964-9', '23', 'Zomba', 'Female'),
	(24, 'Shayne', 'Tothe', '066701544-2', '24', 'Wangping', 'Male'),
	(25, 'Rowen', 'Vedeniktov', '701313930-0', '25', 'El Benque', 'Male'),
	(26, 'Rudie', 'Blackley', '801524765-9', '26', 'Mangochi', 'Male'),
	(27, 'Shanda', 'Struss', '977003895-4', '27', 'Sangoleng', 'Female'),
	(28, 'Theodora', 'Ohm', '840593755-2', '28', 'Raglan', 'Female'),
	(29, 'Karolina', 'Caesmans', '528773346-1', '29', 'Sacsamarca', 'Agender'),
	(30, 'Elna', 'Tulip', '282156418-X', '30', 'Bakungan', 'Female'),
	(31, 'Cristabel', 'Flattman', '946877435-X', '31', 'Tiepu', 'Female'),
	(32, 'Tessi', 'Aldren', '435202778-2', '32', 'Obong', 'Agender'),
	(33, 'Armin', 'Ketton', '016009830-0', '33', 'Qvareli', 'Male'),
	(34, 'Douglas', 'Colbron', '853446453-7', '34', 'Goiânia', 'Male'),
	(35, 'Margarete', 'Kalinovich', '533604543-8', '35', 'Quiñota', 'Female'),
	(36, 'Cassi', 'Absalom', '707744623-9', '36', 'Fudian', 'Female'),
	(37, 'Brant', 'Emmert', '849596864-9', '37', 'Warungsugan', 'Male'),
	(38, 'Perri', 'Milborn', '822707801-X', '38', 'Kabala', 'Female'),
	(39, 'Quincey', 'Latan', '729518895-9', '39', 'Laspezia', 'Male'),
	(40, 'Cassandre', 'Keld', '690622283-X', '40', 'Vale Maceiras', 'Genderqueer'),
	(41, 'Ferdinanda', 'Slisby', '924865897-0', '41', 'Mós', 'Genderqueer'),
	(42, 'Cammi', 'Hudel', '091864266-3', '42', 'Shāhpur Chākar', 'Female'),
	(43, 'Esther', 'Skinley', '906539480-X', '43', 'Boquira', 'Polygender'),
	(44, 'Vlad', 'Flounders', '387621715-6', '44', 'Chojata', 'Genderqueer'),
	(45, 'Neysa', 'Jain', '286078339-3', '45', 'Rokiškis', 'Female'),
	(46, 'Kearney', 'Sline', '774914196-0', '46', 'Kokotów', 'Male'),
	(47, 'Misha', 'Berardt', '994113836-2', '47', 'Librazhd', 'Female'),
	(48, 'Bud', 'Farnes', '345063115-2', '48', 'Zhujiang', 'Male'),
	(49, 'Dukie', 'Blakebrough', '638660717-1', '49', 'San Jose', 'Male'),
	(50, 'Spenser', 'Peacock', '712041877-7', '50', 'Knoxville', 'Male'),
	(51, 'SAUL', 'CRIOLLO', '12432145', '15', 'QUITO', 'MARCULINO'),
	(52, 'ALEXIS', 'JARAMILLO', '2456789', '25', 'CUENCA', 'MARCULINO');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

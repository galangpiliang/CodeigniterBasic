-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for phpmvc
CREATE DATABASE IF NOT EXISTS `phpmvc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phpmvc`;

-- Dumping structure for table phpmvc.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table phpmvc.dosen: ~2 rows (approximately)
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` (`nip`, `nama`, `pass`, `level`) VALUES
	('123132', 'Dosenbiasa', 'e10adc3949ba59abbe56e057f20f883e', 2),
	('123456', 'Dosenadmin', 'e10adc3949ba59abbe56e057f20f883e', 1);
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;

-- Dumping structure for table phpmvc.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `nrp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table phpmvc.mahasiswa: ~6 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `nama`, `pass`, `nrp`, `email`, `jurusan`) VALUES
	(1, 'Galang', 'e10adc3949ba59abbe56e057f20f883e', '12145263', 'Galang@gmail.com', 'Multimedia'),
	(2, 'Piliang', 'e10adc3949ba59abbe56e057f20f883e', '963784512', 'Nusa@bsi.ac.id', 'Hukum Pidana'),
	(3, 'siswa1', 'e10adc3949ba59abbe56e057f20f883e', '456231987', 'Jonjon@yahoo.com', 'Hukum Pidana'),
	(9, 'siswa2', 'e10adc3949ba59abbe56e057f20f883e', '246846874', 'galang@dwimedia.com', 'Sistem Informasi'),
	(10, 'siswa3', 'e10adc3949ba59abbe56e057f20f883e', '12145696', 'admin@bewithdhanu.in', 'Sistem Informasi'),
	(15, 'siswa45', 'e10adc3949ba59abbe56e057f20f883e', '234', 'galang.pil@gmail.com', 'Teknik Informatika');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

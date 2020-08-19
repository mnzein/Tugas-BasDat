/*
SQLyog Community v9.63 
MySQL - 8.0.18 : Database - db_akademik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_akademik` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_akademik`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `nip_dosen` char(12) NOT NULL,
  `nama_dosen` varchar(25) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `alamat` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`nip_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `dosen` */

insert  into `dosen`(`nip_dosen`,`nama_dosen`,`email`,`alamat`) values ('123456789101','Djadjang Hendra','Djang@gmail.com','Jalan Berlian No. 5'),('123456789102','Asep Burhan','Asep7@gmail.com','Jalan Makmur No.2'),('123456789103','Cecep Khoirul','Cep@gmail.com','Jl. Kebon Kawung No. 30');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(8) NOT NULL,
  `nama_mhs` varchar(25) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama_mhs`,`jenis_kelamin`,`jurusan`,`kelas`) values ('10118132','Ahmad Juprianto','Laki-laki','Teknik Mesin','TM5'),('10118133','Nur Zein','Laki-laki','Teknik Informatika','IF3');

/*Table structure for table `matakuliah` */

DROP TABLE IF EXISTS `matakuliah`;

CREATE TABLE `matakuliah` (
  `kode_matkul` varchar(8) NOT NULL,
  `nama_matkul` varchar(20) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `semester` varchar(4) DEFAULT NULL,
  `nip_dosen` char(12) DEFAULT NULL,
  PRIMARY KEY (`kode_matkul`),
  KEY `nip_dosen` (`nip_dosen`),
  CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`nip_dosen`) REFERENCES `dosen` (`nip_dosen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `matakuliah` */

insert  into `matakuliah`(`kode_matkul`,`nama_matkul`,`sks`,`semester`,`nip_dosen`) values ('IF24319','Sistem Operasi',3,'IV','123456789102'),('IF34329','Sistem Informasi',3,'IV','123456789101');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `nim` char(8) DEFAULT NULL,
  `nama_mhs` varchar(25) DEFAULT NULL,
  `kode_matkul` varchar(8) DEFAULT NULL,
  `nama_matkul` varchar(20) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `nilai` char(1) DEFAULT NULL,
  KEY `nim` (`nim`),
  KEY `kode_matkul` (`kode_matkul`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_matkul`) REFERENCES `matakuliah` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `nilai` */

insert  into `nilai`(`nim`,`nama_mhs`,`kode_matkul`,`nama_matkul`,`sks`,`nilai`) values ('10118133','Nur Zein','IF34329','Sistem Informasi',3,'A');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ucs2;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (1,'admin','$2y$10$w0Y0aL1vSHIL7Thc4piRPOzxdqi2hSbaPteKxnJX/d/L6emfjfngq'),(2,'admin1','$2y$10$e2u3b30Ouqm06sPga.walu1K/vyJ/khr.sOGZygMrnc8CCWhiq4Vq'),(3,'admin2','$2y$10$.ihELEk8ADP7pCAQQcBVEe72q0y3jV6ysUrGEpodibw/J8WIl2RpG');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

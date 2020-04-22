-- MySQL dump 10.16  Distrib 10.2.31-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u961023140_ivote
-- ------------------------------------------------------
-- Server version	10.2.31-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin','Rizki Ade Ningsih','2020-04-21 00:00:00');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

--
-- Table structure for table `kandidat`
--

DROP TABLE IF EXISTS `kandidat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kandidat` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `foto_kandidat` varchar(256) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kandidat`
--

/*!40000 ALTER TABLE `kandidat` DISABLE KEYS */;
INSERT INTO `kandidat` VALUES (9,'Alif Muhammad & Herlan Wijaya','SI 2019 & SK 2019','IMG_20200421_1421215.jpg','<p>Belum ada ya nanti di isi</p>','<p>Belum ada ya nanti di isi<br></p>'),(10,'Ferry Nanda & M. Raihan Udda R.','SI 2018 & SI 2018','IMG_20200421_1421433.jpg','<p>Belum ada ya nanti diisi</p>','<p>Belum ada ya nanti diisi<br></p>');
/*!40000 ALTER TABLE `kandidat` ENABLE KEYS */;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES ('01031381823121','TASYA SAFITRI NUR ARIFA FAIZAL','sandi123','Akuntansi','Ekonomi'),('01031381924110','MARSHANDA NUR AFRIZA','sandi123','Akuntansi','Ekonomi'),('03021181320012','Dini Tri Utami','sandi123','Arsitektur','Teknik'),('03021181320080','MUHAMMAD FHREZA','sandi123','Teknik Sipil','Teknik'),('03021181820081','AGUS DIAN SAPUTRA','sandi','Teknik Mesin','Teknik'),('09011181924002','A. SALMAN ALFARIZI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011181924015','AUREL ADELIA','sandi123','Sistem Komputer','Ilmu Komputer'),('09011181924020','TRIEVANNI CHANTIKA','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924016','JUWINDA SEPTIA','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924017','SAMANTHA DEVI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924018','LESA FITRIANI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924019','JIHAN ATORI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924021','DWI RAHMADITA','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924022','RUTH DEBORA BR SARAGI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924023','FENTI LISANI','sandi123','Sistem Komputer','Ilmu Komputer'),('09011281924024','SEPTIARA WULANDARII','sandi123','Sistem Komputer','Ilmu Komputer'),('09021181320001','Ari Heka Setiawan','sandi123','Teknik Informatika','Ilmu Komputer'),('09021181320019','Kurnia Sandi Pratama','sandi123','Sistem Informasi','Ilmu Komputer'),('09021181924011','ROBYADI','sandi123','Teknik Informatika','Ilmu Komputer\r\n'),('09021281924008','TAAJA MEISAFATIRA ARDIA','sandi123','Teknik Informatika','Ilmu Komputer'),('09021281924010','BAGAS MUHAMMAD REZKY','sandi123','Teknik Informatika','Ilmu Komputer'),('09021281924012','MUHAMAD AZIZ ANTABARI ACTA','sandi123','Teknik Informatika','Ilmu Komputer'),('09021281924014','NAZLA DIVALIANY PUTRI','sandi123','Teknik Informatika','Ilmu Komputer'),('09021381924007','MUHAMMAD LUTFI','sandi123','Teknik Informatika','Ilmu Komputer'),('09021381924009','NANDA RIANTI','sandi123','Teknik Informatika','Ilmu Komputer'),('09021381924013','TASSYA USHWATUN HASANAH','sandi123','Teknik Informatika','Ilmu komputer'),('09031181924001','ANGELIA SAPITRI','sandi123','Teknik Informatika','Ilmu Komputer'),('09031181924003','MUHAMMAD FAHRI AL-FARISI','sandi123','Sistem Informasi','Ilmu Komputer'),('09031181924005','FANDY PERNANDA','sandi123','Manajemen Infromatika','Ilmu Komputer'),('09031181924025','IFAN RENANDA DWI PUTRA','sandi123','Sistem Informasi','Ilmu Komputer'),('09031181924030','RAFFILIA MUTIARA PURWANI','sandi123','Sistem Informasi','Ilmu Komputer'),('09031181924035','CINDY NADIRA ELFARISA ARITONANG','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924036','KANIA PUTRI KHALILAH','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924037','MUHAMMAD RIDWAN','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924038','DIAN APRIANI','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924039','ANNISA NABILAH','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924040','HABIB MAHASSIN FIRDAUS','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924041','DEVID HIDAYAT','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924042','DEVI MAULIDYA','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924043','ANNISA NABILA','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924044','MUTIARA FATHONAH','sandi123','Manajemen Informatika','Ilmu Komputer '),('09031181924045','ZAKI NUGRAHA MUHAMMAD','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031181924050','MUHAMMAD LUTFI AZIZ','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031181924053','MUHAMMAD SYACH REZA','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031281924004','RAYHAN ALFANSA','sandi123','Komputerisasi Akuntansi','Ilmu Komputer\r\n'),('09031281924006','MUHAMMAD ROZAN AZZIKRI','sandi123','Sistem Informasi','Ilmu Komputer\r\n'),('09031281924026','LIWINANTIA SALSABILAH','sandi123','Sistem Informasi','Ilmu Komputer'),('09031281924028','KARIMAH','sandi123','Sistem Informasi','Ilmu Komputer'),('09031281924031','M. ILYAS KESUMA','sandi123','Sistem Informasi','Ilmu Komputer'),('09031281924034','REZA RIZKI KURNIANSYA','sandi123','Sistem Informasi','Ilmu Komputer'),('09031281924046','LISA AGUSTINA','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031281924048','RIZKI ADE NINGSIH','sandi123','Sistem Informasi\r\n','Ilmu komputer'),('09031281924051','MUHAMAD RIZA PADLEFI','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031281924054','MUHAMMAD NOVIAN PRATAMA WIJAYA','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031381724047','RAHMAT GHIFARI PRATAMA','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031381824049','KGS. MUHAMMAD RAIHAN GHIFARI','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031381824052','M. RIYANDRA ALFARIZ SILAEN','sandi123','Komputerisasi Akuntansi','Ilmu komputer'),('09031381924027','NAPA MUTIARA','sandi123','Sistem Informasi','Ilmu Komputer'),('09031381924029','TRIA WANDA SARI','sandi123','Sistem Informasi','Ilmu Komputer'),('09031381924032','YULIZAR AFFANDY','sandi123','Sistem Informasi','Ilmu Komputer'),('09031381924033','ANNISA YASMIN SIREGAR','sandi123','Sistem Informasi','Ilmu Komputer');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

--
-- Table structure for table `voting`
--

DROP TABLE IF EXISTS `voting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voting` (
  `id_voting` int(11) NOT NULL AUTO_INCREMENT,
  `id_kandidat` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_voting`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voting`
--

/*!40000 ALTER TABLE `voting` DISABLE KEYS */;
INSERT INTO `voting` VALUES (16,9,'09011181924015','2020-04-22 02:09:47'),(17,9,'09021181320001','2020-04-22 03:05:58'),(18,10,'09021181924011','2020-04-22 03:07:33'),(19,10,'09021281924008','2020-04-22 03:09:35'),(20,10,'09021381924009','2020-04-22 04:14:29');
/*!40000 ALTER TABLE `voting` ENABLE KEYS */;

--
-- Table structure for table `waktu`
--

DROP TABLE IF EXISTS `waktu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waktu` (
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waktu`
--

/*!40000 ALTER TABLE `waktu` DISABLE KEYS */;
INSERT INTO `waktu` VALUES ('2020-04-22 21:01:00','2020-04-24 01:59:00');
/*!40000 ALTER TABLE `waktu` ENABLE KEYS */;

--
-- Dumping routines for database 'u961023140_ivote'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-22  3:56:49

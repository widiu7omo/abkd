# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.9-MariaDB)
# Database: db_sita
# Generation Time: 2019-06-28 03:40:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table identitas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `identitas`;

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nip` varchar(11) NOT NULL DEFAULT '',
  `nidn` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `gelar_depan` varchar(30) DEFAULT '',
  `gelar_belakang` varchar(30) DEFAULT '',
  `tempat` varchar(30) DEFAULT '',
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT '',
  `pend_s1` varchar(30) DEFAULT '',
  `pend_s2` varchar(30) DEFAULT '',
  `pend_s3` varchar(30) DEFAULT '',
  `bidang_ilmu` varchar(30) DEFAULT '',
  `alamat_pt` varchar(35) DEFAULT '',
  `asesor_1` varchar(50) DEFAULT '',
  `asesor_2` varchar(50) DEFAULT '',
  `email` varchar(30) DEFAULT '',
  `jab_fungsional` varchar(20) DEFAULT '',
  `jenis` varchar(30) DEFAULT '',
  `no_sertifikat` int(11) DEFAULT NULL,
  `foto_ktp` text DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `nama_pt` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `identitas` WRITE;
/*!40000 ALTER TABLE `identitas` DISABLE KEYS */;

INSERT INTO `identitas` (`id_identitas`, `id_user`, `nip`, `nidn`, `nik`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat`, `tgl_lahir`, `no_hp`, `pend_s1`, `pend_s2`, `pend_s3`, `bidang_ilmu`, `alamat_pt`, `asesor_1`, `asesor_2`, `email`, `jab_fungsional`, `jenis`, `no_sertifikat`, `foto_ktp`, `prodi`, `jurusan`, `nama_pt`)
VALUES
	(2,3,'1316034',123892882,2,'Rama Novaris','','S.Kom., M.Kom','Pelaihari','1998-05-29','0821523723','Teknik Informatika','Computer Science','','Teknik Informatika','JL. A. Yani Km. 06 Desa Panggung','Jaka Permadi','Wan Yulianti','ramanovaris@gmai.com','Lektor Kepala','DOSEN DENGAN TUGAS TAMBAHAN',231412,'header.png.png','Teknik Informatika','Teknik Informatika','Politeknik Negeri Tanah Laut'),
	(4,8,'123123',123,12333,'Sita','Dr','M.Pd','Pelaihari','2019-06-04','09786789','S1','S2','','Informatika','PT','S2','S2','dfa@lc.co','Lektor Kepala','Dosen biasa',NULL,'Simfak ERD.png',NULL,NULL,NULL);

/*!40000 ALTER TABLE `identitas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kb_pendidikan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_pendidikan`;

CREATE TABLE `kb_pendidikan` (
  `id_kbp` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbp` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kb_pendidikan` WRITE;
/*!40000 ALTER TABLE `kb_pendidikan` DISABLE KEYS */;

INSERT INTO `kb_pendidikan` (`id_kbp`, `nomor_kbp`, `jenis_kegiatan`, `bk_buktipenugasan`, `bk_sks`, `masa_penugasan`, `kinerja_sks`, `semester`, `tahun_ajaran`, `rekomendasi`, `kb_dokumen`, `id_user`)
VALUES
	(13,'005','pemrogman web','219-418-1-SM.pdf',2,'2',2,'1','2018/2019','Lanjutkan','219-418-1-SM.pdf',1),
	(22,'004','pemrogman web','pa pendi.pdf',2,'2',2,'2','2020/2021','Lanjutkan','pa pendi.pdf',1),
	(26,'23','Pemrograman Desktop','BK_01:2018.pdf',4,'4 ',4,'1','2018/2019','Selesai','BK_02:2018.pdf',3),
	(29,'27','Pem Web 2','KHS.pdf',2,'3',2,'1','2018/2019','Selesai','rails5.pdf',3);

/*!40000 ALTER TABLE `kb_pendidikan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kb_pendidikan_temp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_pendidikan_temp`;

CREATE TABLE `kb_pendidikan_temp` (
  `id_kbp_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbp` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbp_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table kb_penelitian
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_penelitian`;

CREATE TABLE `kb_penelitian` (
  `id_kbpl` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpl` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbpl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kb_penelitian` WRITE;
/*!40000 ALTER TABLE `kb_penelitian` DISABLE KEYS */;

INSERT INTO `kb_penelitian` (`id_kbpl`, `nomor_kbpl`, `jenis_kegiatan`, `bk_buktipenugasan`, `bk_sks`, `masa_penugasan`, `kinerja_sks`, `semester`, `tahun_ajaran`, `rekomendasi`, `kb_dokumen`, `id_user`)
VALUES
	(11,'2','Administrasi Jaringan','Proposal perbaikan.pdf',2,'4',2,'1','2018/2019','Lanjutkan','KHS.pdf',3),
	(12,'4','Keamanan Jaringan','IBK/2018/21.pdf',4,'5',2,'1','2018/2019','Lanjutkan','Proposal perbaikan.pdf',3),
	(14,'2','Administrasi Jaringan','IBK/2018/22.pdf',2,'4',2,'1','2018/2019','Lanjutkan','Proposal perbaikan.pdf',3);

/*!40000 ALTER TABLE `kb_penelitian` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kb_penelitian_temp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_penelitian_temp`;

CREATE TABLE `kb_penelitian_temp` (
  `id_kbpl_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpl` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbpl_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table kb_pengabdian_masy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_pengabdian_masy`;

CREATE TABLE `kb_pengabdian_masy` (
  `id_kbpm` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpm` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbpm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kb_pengabdian_masy` WRITE;
/*!40000 ALTER TABLE `kb_pengabdian_masy` DISABLE KEYS */;

INSERT INTO `kb_pengabdian_masy` (`id_kbpm`, `nomor_kbpm`, `jenis_kegiatan`, `bk_buktipenugasan`, `bk_sks`, `masa_penugasan`, `kinerja_sks`, `semester`, `tahun_ajaran`, `rekomendasi`, `kb_dokumen`, `id_user`)
VALUES
	(1,'001','alpro','219-418-1-SM.pdf',2,'2',2,'1','2018/2019','Lanjutkan','219-418-1-SM.pdf',1),
	(4,'2','fda','KHS.pdf',6,'dfahjk',4,'1','2018/2019','Lanjutkan','rails5.pdf',3),
	(5,'5','Pem Web 2','rails5.pdf',3,'dfhj',4,'1','2018/2019','Selesai','Proposal perbaikan.pdf',3);

/*!40000 ALTER TABLE `kb_pengabdian_masy` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kb_pengabdian_masy_temp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_pengabdian_masy_temp`;

CREATE TABLE `kb_pengabdian_masy_temp` (
  `id_kbpm_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpm` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbpm_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table kb_penunjang_lain
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_penunjang_lain`;

CREATE TABLE `kb_penunjang_lain` (
  `id_kbpn` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpn` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbpn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kb_penunjang_lain` WRITE;
/*!40000 ALTER TABLE `kb_penunjang_lain` DISABLE KEYS */;

INSERT INTO `kb_penunjang_lain` (`id_kbpn`, `nomor_kbpn`, `jenis_kegiatan`, `bk_buktipenugasan`, `bk_sks`, `masa_penugasan`, `kinerja_sks`, `semester`, `tahun_ajaran`, `rekomendasi`, `kb_dokumen`, `id_user`)
VALUES
	(21,'21','Algoritma Pemograman','rails5.pdf',4,'lima',4,'2','2018/2019','Gagal','rails5.pdf',3);

/*!40000 ALTER TABLE `kb_penunjang_lain` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kb_penunjang_lain_temp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kb_penunjang_lain_temp`;

CREATE TABLE `kb_penunjang_lain_temp` (
  `id_kbp_temp` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_kbpn` varchar(10) NOT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `bk_buktipenugasan` text NOT NULL,
  `bk_sks` int(11) NOT NULL,
  `masa_penugasan` varchar(30) NOT NULL,
  `kinerja_sks` int(11) NOT NULL,
  `rekomendasi` varchar(30) NOT NULL,
  `kb_dokumen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_kbp_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table kewajiban_khusus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kewajiban_khusus`;

CREATE TABLE `kewajiban_khusus` (
  `id_kewajiban` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(10) NOT NULL,
  `judul_karya` varchar(30) NOT NULL,
  `jenis_karya` varchar(20) NOT NULL,
  `forum_publikasi` text NOT NULL,
  `bukti_dokumen` text NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kewajiban`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kewajiban_khusus` WRITE;
/*!40000 ALTER TABLE `kewajiban_khusus` DISABLE KEYS */;

INSERT INTO `kewajiban_khusus` (`id_kewajiban`, `tahun`, `judul_karya`, `jenis_karya`, `forum_publikasi`, `bukti_dokumen`, `id_user`)
VALUES
	(8,'2012','Mahakarya','Lanjutkan','Github','WhatsApp Image 2018-11-09 at 09.41.42.jpeg.pdf',3);

/*!40000 ALTER TABLE `kewajiban_khusus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tahun_ajaran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tahun_ajaran`;

CREATE TABLE `tahun_ajaran` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(30) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','pegawai') DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama_user`, `nip`)
VALUES
	(1,'admin','admin','admin','Admin','1234'),
	(3,'1316034','A1316034','pegawai','Slamet Riyadi','1316034'),
	(8,'123123','123123','pegawai','Sita','123123');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

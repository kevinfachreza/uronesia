/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - uronesia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uronesia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `uronesia`;

/*Table structure for table `kasus` */

DROP TABLE IF EXISTS `kasus`;

CREATE TABLE `kasus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pasien_id` int(11) DEFAULT NULL,
  `jenis_kasus` varchar(255) DEFAULT NULL,
  `tb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `tanggal_operasi` date DEFAULT NULL,
  `lama_perawatan_hari` int(11) DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `is_kasus_baru` tinyint(4) DEFAULT NULL,
  `komorbid` text DEFAULT NULL,
  `riwayat_operasi` text DEFAULT NULL,
  `penunjang_radiologi` text DEFAULT NULL,
  `penunjang_lab` text DEFAULT NULL,
  `ops_operator` varchar(255) DEFAULT NULL,
  `ops_tindakan_sachse` varchar(255) DEFAULT NULL,
  `ops_tindakan_bulbar_mobilisasi` varchar(255) DEFAULT NULL,
  `ops_tindakan_crucal_separasi` varchar(255) DEFAULT NULL,
  `ops_tindakan_inferior_pubektomi` varchar(255) DEFAULT NULL,
  `ops_tindakan_supercrucal_rerouting` varchar(255) DEFAULT NULL,
  `ops_tindakan_one_side_dissection` varchar(255) DEFAULT NULL,
  `ops_tindakan_johansen` varchar(255) DEFAULT NULL,
  `ops_tindakan_perineal_urethrostomy` varchar(255) DEFAULT NULL,
  `ops_tindakan_double_face` varchar(255) DEFAULT NULL,
  `ops_tindakan_ventral` varchar(255) DEFAULT NULL,
  `ops_tindakan_dorsal_onlay` varchar(255) DEFAULT NULL,
  `ops_tindakan_dorsal_inlay` varchar(255) DEFAULT NULL,
  `ops_tindakan_asopa` varchar(255) DEFAULT NULL,
  `ops_graft_cheek` varchar(255) DEFAULT NULL,
  `ops_graft_upper_lip` varchar(255) DEFAULT NULL,
  `ops_graft_lower_lip` varchar(255) DEFAULT NULL,
  `ops_graft_lingual` varchar(255) DEFAULT NULL,
  `ops_graft_gracilis` varchar(255) DEFAULT NULL,
  `ops_striktur_lokasi` varchar(255) DEFAULT NULL,
  `ops_striktur_panjang` varchar(255) DEFAULT NULL,
  `ops_striktur_penyebab` varchar(255) DEFAULT NULL,
  `ops_skor_ereksi_pre_ops` tinyint(4) DEFAULT NULL,
  `ops_skor_ereksi_post_ops` tinyint(4) DEFAULT NULL,
  `ops_post_chordee` tinyint(4) DEFAULT NULL,
  `ops_panjang_penis_pre_ops` int(11) DEFAULT NULL,
  `ops_panjang_penis_post_ops` int(11) DEFAULT NULL,
  `ops_perikateter_urethrografi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kasus` */

insert  into `kasus`(`id`,`pasien_id`,`jenis_kasus`,`tb`,`bb`,`tanggal_operasi`,`lama_perawatan_hari`,`diagnosis`,`is_kasus_baru`,`komorbid`,`riwayat_operasi`,`penunjang_radiologi`,`penunjang_lab`,`ops_operator`,`ops_tindakan_sachse`,`ops_tindakan_bulbar_mobilisasi`,`ops_tindakan_crucal_separasi`,`ops_tindakan_inferior_pubektomi`,`ops_tindakan_supercrucal_rerouting`,`ops_tindakan_one_side_dissection`,`ops_tindakan_johansen`,`ops_tindakan_perineal_urethrostomy`,`ops_tindakan_double_face`,`ops_tindakan_ventral`,`ops_tindakan_dorsal_onlay`,`ops_tindakan_dorsal_inlay`,`ops_tindakan_asopa`,`ops_graft_cheek`,`ops_graft_upper_lip`,`ops_graft_lower_lip`,`ops_graft_lingual`,`ops_graft_gracilis`,`ops_striktur_lokasi`,`ops_striktur_panjang`,`ops_striktur_penyebab`,`ops_skor_ereksi_pre_ops`,`ops_skor_ereksi_post_ops`,`ops_post_chordee`,`ops_panjang_penis_pre_ops`,`ops_panjang_penis_post_ops`,`ops_perikateter_urethrografi`,`created_at`,`created_by`,`updated_at`,`deleted_at`) values 
(1,1,'striktur-uretra',170,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-03 10:13:35',NULL,'2020-10-03 10:13:35',NULL),
(2,2,'striktur-uretra',150,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-03 10:18:17',NULL,'2020-10-03 10:18:17',NULL),
(3,3,'striktur-uretra',174,60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-03 10:35:17',NULL,'2020-10-03 10:35:17',NULL),
(4,3,'striktur-uretra',174,60,'2020-10-03',5,'DIAGNOSIS',1,'KOMORBID','Riwayat Operasi','Hasil Radiologi','Hasil Lab','Operatorr','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','lokasi','15','sebab',2,3,1,2,3,'1','2020-10-03 10:36:13',1,'2020-10-03 16:35:42',NULL),
(5,2,'striktur-uretra',150,55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-09 13:49:58',NULL,'2020-10-09 13:49:58',NULL),
(6,1,'striktur-uretra',170,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-10-09 13:52:49',NULL,'2020-10-09 13:52:49',NULL),
(7,2,'striktur-uretra',150,55,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'1','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','1','1','asd','haha','haha',NULL,NULL,1,NULL,NULL,'1','2020-10-09 13:56:35',2,'2020-10-09 13:57:41',NULL);

/*Table structure for table `kasus_penunjang` */

DROP TABLE IF EXISTS `kasus_penunjang`;

CREATE TABLE `kasus_penunjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `path` varchar(512) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kasus_penunjang` */

insert  into `kasus_penunjang`(`id`,`kasus_id`,`jenis`,`path`,`created_by`,`created_at`,`updated_at`,`deleted_at`,`deleted_by`) values 
(1,4,NULL,'uploads/kasus-4-031020w9s.jpeg',1,'2020-10-03 15:54:32','2020-10-03 16:12:18','2020-10-03 16:12:18',1),
(2,4,NULL,'uploads/kasus-4-031020dDL.jpeg',1,'2020-10-03 15:54:32','2020-10-03 16:12:18','2020-10-03 16:12:18',1),
(3,4,NULL,'uploads/kasus-4-031020aDV.jpeg',1,'2020-10-03 15:54:32','2020-10-03 16:12:18','2020-10-03 16:12:18',1),
(4,4,NULL,'uploads/kasus-4-031020Jj0.jpeg',1,'2020-10-03 16:02:40','2020-10-03 16:02:40',NULL,NULL),
(5,4,NULL,'uploads/kasus-4-031020x4H.jpeg',1,'2020-10-03 16:02:40','2020-10-03 16:12:37','2020-10-03 16:12:37',1),
(6,4,NULL,'uploads/kasus-4-031020s0D.jpeg',1,'2020-10-03 16:12:30','2020-10-03 16:12:30',NULL,NULL),
(7,4,NULL,'uploads/kasus-4-031020Ve1.jpeg',1,'2020-10-03 16:12:30','2020-10-03 16:12:30',NULL,NULL),
(8,4,'pre-ops','uploads/kasus-4-0310209pX.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:43',NULL,NULL),
(9,4,'pre-ops','uploads/kasus-4-031020Mk1.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1),
(10,4,'pre-ops','uploads/kasus-4-031020QiS.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:43',NULL,NULL),
(11,4,'post-ops','uploads/kasus-4-031020XVa.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:43',NULL,NULL),
(12,4,'post-ops','uploads/kasus-4-031020KBG.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:43',NULL,NULL),
(13,4,'post-ops','uploads/kasus-4-031020ZKI.jpeg',1,'2020-10-03 16:35:43','2020-10-03 16:35:43',NULL,NULL);

/*Table structure for table `kasus_uriflowmetry` */

DROP TABLE IF EXISTS `kasus_uriflowmetry`;

CREATE TABLE `kasus_uriflowmetry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) DEFAULT NULL,
  `bulan_ke` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `max_rate` int(11) DEFAULT NULL,
  `average_rate` int(11) DEFAULT NULL,
  `voiding_time` int(11) DEFAULT NULL,
  `flow_time` int(11) DEFAULT NULL,
  `time_to_max_flow` int(11) DEFAULT NULL,
  `position` varchar(36) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `symptomps` text DEFAULT NULL,
  `advice` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kasus_uriflowmetry` */

insert  into `kasus_uriflowmetry`(`id`,`kasus_id`,`bulan_ke`,`volume`,`max_rate`,`average_rate`,`voiding_time`,`flow_time`,`time_to_max_flow`,`position`,`weight`,`symptomps`,`advice`,`created_at`,`updated_at`,`deleted_at`,`created_by`,`deleted_by`) values 
(1,4,NULL,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(2,4,NULL,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(3,4,NULL,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(4,4,NULL,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(5,4,NULL,12,12,12,12,12,12,'sitting',12,'12','12','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(6,4,NULL,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(7,4,NULL,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 15:29:28','2020-10-03 15:39:58','2020-10-03 15:39:58',NULL,NULL),
(8,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(9,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(10,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(11,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(12,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(13,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(14,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:39:58','2020-10-03 15:41:06','2020-10-03 15:41:06',NULL,NULL),
(15,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(16,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(17,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(18,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(19,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(20,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(21,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:41:06','2020-10-03 15:49:29','2020-10-03 15:49:29',NULL,NULL),
(22,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(23,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(24,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(25,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(26,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(27,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(28,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:49:29','2020-10-03 15:54:32','2020-10-03 15:54:32',NULL,NULL),
(29,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(30,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(31,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(32,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(33,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(34,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(35,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 15:54:32','2020-10-03 16:02:40','2020-10-03 16:02:40',1,NULL),
(36,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(37,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(38,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(39,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(40,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(41,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(42,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:02:40','2020-10-03 16:12:18','2020-10-03 16:12:18',1,1),
(43,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(44,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(45,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(46,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(47,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(48,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(49,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:18','2020-10-03 16:12:30','2020-10-03 16:12:30',1,1),
(50,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(51,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(52,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(53,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(54,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(55,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(56,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:30','2020-10-03 16:12:37','2020-10-03 16:12:37',1,1),
(57,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(58,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(59,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(60,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(61,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(62,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(63,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:12:37','2020-10-03 16:19:00','2020-10-03 16:19:00',1,1),
(64,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(65,4,3,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(66,4,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(67,4,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(68,4,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(69,4,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(70,4,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-03 16:19:00','2020-10-03 16:19:46','2020-10-03 16:19:46',1,1),
(71,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(72,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(73,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(74,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(75,4,12,12,12,12,12,12,12,'sitting',12,'12','12','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(76,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(77,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:19:46','2020-10-03 16:19:55','2020-10-03 16:19:55',1,1),
(78,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(79,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(80,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(81,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(82,4,12,12,12,12,12,12,12,'standing',12,'12','12','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(83,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(84,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:19:55','2020-10-03 16:20:13','2020-10-03 16:20:13',1,1),
(85,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(86,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(87,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(88,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(89,4,12,12,12,12,12,12,12,'standing',12,'12','12','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(90,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(91,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:20:13','2020-10-03 16:30:55','2020-10-03 16:30:55',1,1),
(92,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(93,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(94,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(95,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(96,4,12,12,12,12,12,12,12,'standing',12,'12','12','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(97,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(98,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:30:55','2020-10-03 16:35:43','2020-10-03 16:35:43',1,1),
(99,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(100,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(101,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(102,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(103,4,12,12,12,12,12,12,12,'standing',12,'12','12','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(104,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(105,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:35:43','2020-10-03 16:35:55','2020-10-03 16:35:55',1,1),
(106,4,1,1,1,1,1,1,1,'sitting',1,'1','1','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(107,4,3,3,3,3,3,3,3,'sitting',3,'3','3','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(108,4,6,6,6,6,6,6,6,'sitting',6,'6','6','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(109,4,9,9,9,9,9,9,9,'sitting',9,'9','9','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(110,4,12,12,12,12,12,12,12,'standing',12,'12','12','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(111,4,24,24,24,24,24,24,24,'sitting',24,'24','24','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(112,4,60,60,60,60,60,60,60,'sitting',60,'60','60','2020-10-03 16:35:55','2020-10-03 16:35:55',NULL,1,NULL),
(113,7,1,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(114,7,3,74546,646,44,44,74,44,'sitting',74,'44','44','2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(115,7,6,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(116,7,9,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(117,7,12,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(118,7,24,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL),
(119,7,60,NULL,NULL,NULL,NULL,NULL,NULL,'standing',NULL,NULL,NULL,'2020-10-09 13:57:41','2020-10-09 13:57:41',NULL,2,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `nomor_telpon` varchar(255) DEFAULT NULL,
  `tb` int(11) DEFAULT NULL,
  `bb` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_rm` (`no_rm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pasien` */

insert  into `pasien`(`id`,`no_rm`,`nama`,`tanggal_lahir`,`jenis_kelamin`,`nomor_telpon`,`tb`,`bb`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'912301','Kevin','1997-03-09','lk','082329123123',170,75,'2020-10-03 10:13:35','2020-10-03 10:13:35',NULL),
(2,'99912300','Raihan','2009-09-09','lk','3123',150,55,'2020-10-03 10:18:17','2020-10-03 10:18:17',NULL),
(3,'9329123','Lala','1999-08-08','pr','081293129321',174,60,'2020-10-03 10:35:17','2020-10-03 10:35:17',NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin@medify.id','$2y$10$q/ygyW6QgQkaHNGtjOpXI.kIIeNpNnEiML56E6myqmUFmmVhBWNsi','laOtMjXXizFIxvvMESP3k0hlAqrqewoFBs469UEsSoLJ1aVDsnx1rWpm7FHc','2020-10-02 23:33:18','2020-10-03 23:19:58'),
(2,'kevin','kevinfachreza009@gmail.com','$2y$10$d6JfF14Pi.1NZBz1xV5.zeKxZv6LjBVW5ojyuNm3sH9bxsaTGZ5pK','twiW2tcmNh1DgzecnSQpla9kRFHyRFUZk4Jxiw68LnVshv2wfbE0niNO1rbr','2020-10-02 23:40:20','2020-10-03 00:06:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

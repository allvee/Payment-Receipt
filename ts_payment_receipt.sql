/*
SQLyog Enterprise - MySQL GUI v8.14 
MySQL - 5.5.19 : Database - ts_payment_receipt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ts_payment_receipt` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ts_payment_receipt`;

/*Table structure for table `payment_details` */

DROP TABLE IF EXISTS `payment_details`;

CREATE TABLE `payment_details` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Payment_ID` int(10) DEFAULT NULL,
  `Payment_Name` varchar(200) DEFAULT NULL,
  `Cash_on_bank` enum('YES','NO') DEFAULT NULL,
  `Cash_on_hand` enum('YES','NO') DEFAULT NULL,
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `1_amount` double(10,2) DEFAULT '0.00',
  `2_amount` double(10,2) DEFAULT '0.00',
  `3_amount` double(10,2) DEFAULT '0.00',
  `4_amount` double(10,2) DEFAULT '0.00',
  `5_amount` double(10,2) DEFAULT '0.00',
  `6_amount` double(10,2) DEFAULT '0.00',
  `7_amount` double(10,2) DEFAULT '0.00',
  `8_amount` double(10,2) DEFAULT '0.00',
  `9_amount` double(10,2) DEFAULT '0.00',
  `10_amount` double(10,2) DEFAULT '0.00',
  `11_amount` double(10,2) DEFAULT '0.00',
  `12_amount` double(10,2) DEFAULT '0.00',
  `13_amount` double(10,2) DEFAULT '0.00',
  `14_amount` double(10,2) DEFAULT '0.00',
  `15_amount` double(10,2) DEFAULT '0.00',
  `16_amount` double(10,2) DEFAULT '0.00',
  `17_amount` double(10,2) DEFAULT '0.00',
  `18_amount` double(10,2) DEFAULT '0.00',
  `19_amount` double(10,2) DEFAULT '0.00',
  `20_amount` double(10,2) DEFAULT '0.00',
  `21_amount` double(10,2) DEFAULT '0.00',
  `22_amount` double(10,2) DEFAULT '0.00',
  `23_amount` double(10,2) DEFAULT '0.00',
  `24_amount` double(10,2) DEFAULT '0.00',
  `25_amount` double(10,2) DEFAULT '0.00',
  `26_amount` double(10,2) DEFAULT '0.00',
  `27_amount` double(10,2) DEFAULT '0.00',
  `28_amount` double(10,2) DEFAULT '0.00',
  `29_amount` double(10,2) DEFAULT '0.00',
  `30_amount` double(10,2) DEFAULT '0.00',
  `31_amount` double(10,2) DEFAULT '0.00',
  `stattus` enum('Active','InActive') DEFAULT 'Active',
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `payment_list` */

DROP TABLE IF EXISTS `payment_list`;

CREATE TABLE `payment_list` (
  `Payment_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Payment_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','Inactive') DEFAULT 'Active',
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT NULL,
  `LastUpdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Payment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Table structure for table `receipt_details` */

DROP TABLE IF EXISTS `receipt_details`;

CREATE TABLE `receipt_details` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Receipt_ID` int(10) DEFAULT NULL,
  `Receipt_Name` varchar(200) DEFAULT NULL,
  `Cash_on_bank` enum('YES','NO') DEFAULT NULL,
  `Cash_on_hand` enum('YES','NO') DEFAULT NULL,
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `1_amount` double(10,2) DEFAULT '0.00',
  `2_amount` double(10,2) DEFAULT '0.00',
  `3_amount` double(10,2) DEFAULT '0.00',
  `4_amount` double(10,2) DEFAULT '0.00',
  `5_amount` double(10,2) DEFAULT '0.00',
  `6_amount` double(10,2) DEFAULT '0.00',
  `7_amount` double(10,2) DEFAULT '0.00',
  `8_amount` double(10,2) DEFAULT '0.00',
  `9_amount` double(10,2) DEFAULT '0.00',
  `10_amount` double(10,2) DEFAULT '0.00',
  `11_amount` double(10,2) DEFAULT '0.00',
  `12_amount` double(10,2) DEFAULT '0.00',
  `13_amount` double(10,2) DEFAULT '0.00',
  `14_amount` double(10,2) DEFAULT '0.00',
  `15_amount` double(10,2) DEFAULT '0.00',
  `16_amount` double(10,2) DEFAULT '0.00',
  `17_amount` double(10,2) DEFAULT '0.00',
  `18_amount` double(10,2) DEFAULT '0.00',
  `19_amount` double(10,2) DEFAULT '0.00',
  `20_amount` double(10,2) DEFAULT '0.00',
  `21_amount` double(10,2) DEFAULT '0.00',
  `22_amount` double(10,2) DEFAULT '0.00',
  `23_amount` double(10,2) DEFAULT '0.00',
  `24_amount` double(10,2) DEFAULT '0.00',
  `25_amount` double(10,2) DEFAULT '0.00',
  `26_amount` double(10,2) DEFAULT '0.00',
  `27_amount` double(10,2) DEFAULT '0.00',
  `28_amount` double(10,2) DEFAULT '0.00',
  `29_amount` double(10,2) DEFAULT '0.00',
  `30_amount` double(10,2) DEFAULT '0.00',
  `31_amount` double(10,2) DEFAULT '0.00',
  `stattus` enum('Active','InActive') DEFAULT 'Active',
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Table structure for table `receipt_list` */

DROP TABLE IF EXISTS `receipt_list`;

CREATE TABLE `receipt_list` (
  `Receipt_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Receipt_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT NULL,
  `LastUpdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Receipt_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(350) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/* Trigger structure for table `payment_details` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `payment_detail_update` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `payment_detail_update` BEFORE UPDATE ON `payment_details` FOR EACH ROW BEGIN
	set NEW.LastUpdate = NOW();
    END */$$


DELIMITER ;

/* Trigger structure for table `payment_list` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `Payment_Create_date` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Payment_Create_date` BEFORE INSERT ON `payment_list` FOR EACH ROW BEGIN
	SET NEW.CreateDate = NOW();
    END */$$


DELIMITER ;

/* Trigger structure for table `receipt_details` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `Receipt_detail_update` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Receipt_detail_update` BEFORE UPDATE ON `receipt_details` FOR EACH ROW BEGIN
	set NEW.LastUpdate = NOW();
    END */$$


DELIMITER ;

/* Trigger structure for table `receipt_list` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `Receipt_Create_date` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Receipt_Create_date` BEFORE INSERT ON `receipt_list` FOR EACH ROW BEGIN
	SET NEW.CreateDate = NOW();
    END */$$


DELIMITER ;

/* Procedure structure for procedure `SP_PaymentTableCreate` */

/*!50003 DROP PROCEDURE IF EXISTS  `SP_PaymentTableCreate` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_PaymentTableCreate`(in month_no int(10), in year_name VARCHAR(50), OUT p_outResult VARCHAR(200))
BEGIN
DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
	SET p_outResult='SQLEXCEPTION';
	ROLLBACK;
	END; 
	  
	DECLARE EXIT HANDLER FOR SQLWARNING
	BEGIN
	SET p_outResult='SQLWARNING';
	ROLLBACK;
	END;
	  
	START TRANSACTION;
	SELECT CONCAT('Payment_',@month_no,'_',@year_name)
	INTO @tableName;
	COMMIT;
	CREATE TABLE `@tableName` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Payment_ID` int(10) DEFAULT NULL,
  `Payment_Name` varchar(200) DEFAULT NULL,
  `1_amount` varchar(50) DEFAULT NULL,
  `2_amount` varchar(50) DEFAULT NULL,
  `3_amount` varchar(50) DEFAULT NULL,
  `4_amount` varchar(50) DEFAULT NULL,
  `5_amount` varchar(50) DEFAULT NULL,
  `6_amount` varchar(50) DEFAULT NULL,
  `7_amount` varchar(50) DEFAULT NULL,
  `8_amount` varchar(50) DEFAULT NULL,
  `9_amount` varchar(50) DEFAULT NULL,
  `10_amount` varchar(50) DEFAULT NULL,
  `11_amount` varchar(50) DEFAULT NULL,
  `12_amount` varchar(50) DEFAULT NULL,
  `13_amount` varchar(50) DEFAULT NULL,
  `14_amount` varchar(50) DEFAULT NULL,
  `15_amount` varchar(50) DEFAULT NULL,
  `16_amount` varchar(50) DEFAULT NULL,
  `17_amount` varchar(50) DEFAULT NULL,
  `18_amount` varchar(50) DEFAULT NULL,
  `19_amount` varchar(50) DEFAULT NULL,
  `20_amount` varchar(50) DEFAULT NULL,
  `21_amount` varchar(50) DEFAULT NULL,
  `22_amount` varchar(50) DEFAULT NULL,
  `23_amount` varchar(50) DEFAULT NULL,
  `24_amount` varchar(50) DEFAULT NULL,
  `25_amount` varchar(50) DEFAULT NULL,
  `26_amount` varchar(50) DEFAULT NULL,
  `27_amount` varchar(50) DEFAULT NULL,
  `28_amount` varchar(50) DEFAULT NULL,
  `29_amount` varchar(50) DEFAULT NULL,
  `30_amount` varchar(50) DEFAULT NULL,
  `31_amount` varchar(50) DEFAULT NULL,
  `stattus` enum('Active','InActive') DEFAULT NULL,
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 IF @tableName is not null THEN
	set @p_outResult='SUCCESS' ;
 ELSE
        SET @p_outResult='FAILED';
 END IF;
 SELECT  @p_outResult;
		
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Enterprise - MySQL GUI v8.14 
MySQL - 5.5.19 : Database - ts_payment_receipt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `payment_details` */

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
  `Total_Balance` varchar(100) DEFAULT '0.00',
  `stattus` enum('Active','InActive') DEFAULT 'Active',
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `payment_details` */

insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (1,1,' Puachase','NO','YES','2016','12',100.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'100','Active','2017-01-07 19:48:57');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (2,2,' Convence',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-03 20:21:49');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (3,3,' Entertainment ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-03 20:22:12');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (4,4,' Salary','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,13333.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'13333','Active','2017-01-03 20:25:27');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (5,5,' Transportation ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-03 20:22:50');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (6,6,' Utility ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-03 20:23:05');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (7,7,' Mobile Bills ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','Active','2017-01-07 20:52:11');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (8,8,' Micellenious ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-03 20:23:37');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (9,9,' Internet Bill ','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,3000.00,0.00,'3000','Active','2017-01-03 20:26:40');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (10,10,' Deed paper Bill ','YES','NO','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,5600.00,0.00,'5600','Active','2017-01-03 20:27:36');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (11,11,' Trade License Bill ','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,10000.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'10000','Active','2017-01-03 20:27:58');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (12,12,'Entertainment',NULL,NULL,'2016','3',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0.00','Active','2017-01-05 20:06:14');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (13,13,'testpay','NO','YES','2016','2',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,299.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'299','Active','2017-01-05 20:07:08');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (14,14,'test','YES','NO','2017','1',200.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'200','Active','2017-01-07 19:57:00');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (15,15,'testpay','NO','YES','2016','1',34552.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'34552','InActive','2017-01-07 22:14:02');
insert  into `payment_details`(`ID`,`Payment_ID`,`Payment_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (16,16,'testpay','NO','YES','2016','1',0.00,0.00,0.00,3476.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'3476','InActive','2017-01-07 22:22:45');

/*Table structure for table `payment_list` */

CREATE TABLE `payment_list` (
  `Payment_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Payment_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','Inactive') DEFAULT 'Active',
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `total_balance` double(10,2) DEFAULT '0.00',
  `CreateDate` timestamp NULL DEFAULT NULL,
  `LastUpdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Payment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `payment_list` */

insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (1,' Puachase','Active','2016','12',0.00,'2017-01-03 20:21:30','2017-01-07 19:48:57');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (2,' Convence','Active','2016','12',0.00,'2017-01-03 20:21:49',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (3,' Entertainment ','Active','2016','12',0.00,'2017-01-03 20:22:12',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (4,' Salary','Active','2016','12',0.00,'2017-01-03 20:22:35','2017-01-07 19:40:39');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (5,' Transportation ','Active','2016','12',0.00,'2017-01-03 20:22:50',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (6,' Utility ','Active','2016','12',0.00,'2017-01-03 20:23:05',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (7,' Mobile Bills ','Active','2016','12',0.00,'2017-01-03 20:23:22',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (8,' Micellenious ','Active','2016','12',0.00,'2017-01-03 20:23:37',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (9,' Internet Bill ','Active','2016','12',0.00,'2017-01-03 20:23:51','2017-01-03 20:26:40');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (10,' Deed paper Bill ','Active','2016','12',0.00,'2017-01-03 20:24:04','2017-01-03 20:27:36');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (11,' Trade License Bill ','Active','2016','12',0.00,'2017-01-03 20:24:20','2017-01-03 20:27:58');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (12,'Entertainment','Active','2016','3',0.00,'2017-01-05 20:06:14',NULL);
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (13,'testpay','Active','2016','2',0.00,'2017-01-05 20:06:51','2017-01-05 20:07:08');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (14,'test','Active','2017','1',0.00,'2017-01-07 19:56:35','2017-01-07 20:12:54');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (15,'testpay','Inactive','2016','1',0.00,'2017-01-07 20:18:24','2017-01-07 22:14:02');
insert  into `payment_list`(`Payment_ID`,`Payment_Name`,`Status`,`ForYear`,`ForMonth`,`total_balance`,`CreateDate`,`LastUpdate`) values (16,'testpay','Inactive','2016','1',0.00,'2017-01-07 22:20:14','2017-01-07 22:22:45');

/*Table structure for table `receipt_details` */

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
  `Total_Balance` varchar(100) DEFAULT '0',
  `stattus` enum('Active','InActive') DEFAULT 'Active',
  `LastUpdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `receipt_details` */

insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (1,1,'From Etology for Inventory Software','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,5000.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,14500.00,0.00,'19500','Active','2017-01-03 20:29:54');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (2,2,' Md. Wahidul Hasan','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,13700.00,'13700','Active','2017-01-03 20:29:21');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (3,3,' Md. Kausar Hamid Miji',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','Active','2017-01-03 20:19:04');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (4,4,' Jamshedul  Alam Mohammad Robayet ',NULL,NULL,'2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','Active','2017-01-03 20:19:51');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (5,5,' Md. Rezaul Karim','YES','NO','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,2614.00,0.00,0.00,'2614','Active','2017-01-03 20:30:23');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (6,6,' Md. Didarul Islam Bhuyan','NO','YES','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,7420.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'7420','Active','2017-01-03 20:30:49');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (7,7,'Test_1',NULL,NULL,'2019','1',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','Active','2017-01-03 21:01:40');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (8,8,'Test_2','YES','NO','2019','1',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,4000.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'4000','Active','2017-01-03 21:04:52');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (9,9,'test','NO','YES','2016','2',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,300.00,0.00,0.00,0.00,'300','InActive','2017-01-07 22:17:13');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (10,10,'test2','NO','YES','2016','2',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,400.00,0.00,0.00,0.00,'400','InActive','2017-01-07 22:19:17');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (11,11,'Test_1','NO','YES','2016','1',2123.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'2123','InActive','2017-01-07 22:13:51');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (12,12,'Test_1','NO','NO','2016','1',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','InActive','2017-01-07 22:22:11');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (13,13,'sabuj','NO','NO','2016','12',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','InActive','2017-01-07 23:52:19');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (14,14,'fakibaji','YES','NO','2016','1',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,544.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'544','Active','2017-01-08 00:25:44');
insert  into `receipt_details`(`ID`,`Receipt_ID`,`Receipt_Name`,`Cash_on_bank`,`Cash_on_hand`,`ForYear`,`ForMonth`,`1_amount`,`2_amount`,`3_amount`,`4_amount`,`5_amount`,`6_amount`,`7_amount`,`8_amount`,`9_amount`,`10_amount`,`11_amount`,`12_amount`,`13_amount`,`14_amount`,`15_amount`,`16_amount`,`17_amount`,`18_amount`,`19_amount`,`20_amount`,`21_amount`,`22_amount`,`23_amount`,`24_amount`,`25_amount`,`26_amount`,`27_amount`,`28_amount`,`29_amount`,`30_amount`,`31_amount`,`Total_Balance`,`stattus`,`LastUpdate`) values (15,15,'roman','NO','NO','2016','1',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'0','Active','2017-01-08 00:34:52');

/*Table structure for table `receipt_list` */

CREATE TABLE `receipt_list` (
  `Receipt_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Receipt_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  `ForYear` varchar(10) DEFAULT NULL,
  `ForMonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT NULL,
  `LastUpdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Receipt_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `receipt_list` */

insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (1,'From Etology for Inventory Software','Active','2016','12','2017-01-03 20:18:17','2017-01-07 20:09:59');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (2,' Md. Wahidul Hasan','Active','2016','12','2017-01-03 20:18:43','2017-01-03 20:29:21');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (3,' Md. Kausar Hamid Miji','Active','2016','12','2017-01-03 20:19:04',NULL);
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (4,' Jamshedul  Alam Mohammad Robayet ','Active','2016','12','2017-01-03 20:19:51',NULL);
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (5,' Md. Rezaul Karim','Active','2016','12','2017-01-03 20:20:15','2017-01-03 20:30:23');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (6,' Md. Didarul Islam Bhuyan','Active','2016','12','2017-01-03 20:20:33','2017-01-03 20:30:49');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (7,'Test_1','Active','2019','1','2017-01-03 21:01:40',NULL);
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (8,'Test_2','Active','2019','1','2017-01-03 21:03:52','2017-01-03 21:04:52');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (9,'test','InActive','2016','2','2017-01-05 20:04:35','2017-01-07 22:17:12');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (10,'test2','InActive','2016','2','2017-01-05 20:05:29','2017-01-07 22:19:17');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (11,'Test_1','InActive','2016','1','2017-01-07 20:17:46','2017-01-07 22:13:51');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (12,'Test_1','InActive','2016','1','2017-01-07 22:19:49','2017-01-07 22:22:11');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (13,'sabuj','InActive','2016','12','2017-01-07 23:50:46','2017-01-07 23:52:19');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (14,'fakibaji','Active','2016','1','2017-01-08 00:24:26','2017-01-08 00:25:44');
insert  into `receipt_list`(`Receipt_ID`,`Receipt_Name`,`Status`,`ForYear`,`ForMonth`,`CreateDate`,`LastUpdate`) values (15,'roman','Active','2016','1','2017-01-08 00:32:49','2017-01-08 00:34:52');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(350) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `usertype` enum('General','Admin') DEFAULT 'General',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`address`,`phone`,`username`,`password`,`status`,`usertype`,`created`,`createdby`) values (2,0,'admin','admin','01911890878','admin','21232f297a57a5a743894a0e4a801fc3','active','Admin','2017-01-01 17:27:29',0);
insert  into `users`(`id`,`role_id`,`name`,`address`,`phone`,`username`,`password`,`status`,`usertype`,`created`,`createdby`) values (3,0,'alamin','general1','01708133969','alamin','21232f297a57a5a743894a0e4a801fc3','active','General','2017-01-07 22:26:50',0);

/* Trigger structure for table `payment_details` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `payment_detail_update` BEFORE UPDATE ON `payment_details` FOR EACH ROW BEGIN
	set NEW.LastUpdate = NOW();
	set new.Total_Balance=(NEW.1_amount + 
	NEW.2_amount + 
	NEW.3_amount + 
	NEW.4_amount + 
	NEW.5_amount + 
	NEW.6_amount + 
	NEW.7_amount + 
	NEW.8_amount + 
	NEW.9_amount + 
	NEW.10_amount + 
	NEW.11_amount + 
	NEW.12_amount + 
	NEW.13_amount + 
	NEW.14_amount + 
	NEW.15_amount + 
	NEW.16_amount + 
	NEW.17_amount + 
	NEW.18_amount + 
	NEW.19_amount + 
	NEW.20_amount + 
	NEW.21_amount + 
	NEW.22_amount + 
	NEW.23_amount + 
	NEW.24_amount + 
	NEW.25_amount + 
	NEW.26_amount + 
	NEW.27_amount + 
	NEW.28_amount + 
	NEW.29_amount + 
	NEW.30_amount + 
	NEW.31_amount );
    END */$$


DELIMITER ;

/* Trigger structure for table `payment_list` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Payment_Create_date` BEFORE INSERT ON `payment_list` FOR EACH ROW BEGIN
	SET NEW.CreateDate = NOW();
    END */$$


DELIMITER ;

/* Trigger structure for table `receipt_details` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Receipt_detail_update` BEFORE UPDATE ON `receipt_details` FOR EACH ROW BEGIN
	set NEW.LastUpdate = NOW();
	SET new.Total_Balance=(NEW.1_amount + 
	NEW.2_amount + 
	NEW.3_amount + 
	NEW.4_amount + 
	NEW.5_amount + 
	NEW.6_amount + 
	NEW.7_amount + 
	NEW.8_amount + 
	NEW.9_amount + 
	NEW.10_amount + 
	NEW.11_amount + 
	NEW.12_amount + 
	NEW.13_amount + 
	NEW.14_amount + 
	NEW.15_amount + 
	NEW.16_amount + 
	NEW.17_amount + 
	NEW.18_amount + 
	NEW.19_amount + 
	NEW.20_amount + 
	NEW.21_amount + 
	NEW.22_amount + 
	NEW.23_amount + 
	NEW.24_amount + 
	NEW.25_amount + 
	NEW.26_amount + 
	NEW.27_amount + 
	NEW.28_amount + 
	NEW.29_amount + 
	NEW.30_amount + 
	NEW.31_amount );
    END */$$


DELIMITER ;

/* Trigger structure for table `receipt_list` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Receipt_Create_date` BEFORE INSERT ON `receipt_list` FOR EACH ROW BEGIN
	SET NEW.CreateDate = NOW();
    END */$$


DELIMITER ;

/* Function  structure for function  `fn_get_payment_sum` */

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fn_get_payment_sum`(_id INT) RETURNS int(11)
    READS SQL DATA
BEGIN
      DECLARE total DOUBLE;
      SELECT (1_amount + 
	2_amount + 
	3_amount + 
	4_amount + 
	5_amount + 
	6_amount + 
	7_amount + 
	8_amount + 
	9_amount + 
	10_amount + 
	11_amount + 
	12_amount + 
	13_amount + 
	14_amount + 
	15_amount + 
	16_amount + 
	17_amount + 
	18_amount + 
	19_amount + 
	20_amount + 
	21_amount + 
	22_amount + 
	23_amount + 
	24_amount + 
	25_amount + 
	26_amount + 
	27_amount + 
	28_amount + 
	29_amount + 
	30_amount + 
	31_amount ) 
      INTO    total
      FROM    payment_details
      WHERE   ID = _id;
      RETURN total;
END */$$
DELIMITER ;

/* Function  structure for function  `fn_get_receipt_sum` */

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `fn_get_receipt_sum`(_id INT) RETURNS int(11)
    READS SQL DATA
BEGIN
      DECLARE total DOUBLE;
      SELECT (1_amount + 
	2_amount + 
	3_amount + 
	4_amount + 
	5_amount + 
	6_amount + 
	7_amount + 
	8_amount + 
	9_amount + 
	10_amount + 
	11_amount + 
	12_amount + 
	13_amount + 
	14_amount + 
	15_amount + 
	16_amount + 
	17_amount + 
	18_amount + 
	19_amount + 
	20_amount + 
	21_amount + 
	22_amount + 
	23_amount + 
	24_amount + 
	25_amount + 
	26_amount + 
	27_amount + 
	28_amount + 
	29_amount + 
	30_amount + 
	31_amount ) 
      INTO    total
      FROM    receipt_details
      WHERE   ID = _id;
      RETURN total;
END */$$
DELIMITER ;

/* Procedure structure for procedure `SP_journalView` */

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_journalView`(OUT p_outResult VARCHAR(200))
BEGIN
DECLARE countp int default 0;
DECLARE countr INT DEFAULT 0;
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
	set countp=(select count(*) from payment_details);
        SET countr=(SELECT COUNT(*) FROM receipt_details);
        
   	DROP TEMPORARY TABLE IF  EXISTS temptable1;
	CREATE TEMPORARY TABLE IF NOT EXISTS temptable1 AS SELECT Payment_Name, Total_Balance FROM payment_details;
	select @countp;
	select @countr;
	 SELECT  @p_outResult;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `SP_PaymentTableCreate` */

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

/* Procedure structure for procedure `total_calculation_payment` */

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `total_calculation_payment`()
BEGIN
	DECLARE P_id int;
	DECLARE v_finished INTEGER DEFAULT 0;
	DECLARE finished INTEGER DEFAULT 0;
	DECLARE _output TEXT DEFAULT '';
	
	declare id_cur cursor for SELECT ID FROM payment_details;
	
	DECLARE CONTINUE HANDLER 
	FOR NOT FOUND SET v_finished = 1;
	
	open id_cur;
	start_loop: loop
		fetch id_cur into P_id;
		
		IF v_finished = 1 THEN LEAVE start_loop; END IF;
		
		-- SET _output = CONCAT(",", P_id);
		
		UPDATE  payment_details SET Total_Balance = fn_get_payment_sum(P_id) where id=P_id;
		
	  end loop;
	close id_cur;
 END */$$
DELIMITER ;

/* Procedure structure for procedure `total_calculation_receipt` */

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `total_calculation_receipt`()
BEGIN
	DECLARE P_id int;
	DECLARE v_finished INTEGER DEFAULT 0;
	DECLARE finished INTEGER DEFAULT 0;
	DECLARE _output TEXT DEFAULT '';
	
	declare id_cur cursor for SELECT ID FROM receipt_details;
	
	DECLARE CONTINUE HANDLER 
	FOR NOT FOUND SET v_finished = 1;
	
	open id_cur;
	start_loop: loop
		fetch id_cur into P_id;
		
		IF v_finished = 1 THEN LEAVE start_loop; END IF;
		
		-- SET _output = CONCAT(",", P_id);
		
		UPDATE  receipt_details SET Total_Balance = fn_get_receipt_sum(P_id) where id=P_id;
		
	  end loop;
	close id_cur;
 END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

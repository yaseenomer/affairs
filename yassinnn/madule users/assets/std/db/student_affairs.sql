/*
SQLyog Ultimate v8.53 
MySQL - 5.0.51b-community-nt : Database - student_affairs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`student_affairs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `student_affairs`;

/*Table structure for table ` living_with` */

DROP TABLE IF EXISTS ` living_with`;

CREATE TABLE ` living_with` (
  `serial` int(30) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table ` living_with` */

insert  into ` living_with`(`serial`,`name`) values (2,'الوالدة'),(3,'احد الاقارب'),(4,'الوالدين معاً'),(5,'شخص اخر');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Admin_username` char(30) NOT NULL,
  `Admin_passward` char(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`Admin_username`,`Admin_passward`,`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`Admin_username`,`Admin_passward`,`role`,`name`) values ('admin','123','admin','sarah');

/*Table structure for table `answers` */

DROP TABLE IF EXISTS `answers`;

CREATE TABLE `answers` (
  `A_ID` int(3) NOT NULL auto_increment,
  `A_text` longtext NOT NULL,
  `Te_ID` int(3) NOT NULL,
  `Q_ID` int(3) NOT NULL,
  PRIMARY KEY  (`A_ID`),
  KEY `Te_ID` (`Te_ID`,`Q_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `answers` */

/*Table structure for table `case_study` */

DROP TABLE IF EXISTS `case_study`;

CREATE TABLE `case_study` (
  `Status_no` double default NULL,
  `COLNO` double default NULL,
  `DEPNO` double default NULL,
  `Student_ID` double default NULL,
  `parent_live` int(30) default NULL,
  `work_parent` varchar(50) default NULL,
  `Salary` double default NULL,
  `Name_Guardian` varchar(150) default NULL,
  `Kinship` int(2) default NULL,
  `Work` varchar(50) default NULL,
  `Title_Guardian` varchar(50) default NULL,
  `Sources_family` varchar(50) default NULL,
  `Other_subsidies` varchar(50) default NULL,
  `members_employees` int(2) default NULL,
  `university` int(2) default NULL,
  `secondary` int(2) default NULL,
  `basis` int(2) default NULL,
  `without_school` int(2) default NULL,
  `Other` int(2) default NULL,
  `ranking_family` int(2) default NULL,
  `living_with` varchar(150) default NULL,
  `person_live` int(30) default NULL,
  `exercise_work` int(30) default NULL,
  `Type_work` varchar(150) default NULL,
  `Genetic_disease` longtext,
  `name_disease` varchar(150) default NULL,
  `Disabilities` varchar(150) default NULL,
  `Name_disability` varchar(50) default NULL,
  `Sports_activities` varchar(50) default NULL,
  `Name_sporting_activity` varchar(50) default NULL,
  `Cultural_activities` varchar(50) default NULL,
  `name_cultural_activity` varchar(50) default NULL,
  `Social_activities` varchar(50) default NULL,
  `Name_social_activity` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `case_study` */

/*Table structure for table `collage` */

DROP TABLE IF EXISTS `collage`;

CREATE TABLE `collage` (
  `C_ID` int(2) NOT NULL,
  `C_NAME` varchar(30) NOT NULL,
  PRIMARY KEY  (`C_ID`),
  KEY `C_ID` (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `collage` */

insert  into `collage`(`C_ID`,`C_NAME`) values (1,'since');

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `COLNO` double NOT NULL,
  `COLNAME` varchar(255) default NULL,
  `COLNAMEE` varchar(255) default NULL,
  PRIMARY KEY  (`COLNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `colleges` */

insert  into `colleges`(`COLNO`,`COLNAME`,`COLNAMEE`) values (2,'كلية العلوم','College of Sciences'),(3,'كلية الدراسات الزراعية','College of Agricultural studies'),(4,'كلية الطب البيطرى','College of Veterinary Medicine'),(5,'كلية علوم الغابات والمراعى','College of Forestry and Range Science'),(6,'كلية الدراسات التجارية','COLLEGE OF BUSINESS STUDIES'),(7,'كلية التربية','College of Education'),(8,'كلية الفنون الجميلة والتطبيقية','College of Fine and Applied Art'),(9,'كلية الهندسة','Engineering College'),(10,'كلية علوم الاشعة الطبية','College of Medical Radiological Science'),(12,'كلية التكنولوجيا','College of Technology'),(13,'كلية هندسة المياه والبيئة','College of Water & Environmental Engineering'),(14,'كلية الموسيقى والدراما','COLLEGE OF MUSIC & DRAMA'),(15,'كلية التربية البدنية والرياضة','College Of Physical Education & Sport'),(16,'كلية اللغات','College of Languages'),(17,'كلية علوم المختبرات الطبية','College of Medical Laboratory Science'),(18,'كلية علوم وتكنولوجيا الانتاج الحيواني','Collge of Animal Producation Science'),(20,'كلية علوم الحاسوب وتقانة المعلومات','College of Computer Science and Information Technology'),(23,'كلية علوم الاتصال','College of Communication Science'),(25,'عمادة التعليم عن بعد','Deanship of Distance Learning'),(26,'أمانة الشئون العلمية',NULL),(32,'كلية هندسة وتكنولوجيا النفط','The College of petroleum engineering'),(36,'كلية هندسة العمارة والتخطيط','College of Architecture and Planning'),(55,'كلية الابيض التقنية',NULL);

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `COLNO` double NOT NULL,
  `DEPNO` double NOT NULL,
  `DEPNAME` varchar(255) default NULL,
  `DEPNAMEE` varchar(255) default NULL,
  PRIMARY KEY  (`COLNO`,`DEPNO`),
  KEY `DEPNO` (`DEPNO`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`COLNO`) REFERENCES `colleges` (`COLNO`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `department` */

insert  into `department`(`COLNO`,`DEPNO`,`DEPNAME`,`DEPNAMEE`) values (2,1,'قسم المختبرات العلمية -فيزياء',NULL),(2,2,'قسم الرياضيات',NULL),(2,3,'قسم الفيزياء',NULL),(2,4,'قسم الكيمياء',NULL),(2,5,'قسم الإحصاء التطبيقى',NULL),(2,6,'قسم المختبرات العلمية- كيمياء',NULL),(3,1,'قسم تكنولوجيا الاغذية',NULL),(3,2,'قسم وقاية النباتات',NULL),(3,3,'قسم الارشاد الزراعى والتنمية الريفية',NULL),(3,4,'الميكنة الزراعية',NULL),(3,5,'قسم البساتين',NULL),(3,6,'قسم علوم التربة والمياه',NULL),(3,7,'قسم علوم المحاصيل الحقلية',NULL),(3,8,'قسم الاقتصاد الزراعى',NULL),(3,9,'قسم علوم الاسرة والمجتمع',NULL),(3,10,'قسم الانتاج الحيوانى',NULL),(3,11,'قسم الهندسة الزراعية',NULL),(4,1,'قسم الطب وجراحة الحيوان',NULL),(4,2,'قسم الانتاج الحيوانى',NULL),(4,3,'قسم علوم الاسماك والحياة البرية',NULL),(4,4,'قسم الدواجن',NULL),(4,5,'قسم اللحوم',NULL),(4,6,'قسم الألبان',NULL),(4,7,'القسم العام',NULL),(4,50,'دبلوم بيطرة التابع للبيطرة القديم',NULL),(5,1,'قسم الغابات',NULL),(5,2,'قسم المراعى',NULL),(6,1,'قسم المحاسبة والتمويل',NULL),(6,2,'قسم التكاليف والمحاسبة الإدارية',NULL),(6,3,'البنوك والتمويل',NULL),(6,4,'قسم إدارة الاعمال',NULL),(6,5,'قسم الاقتصاد التطبيقى',NULL),(6,6,'قسم نظم المعلومات الإدارية',NULL),(6,7,'قسم السكرتارية',NULL),(6,8,'قسم الدراسات التجارية',NULL),(6,50,'تجارية القسم العام القديم',NULL),(6,51,'قسم التسويق',NULL),(7,1,'قسم العلوم',NULL),(7,2,'قسم اللغات',NULL),(7,3,'قسم علم النفس',NULL),(7,4,'قسم التربية التقنية',NULL),(7,5,'قسم التربية فنون',NULL),(7,6,'ميكانيكا - صناعي',NULL),(7,7,'تقنية كهرباء',NULL),(7,8,'تقنية مدنية',NULL),(7,10,'تربية تقنية ميكانيكا',NULL),(7,11,'التربية الفنية',NULL),(7,12,'التربية اساس',NULL),(7,13,'رياضيات',NULL),(7,14,'كيمياء',NULL),(7,15,'فيزياء',NULL),(7,16,'لغة انجليزى',NULL),(7,17,'لغة فرنسية',NULL),(7,18,'لغة عربية',NULL),(7,19,'تقنية - مدنية صناعي',NULL),(7,20,'تقنية - كهرباء صناعي',NULL),(7,50,'تقنية قبل وجود تخصصات',NULL),(8,1,'القسم العام',NULL),(8,2,'التصميم الداخلي',NULL),(8,3,'التصميم الإيضاحي',NULL),(8,4,'التصميم الصناعي',NULL),(8,5,'النحت',NULL),(8,6,'الطباعة والتجليد',NULL),(8,7,'الخزف',NULL),(8,8,'الخطوط والزخرفة الاسلامية',NULL),(8,9,'تلوين',NULL),(8,10,'تصميم وطباعة المنسوجات',NULL),(8,11,'المطبعة',NULL),(9,1,'قسم الهندسة الميكانيكية',NULL),(9,2,'قسم الهندسة الكهربائية',NULL),(9,3,'قسم الهندسة المدنية',NULL),(9,4,'قسم هندسة الالكترونيات',NULL),(9,5,'قسم هندسة العمارة',NULL),(9,6,'قسم هندسة الطيران',NULL),(9,7,'قسم الهندسة الطبية الحيوية',NULL),(9,8,'قسم هندسة المساحة',NULL),(9,9,'قسم هندسة النسيج',NULL),(9,10,'قسم هندسة البلاستيك',NULL),(9,11,'قسم هندسة الجلود',NULL),(9,12,'النفط',NULL),(9,13,'قسم الهندسة الكيميائية',NULL),(9,14,'قسم الهندسة النووية',NULL),(9,50,'دبلومات هندسة القديمة ثلاث سنوات',NULL),(10,1,'قسم الاشعة التشخيصية',NULL),(10,2,'قسم الاشعة العلاجية',NULL),(12,1,'قسم الدراسات الهندسية','Engineering Studies'),(12,2,'قسم الدراسات التجارية','Business Studies'),(12,3,'قسم الدراسات العلمية','Sciences Studies'),(12,4,'قسم الدراسات الانسانية','Humanities Studies'),(12,50,'دبلومات اضافية القديمة سنتين',NULL),(13,1,'القسم العام',NULL),(13,2,'مياه جوفية وحفر',NULL),(13,3,'مياه سطحية وإمداد مياه',NULL),(13,4,'مياه سطحية وحفر',NULL),(13,5,'هندسة موارد المياه',NULL),(13,7,'الهندسة البيئية',NULL),(13,8,'الهندسة المدنية',NULL),(13,50,'تكنولوجيا المياه القديمة',NULL),(14,1,'قسم الموسيقى',NULL),(14,2,'قسم الدراما',NULL),(15,1,'قسم التربية الرياضية',NULL),(15,2,'القسم العام',NULL),(15,3,'قسم التربية البدنية المدرسية',NULL),(15,4,'قسم التدريب الرياضي',NULL),(15,5,'قسم الإدارة الرياضية',NULL),(15,6,'قسم الإعلام الرياضي',NULL),(16,1,'قسم اللغة العربية','Department of Arabic Language'),(16,2,'قسم اللغة الفرنسية','Departemt of Frensh Language'),(16,3,'قسم اللغة الإنجليزية','Department Of English Language'),(17,1,'القسم العام',NULL),(17,2,'قسم الاحياء الدقيقة',NULL),(17,3,'قسم الكيمياء السريريه',NULL),(17,4,'قسم علم الدم ومبحث المناعة',NULL),(17,5,'قسم امراض الانسجة والخلايا',NULL),(17,6,'قسم الطفيليات والحشرات الطبية',NULL),(18,1,'علوم وتكنولوجيا الانتاج الحيواني',NULL),(18,2,'علوم وتكنولوجيا الدواجن',NULL),(18,3,'علوم وتكنولوجيا الالبان',NULL),(18,4,'علوم الاسماك والحياة البرية',NULL),(18,5,'علوم وتكنولوجيا اللحوم',NULL),(20,1,'قسم علوم الحاسوب',NULL),(20,2,'قسم الحاسوب نظم المعلومات',NULL),(20,3,'قسم نظم الحاسوب والشبكات',NULL),(20,4,'قسم هندسة البرمجيات',NULL),(23,1,'القسم العام',NULL),(23,2,'قسم الوسائط المتعددة',NULL),(23,3,'قسم العلاقات العامة والإعلان',NULL),(23,4,'قسم الإذاعة',NULL),(23,5,'قسم التصوير والسينما',NULL),(23,6,'قسم الصحافة والنشر',NULL),(25,1,'الانتساب الداخلى',NULL),(32,1,'قسم هندسة النفط',NULL),(32,2,'قسم هندسة الاستكشاف',NULL),(32,3,'قسم هندسة النقل والتكرير',NULL),(36,1,'هندسة العمارة والتخطيط',NULL);

/*Table structure for table `evaluate_cases` */

DROP TABLE IF EXISTS `evaluate_cases`;

CREATE TABLE `evaluate_cases` (
  `Status_no` double default NULL,
  `Student_ID` double default NULL,
  `Supervisor_no` int(30) default NULL,
  `Serial` double default NULL,
  `History` datetime default NULL,
  `Recommendation` longtext,
  `Recommendation_supervisor` longtext,
  `Recommendation_Social` longtext,
  `Recommendation_dean` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluate_cases` */

/*Table structure for table `evaluation_activities` */

DROP TABLE IF EXISTS `evaluation_activities`;

CREATE TABLE `evaluation_activities` (
  `Serial` double default NULL,
  `Student_ID` double default NULL,
  `No_Supervisor` int(30) default NULL,
  `History` datetime default NULL,
  `Recommendation` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `evaluation_activities` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `groupid` int(4) NOT NULL auto_increment,
  `gname` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `groups` */

insert  into `groups`(`groupid`,`gname`) values (1,'مدير النظام'),(2,'مسجل'),(3,'مساعد مسجل'),(4,'اخري');

/*Table structure for table `health_insurance` */

DROP TABLE IF EXISTS `health_insurance`;

CREATE TABLE `health_insurance` (
  `Student_ID` int(20) default NULL,
  `COLNO` double default NULL,
  `DEPNO` double default NULL,
  `Marital_Status` varchar(30) default NULL,
  `Local` varchar(30) default NULL,
  `Administrative_Unit` varchar(30) default NULL,
  `Neighborhood` varchar(30) default NULL,
  `Houseno` int(30) default NULL,
  `Phone` varchar(150) default NULL,
  `Email` varchar(150) default NULL,
  `Chronic_diseases` longtext,
  `entrance_no` int(30) default NULL,
  `History` datetime default NULL,
  `Serial` mediumint(9) NOT NULL auto_increment,
  `Publication` varchar(60) default NULL,
  PRIMARY KEY  (`Serial`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `health_insurance` */

insert  into `health_insurance`(`Student_ID`,`COLNO`,`DEPNO`,`Marital_Status`,`Local`,`Administrative_Unit`,`Neighborhood`,`Houseno`,`Phone`,`Email`,`Chronic_diseases`,`entrance_no`,`History`,`Serial`,`Publication`) values (0,NULL,NULL,'hghgh',NULL,'ghgh','55',NULL,'45446','sarah22nugdallah@hotmail.com',NULL,NULL,'2014-01-22 15:04:43',1,NULL),(NULL,NULL,NULL,'111','111',NULL,'111',111,'111','kimo781@hotmail.com',NULL,NULL,'2014-01-22 15:10:22',2,'111'),(NULL,NULL,NULL,'8','8','8','8',8,'8','mohammed.nugdallah@hotmail.com','87',NULL,'2014-01-22 15:12:32',3,'8'),(8388607,NULL,NULL,'98','98','98','98',98,'0122733103','sarah22nugdallah@hotmail.com','',NULL,'2014-01-23 11:18:17',4,'98'),(8388607,NULL,NULL,'0','0','0','0',0,'0122733103','mohammed.nugdallah@hotmail.com','000000000000000000',NULL,'2014-01-23 11:20:43',5,'0'),(8388607,NULL,NULL,'44','44','44','44',44,'911104381','sarah22nugdallah@hotmail.com','454545',NULL,'2014-01-23 11:24:48',6,'44'),(2006216855,NULL,NULL,'5','5','5','5',5,'911104381','mohammed.nugdallah@hotmail.com','55555',NULL,'2014-01-23 11:28:46',7,'5');

/*Table structure for table `main_menu` */

DROP TABLE IF EXISTS `main_menu`;

CREATE TABLE `main_menu` (
  `mid` int(4) NOT NULL auto_increment,
  `title` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `main_menu` */

insert  into `main_menu`(`mid`,`title`) values (1,'طلبات التقديم'),(2,'التقارير'),(3,'المستخدمين'),(4,'الاعدادات');

/*Table structure for table `operations` */

DROP TABLE IF EXISTS `operations`;

CREATE TABLE `operations` (
  `groupid` int(4) NOT NULL,
  `update` int(2) NOT NULL,
  `delete` int(2) NOT NULL,
  `insert` int(2) NOT NULL,
  KEY `groupid` (`groupid`),
  CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`groupid`) REFERENCES `groups` (`groupid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `operations` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `groupid` int(4) NOT NULL,
  `mmid` int(4) NOT NULL,
  `smid` int(4) NOT NULL,
  PRIMARY KEY  (`groupid`,`mmid`,`smid`),
  KEY `mmid` (`mmid`),
  KEY `smid` (`smid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`groupid`,`mmid`,`smid`) values (1,1,1),(1,1,2),(1,1,3),(1,1,4),(2,1,1),(2,1,2),(2,1,3),(2,1,4),(1,2,1),(1,2,2),(1,2,3),(1,2,4),(1,2,5),(1,2,6),(1,2,7),(2,2,1),(2,2,2),(2,2,3),(2,2,4),(2,2,5),(2,2,6),(2,2,7),(1,3,1),(1,3,2),(1,3,3),(1,4,1);

/*Table structure for table `points_support` */

DROP TABLE IF EXISTS `points_support`;

CREATE TABLE `points_support` (
  `serial` int(30) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `points_support` */

insert  into `points_support`(`serial`,`name`) values (1,'صندوق دعم الطلاب'),(2,'صندوق دعم المعاش'),(3,'التامينات الاجتماعية'),(4,'اخرى');

/*Table structure for table `program` */

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `COLNO` double default NULL,
  `DEPNO` double default NULL,
  `SECNO` double default NULL,
  `PROG_NO` double NOT NULL,
  `PROG_NAME` varchar(255) default NULL,
  `PROG_NAMEE` varchar(255) default NULL,
  `GRADENO` double default NULL,
  `NOOFYEARSNO` double default NULL,
  `NOOFSEM` double default NULL,
  `SHORT_ID` double default NULL,
  `HIGH_ID` double default NULL,
  `SHORT_NAME` varchar(255) default NULL,
  `FEES` varchar(255) default NULL,
  `ACERT_NAME` varchar(255) default NULL,
  `ECERT_NAME` varchar(255) default NULL,
  PRIMARY KEY  (`PROG_NO`),
  KEY `FK_program` (`COLNO`,`DEPNO`),
  KEY `COLNO` (`COLNO`),
  KEY `DEPNO` (`DEPNO`),
  CONSTRAINT `FK_program` FOREIGN KEY (`COLNO`, `DEPNO`) REFERENCES `department` (`COLNO`, `DEPNO`),
  CONSTRAINT `program_ibfk_1` FOREIGN KEY (`COLNO`) REFERENCES `colleges` (`COLNO`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `program_ibfk_2` FOREIGN KEY (`DEPNO`) REFERENCES `department` (`DEPNO`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `program` */

insert  into `program`(`COLNO`,`DEPNO`,`SECNO`,`PROG_NO`,`PROG_NAME`,`PROG_NAMEE`,`GRADENO`,`NOOFYEARSNO`,`NOOFSEM`,`SHORT_ID`,`HIGH_ID`,`SHORT_NAME`,`FEES`,`ACERT_NAME`,`ECERT_NAME`) values (15,2,NULL,1,NULL,NULL,NULL,NULL,NULL,7,NULL,NULL,NULL,NULL,NULL),(2,1,0,20100001,'بكالريوس المختبرات العلمية - كيمياء',NULL,3,4,8,1,1336,'مختبرات علمية - الكيمياء',NULL,'درجة بكالوريوس العلوم (شرف) في المختبرات العلمية (الكيمياء)','the degree of Bachelor of Science (Honours) in Scientific Laboratories (Chemistry)'),(2,1,0,20100002,'بكالريوس المختبرات العلمية - فيزياء',NULL,3,4,8,2,1337,'مختبرات علمية - الفيزياء',NULL,'درجة بكالوريوس العلوم (شرف) في المختبرات العلمية (الفيزياء)','the degree of Bachelor of Science (Honours) in Scientific Laboratories (Physics)'),(2,1,1,20101001,'الفيزياء',NULL,NULL,NULL,8,7,NULL,NULL,NULL,'الفيزياء',NULL),(2,2,0,20200001,'بكالريوس العلوم - رياضيات',NULL,3,4,8,3,1338,'علوم - الرياضيات',NULL,'درجة بكالوريوس العلوم (شرف) في الرياضيات','the degree of Bachelor of Science (Honours) in Mathematics'),(2,3,0,20300001,'بكالريوس العلوم - فيزياء',NULL,3,4,8,4,1339,'علوم - الفيزياء',NULL,'درجة بكالوريوس العلوم (شرف) في الفيزياء','the degree of Bachelor of Science (Honours) in Physics'),(2,4,0,20400001,'بكالريوس العلوم - الكيمياء',NULL,3,4,8,5,1341,'علوم - الكيمياء',NULL,'درجة بكالوريوس العلوم (شرف) في الكيمياء','the degree of Bachelor of Science (Honours) in Chemistry'),(2,5,0,20500001,'بكالريوس العلوم - إحصاء',NULL,3,4,8,6,1342,'علوم - الإحصاء',NULL,'درجة بكالوريوس العلوم (شرف) في الإحصاء التطبيقي','the degree of Bachelor of Science (Honours) in Applied Statistics'),(3,1,0,30100001,'بكالريوس تكنولوجيا الاغذية',NULL,2,4,10,1,1366,'تكنولوجيا الاغذية',NULL,'بكالريوس تكنولوجيا الاغذية',NULL),(3,2,0,30200001,'بكالريوس وقاية النباتات',NULL,2,4,10,2,1367,'وقاية النباتات',NULL,'بكالريوس وقاية النباتات',NULL),(3,3,0,30300001,'بكالريوس الارشاد الزراعى والتنمية الريفية',NULL,2,4,10,3,1368,'ارشاد زراعى وتنميةريفية',NULL,'بكالريوس الارشاد الزراعى والتنمية الريفية',NULL),(3,4,0,30400001,'بكالريوس الميكنة الزراعية',NULL,2,4,10,4,1369,'الميكنة الزراعية',NULL,'بكالريوس الميكنة الزراعية',NULL),(3,5,0,30500001,'بكالريوس البساتين',NULL,2,4,10,5,1371,'البساتين',NULL,'بكالريوس البساتين',NULL),(3,6,0,30600001,'بكالريوس علوم التربة والمياه',NULL,2,4,10,6,1372,'علوم التربة والمياه',NULL,'بكالريوس علوم التربة والمياه',NULL),(3,7,0,30700001,'بكالريوس علوم المحاصيل الحقلية',NULL,2,4,10,7,1373,'علوم المحاصيل الحقلية',NULL,'بكالريوس علوم المحاصيل الحقلية',NULL),(3,8,0,30800001,'بكالريوس الاقتصاد الزراعى',NULL,2,4,10,8,1374,'الاقتصاد الزراعى',NULL,'بكالريوس الاقتصاد الزراعى',NULL),(3,9,0,30900001,'بكالريوس علوم الاسرة والمجتمع',NULL,2,4,10,9,NULL,'علوم الاسرة والمجتمع',NULL,'بكالريوس علوم الاسرة والمجتمع',NULL),(3,10,0,31000001,'بكالريوس الانتاج الحيوانى',NULL,2,4,10,10,1375,'الانتاج الحيوانى',NULL,'بكالريوس الانتاج الحيوانى',NULL),(3,11,0,31100001,'قسم الهندسة الزراعية',NULL,2,5,10,11,NULL,'الهندسة الزراعية',NULL,'قسم الهندسة الزراعية',NULL),(4,1,0,40100001,'بكالريوس الطب وجراحة الحيوان',NULL,2,4,10,1,NULL,'طب وجراحة الحيوان',NULL,'بكالريوس الطب وجراحة الحيوان',NULL),(4,1,0,40100002,'بكالريوس الطب البيطري',NULL,2,4,10,4,1376,'الطب البيطري',NULL,'بكالريوس الطب البيطري',NULL),(4,2,0,40200001,'بكالريوس الانتاج الحيوانى',NULL,2,4,10,2,NULL,'الانتاج الحيوانى',NULL,'بكالريوس الانتاج الحيوانى',NULL),(4,3,0,40300001,'بكالريوس علوم الاسماك والحياة البرية',NULL,2,4,10,3,NULL,'علوم الاسماك والحياة البرية',NULL,'بكالريوس علوم الاسماك والحياة البرية',NULL),(4,4,0,40400001,'قسم الدواجن',NULL,3,4,10,6,NULL,'الدواجن',NULL,'قسم الدواجن',NULL),(4,5,0,40500001,'قسم اللحوم',NULL,3,4,10,5,NULL,'اللحوم',NULL,'قسم اللحوم',NULL),(4,6,0,40600001,'قسم الألبان',NULL,3,4,10,7,NULL,'الالبان',NULL,'قسم الألبان',NULL),(4,50,0,45000010,'دبلوم بيطرة التابع للبيطرة القديم',NULL,1,3,10,NULL,NULL,'دبلوم بيطرة التابع للبيطرة القديم',NULL,'دبلوم بيطرة التابع للبيطرة القديم',NULL),(5,1,0,50100001,'بكالريوس علوم الغابات',NULL,2,4,10,1,1379,'علوم الغابات',NULL,'بكالريوس علوم الغابات',NULL),(5,2,0,50200001,'بكالريوس علوم المراعى',NULL,2,4,10,2,1381,'علوم المراعى',NULL,'بكالريوس علوم المراعى',NULL),(6,1,0,60100001,'بكالريوس المحاسبة والتمويل',NULL,2,4,8,1,NULL,'المحاسبة',NULL,'بكالريوس العلوم فى الدراسات التجارية (المحاسبة والتمويل)','the Bachelor of Science in Business Studies (ACCOUNTING & FINANCE)'),(6,1,0,60100002,'بكالريوس المحاسبة والتمويل (موازي)',NULL,2,4,8,1,1343,NULL,NULL,NULL,NULL),(6,2,0,60200001,'بكالريوس التكاليف والمحاسبة الإدارية',NULL,2,4,8,9,NULL,NULL,NULL,'بكالريوس العلوم فى الدراسات التجارية (التكاليف والمحاسبة الادارية)','the Bachelor of Science in Business Studies (COST & MANAGEMENT ACCOUNTING)'),(6,2,0,60200002,'بكالريوس التكاليف والمحاسبة الإدارية (موازي)',NULL,2,4,8,9,1344,NULL,NULL,NULL,NULL),(6,3,0,60300001,'بكالريوس البنوك والتمويل',NULL,2,4,8,3,NULL,'البنوك والتمويل',NULL,'بكالريوس العلوم فى الدراسات التجارية (البنوك والتمويل)','the Bachelor of Science in Business Studies (BANKING & FINANCE)'),(6,3,0,60300002,'بكالريوس البنوك والتمويل (موازي)',NULL,2,4,8,3,1345,NULL,NULL,NULL,NULL),(6,4,0,60400001,'بكالريوس إدارة الاعمال',NULL,2,4,8,4,NULL,'إدارة الاعمال',NULL,'بكالريوس العلوم فى الدراسات التجارية (إدارة الاعمال)','the Bachelor of Science in Business Studies (BUSINESS ADMINISTRATION)'),(6,4,0,60400002,'بكالريوس إدارة الاعمال (موازي)',NULL,2,4,8,4,1346,NULL,NULL,NULL,NULL),(6,5,0,60500001,'بكالريوس الاقتصاد التطبيقى',NULL,2,4,8,5,NULL,'الاقتصاد التطبيقى',NULL,'بكالريوس العلوم فى الدراسات التجارية (الاقتصاد التطبيقى)','the Bachelor of Science in Business Studies (APPLIED ECONOMICS)'),(6,5,0,60500002,'بكالريوس الاقتصاد التطبيقى (موازي)',NULL,2,4,8,5,1347,NULL,NULL,NULL,NULL),(6,6,0,60600001,'بكالريوس نظم المعلومات الادارية',NULL,2,4,8,6,NULL,'نظم المعلومات الادارية',NULL,'بكالريوس العلوم فى الدراسات التجارية (نظم المعلومات الادارية)','the Bachelor of science in MANAGEMENT INFORMATION SYSTEMS'),(6,7,0,60700001,'بكالريوس السكرتارية',NULL,2,4,8,7,NULL,'السكرتارية',NULL,'بكالريوس العلوم فى الدراسات التجارية (السكرتارية)','the Bachelor of Science in Business Studies (SECRETARIAL)'),(6,8,0,60800001,'قسم الدراسات التجارية',NULL,2,4,8,8,NULL,NULL,NULL,'قسم الدراسات التجارية',NULL),(6,50,0,65000010,'تجارية القسم العام القديم',NULL,2,4,8,NULL,NULL,'تجارية القسم العام القديم',NULL,'تجارية القسم العام القديم',NULL),(6,4,0,65100001,'بكالريوس التسويق',NULL,2,4,8,10,NULL,NULL,NULL,NULL,NULL),(6,51,0,65100002,'بكالريوس التسويق (موازي)',NULL,2,4,8,10,1349,NULL,NULL,NULL,NULL),(7,1,0,70100001,'بكلاريوس شرف التربية رياضيات',NULL,2,4,8,1,1352,'الرياضيات',NULL,'بكلاريوس (شرف) التربية \" رياضيات \"','The Degree of Bachelor of Education (Honours) in \" Mathematics \"'),(7,1,0,70100002,'بكلاريوس شرف التربية كيمياء',NULL,2,4,8,2,1353,'الكيمياء',NULL,'بكلاريوس (شرف) التربية \" كيمياء \"','The Degree of Bachelor of Education (Honours) in \" Chemistry \"'),(7,1,0,70100003,'بكلاريوس شرف التربية فيزياء',NULL,2,4,8,3,1354,'الفيزياء',NULL,'بكلاريوس (شرف) التربية \" فيزياء \"','The Degree of Bachelor of Education (Honours) in \" Physics\"'),(7,2,0,70200001,'بكلاريوس شرف التربية لغة إنجليزية',NULL,2,4,8,4,1358,'اللغة الانجليزية',NULL,'بكلاريوس (شرف) التربية \" لغة إنجليزية\"','The Degree of Bachelor of Education (Honours) in \" English \"'),(7,2,0,70200002,'بكلاريوس شرف التربية لغة فرنسية',NULL,2,4,8,5,1359,'اللغة الفرنسية',NULL,'بكلاريوس (شرف) التربية \" لغة فرنسية \"','The Degree of Bachelor of Education (Honours) in \" Frernch\"'),(7,2,0,70200003,'بكلاريوس شرف التربية لغة عربية',NULL,2,4,8,6,1362,'اللغة العربية',NULL,'بكلاريوس (شرف) التربية \" لغة عربية \"','The Degree of Bachelor of Education (Honours) in \" Arabic \"'),(7,3,0,70300001,'بكلاريوس شرف التربية علم النفس',NULL,2,4,8,7,1361,'علم النفس',NULL,'بكلاريوس (شرف) التربية \" علم النفس \"','The Degree of Bachelor of Education (Honours) in \" Psychology\"'),(7,4,0,70400001,'بكلاريوس شرف التربية التقنية - مدنية',NULL,2,4,8,8,1357,'التقنية - مدنية',NULL,'بكلاريوس (شرف) التربية التقنية (مدنية )','The Degree of Bachelor of Education (Honours) in Technical Education \" Civil \"'),(7,4,0,70400002,'بكلاريوس شرف التربية التقنية - كهرباء',NULL,2,4,8,9,1355,'التقنية - كهرباء',NULL,'بكلاريوس (شرف) التربية التقنية (كهرباء)','The Degree of Bachelor of Education (Honours) in Technical Education \" Electrical \"'),(7,4,0,70400003,'بكالريوس شرف التربية التقنية - ميكانيكا',NULL,2,4,8,10,1356,'التقنية - ميكانيكا',NULL,'بكالريوس (شرف) التربية التقنية (ميكانيكا)','The Degree of Bachelor of Education (Honours) in Technical Education \" Mechanics \"'),(7,4,0,70400004,'التقنية',NULL,2,4,8,13,NULL,'التقنية',NULL,'التقنية',NULL),(7,4,0,70400005,'تقنية تكميلي 3 +1',NULL,2,4,8,14,NULL,'تقنية تكميلي 3 +1',NULL,'تقنية تكميلي 3 +1',NULL),(7,4,0,70400006,'تقنية - صناعي',NULL,2,4,8,15,NULL,'تقنية - صناعي',NULL,'تقنية - صناعي',NULL),(7,4,0,70400007,'بكالريوس التقنية -المدنية-صناعى',NULL,2,4,8,16,NULL,'التقنية -المدنية-صناعى',NULL,'بكالريوس التقنية -المدنية-صناعى',NULL),(7,4,0,70400008,'بكالريوس التقنية -الكهرباء-صناعى',NULL,2,4,8,17,NULL,'التقنية -الكهرباء-صناعى',NULL,'بكالريوس التقنية -الكهرباء-صناعى',NULL),(7,4,0,70400009,'بكالريوس التقنية -الميكانيكا-صناعى',NULL,2,4,8,18,NULL,'التقنية -الميكانيكا-صناعى',NULL,'بكالريوس التقنية -الميكانيكا-صناعى',NULL),(7,5,0,70500001,'بكالريوس التربية فنون',NULL,2,4,8,11,NULL,'فنون',NULL,'بكالريوس التربية فنون',NULL),(7,5,0,70500002,'بكلاريوس شرف التربية - تربية فنية',NULL,2,4,8,12,1363,'التربية الفنية',NULL,'بكلاريوس (شرف) التربية - \" تربية فنية \"','The Degree of Bachelor of Education (Honours) in Art Education'),(7,12,0,70600001,'بكلاريوس شرف التربية اساس',NULL,2,4,8,12,1364,'التربية - اساس',NULL,'بكلاريوس (شرف) التربية اساس',NULL),(7,50,0,75000010,'تقنية قبل وجود تخصصات',NULL,2,4,8,NULL,NULL,'تقنية قبل وجود تخصصات',NULL,'تقنية قبل وجود تخصصات',NULL),(8,1,0,80100001,'بكالريوس الفنون الجميلة والتطبيقية',NULL,2,4,8,1,1365,'الفنون الجميلة والتطبيقية',NULL,'بكالريوس الفنون الجميلة والتطبيقية',NULL),(8,2,0,80200001,'بكالريوس الفنون (التصميم الداخلي)',NULL,2,4,8,2,NULL,'التصميم الداخلي',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في التصميم الداخلي','The degree of Bachelor of Fine and Applied Art in Interior Design'),(8,3,0,80300001,'بكالريوس الفنون (التصميم الإيضاحي)',NULL,2,4,8,3,NULL,'التصميم الإيضاحي',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في التصميم الإيضاحي','The degree of Bachelor of Fine and Applied Art in Graphic Design'),(8,3,0,80300002,'بكالريوس الفنون (التصوير الفوتوغرافي)',NULL,2,4,8,4,NULL,'التصوير الفوتوغرافي',NULL,'بكالريوس الفنون في التصوير الفوتوغرافي',NULL),(8,4,0,80400001,'بكالريوس الفنون (التصميم الصناعي)',NULL,2,4,8,5,NULL,'التصميم الصناعي',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في التصميم الصناعي','The degree of Bachelor of Fine and Applied Art in Industrial Design'),(8,5,0,80500001,'بكالريوس الفنون (النحت)',NULL,2,4,8,6,NULL,'النحت',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في النحت','The degree of Bachelor of Fine and Applied Art in Sculpture'),(8,6,0,80600001,'بكالريوس الفنون (الطباعة والتجليد)',NULL,2,4,8,7,NULL,'الطباعة والتجليد',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في الطباعة والتجليد','The degree of Bachelor of Fine and Applied Art in Printing & Binding'),(8,7,0,80700001,'بكالريوس الفنون (الخزف)',NULL,2,4,8,8,NULL,'الخزف',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في الخزف','The degree of Bachelor of Fine and Applied Art in Ceramics'),(8,8,0,80800001,'بكالريوس الفنون (الخطوط والزخرفة الاسلامية)',NULL,2,4,8,9,NULL,'الخطوط',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في الخطوط والزخرفة الاسلامية','The degree of Bachelor of Fine and Applied Art in Calligraphy & Islamic Ornamentation'),(8,9,0,80900001,'بكالريوس الفنون (التلوين)',NULL,2,4,8,10,NULL,'تلوين',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في التلوين','The degree of Bachelor of Fine and Applied Art in Painting'),(8,10,0,81000001,'بكالريوس الفنون (تصميم وطباعة المنسوجات)',NULL,2,4,8,11,NULL,'تصميم وطباعة المنسوجات',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في تصميم وطباعة المنسوجات)','The degree of Bachelor of Fine and Applied Art in Textile Design and Printing'),(8,10,0,81000002,'بكالريوس الفنون (تصميم وطباعة المنسوجات -الازياء)',NULL,2,4,8,12,NULL,'أزياء',NULL,'درجة بكالريوس الفنون الجميلة والتطبيقية في تصميم وطباعة المنسوجات ( تصميم الازياء)','The degree of Bachelor of Fine and Applied Art in Textile Design and Printing ( Fashion Design )'),(8,11,0,81100001,'بكالريوس الفنون (المطبعة)',NULL,2,4,8,13,NULL,'المطبعة',NULL,'بكالريوس الفنون في المطبعة',NULL),(9,1,0,90100001,'بكالريوس الهندسة الميكانيكية',NULL,2,5,10,1,1311,'الهندسة الميكانيكية',NULL,'بكالريوس الهندسة الميكانيكية',NULL),(9,1,0,90100002,'بكالريوس الهندسة الميكانيكية (قدرة)',NULL,3,5,10,1,NULL,NULL,NULL,'بكالريوس الهندسة الميكانيكية (قدرة)',NULL),(9,1,0,90100003,'بكالريوس الهندسة الميكانيكية (إنتاج)',NULL,3,5,10,1,NULL,NULL,NULL,'بكالريوس الهندسة الميكانيكية (إنتاج)',NULL),(9,2,0,90200001,'بكالريوس الهندسة الكهربائية',NULL,2,5,10,2,1312,'الهندسة الكهربائية',NULL,'بكالريوس الهندسة الكهربائية',NULL),(9,2,0,90200002,'بكالريوس الهندسة الكهربائية (قوى وماكينات)',NULL,3,5,10,2,NULL,NULL,NULL,'بكالريوس الهندسة الكهربائية (قوى وماكينات)',NULL),(9,2,0,90200003,'بكالريوس الهندسة الكهربائية (تحكم)',NULL,3,5,10,2,NULL,NULL,NULL,'بكالريوس الهندسة الكهربائية (تحكم)',NULL),(9,3,0,90300001,'بكالريوس الهندسة المدنية',NULL,2,5,10,3,1313,'الهندسة المدنية',NULL,'بكالريوس الهندسة المدنية',NULL),(9,3,0,90300002,'بكالريوس الهندسة المدنية (الانشاءات)',NULL,3,5,10,3,NULL,NULL,NULL,'بكالريوس الهندسة المدنية (الانشاءات)',NULL),(9,3,0,90300003,'بكالريوس الهندسة المدنية (التشييد)',NULL,3,5,10,3,NULL,NULL,NULL,'بكالريوس الهندسة المدنية (التشييد)',NULL),(9,3,0,90300004,'بكالريوس الهندسة المدنية (الرى والمياه )',NULL,3,5,10,3,NULL,NULL,NULL,'بكالريوس الهندسة المدنية (الرى والمياه )',NULL),(9,3,0,90300005,'بكالريوس الهندسة المدنية (الطرق والنقل)',NULL,3,5,10,3,NULL,NULL,NULL,'بكالريوس الهندسة المدنية (الطرق والنقل)',NULL),(9,4,0,90400001,'بكالريوس هندسة الالكترونيات',NULL,2,5,10,4,1314,'هندسة الالكترونيات',NULL,'بكالريوس هندسة الالكترونيات',NULL),(9,4,0,90400002,'بكالريوس هندسة الالكترونيات(الالكترونيات الصناعية)',NULL,3,5,10,4,NULL,NULL,NULL,'بكالريوس هندسة الالكترونيات(الالكترونيات الصناعية)',NULL),(9,4,0,90400003,'بكاريوس هندسة الالكترونيات(الحاسوب والشبكات)',NULL,3,5,10,4,NULL,NULL,NULL,'بكاريوس هندسة الالكترونيات(الحاسوب والشبكات)',NULL),(9,4,0,90400004,'بكالريوس هندسة الالكترونيات(الاتصالات)',NULL,3,5,10,4,NULL,NULL,NULL,'بكالريوس هندسة الالكترونيات(الاتصالات)',NULL),(9,5,0,90500001,'بكالريوس هندسة العمارة',NULL,2,5,10,5,NULL,'هندسة العمارة',NULL,'بكالريوس هندسة العمارة',NULL),(9,6,0,90600001,'بكالريوس هندسة الطيران',NULL,2,5,10,6,1315,'هندسة الطيران',NULL,'بكالريوس هندسة الطيران',NULL),(9,6,0,90600002,'بكالريوس هندسة الطيران (كهروالكترونيات)',NULL,3,5,10,6,NULL,NULL,NULL,'بكالريوس هندسة الطيران (كهروالكترونيات)',NULL),(9,6,0,90600003,'بكالريوس هندسة الطيران (دفع)',NULL,3,5,10,6,NULL,NULL,NULL,'بكالريوس هندسة الطيران (دفع)',NULL),(9,6,0,90600004,'بكالريوس هندسة الطيران (تصميم وأنظمة)',NULL,3,5,10,6,NULL,NULL,NULL,'بكالريوس هندسة الطيران (تصميم وأنظمة)',NULL),(9,6,0,90600005,'بكالريوس هندسة الطيران (هياكل ومحركات الطائرات)',NULL,3,5,10,6,NULL,NULL,NULL,'بكالريوس هندسة الطيران (هياكل ومحركات الطائرات)',NULL),(9,7,0,90700001,'بكالريوس الهندسة الطبية الحيوية',NULL,2,5,10,7,1316,'الهندسة الطبية الحيوية',NULL,'بكالريوس الهندسة الطبية الحيوية',NULL),(9,8,0,90800001,'بكالريوس هندسة المساحة',NULL,2,5,10,8,1319,'هندسة المساحة',NULL,'بكالريوس هندسة المساحة',NULL),(9,8,0,90800002,'بكالريوس هندسة المساحة ( المساحة الجيوديسيا)',NULL,2,5,10,8,NULL,NULL,NULL,NULL,NULL),(9,8,0,90800003,'بكالريوس هندسة المساحة (نظم المعلومات الجغرافية)',NULL,2,5,10,8,NULL,NULL,NULL,NULL,NULL),(9,8,0,90800004,'المساحة التصويرية والاستشعار عن بعد',NULL,2,5,10,8,NULL,NULL,NULL,NULL,NULL),(9,9,0,90900001,'بكالريوس هندسة النسيج',NULL,2,5,10,9,1321,'هندسة النسيج',NULL,'بكالريوس هندسة النسيج',NULL),(9,10,0,91000001,'بكالريوس هندسة البلاستيك',NULL,2,5,10,10,1322,'هندسة البلاستيك',NULL,'بكالريوس هندسة البلاستيك',NULL),(9,11,0,91100001,'بكالريوس هندسة الجلود',NULL,2,5,10,11,1323,'هندسة الجلود',NULL,'بكالريوس هندسة الجلود',NULL),(9,12,0,91200001,'النفط',NULL,2,5,10,12,NULL,NULL,NULL,'النفط',NULL),(9,13,0,91300001,'بكالريوس الهندسة الكيميائية',NULL,2,5,10,13,1317,'الهندسة الكيميائية',NULL,'بكالريوس الهندسة الكيميائية',NULL),(9,14,0,91400001,'بكالريوس الهندسة النووية',NULL,2,5,10,14,1318,'الهندسة النووية',NULL,'بكالريوس الهندسة النووية',NULL),(9,50,0,95000010,'دبلومات هندسة القديمة ثلاث سنوات مدنية',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات مدنية',NULL,'دبلومات هندسة القديمة ثلاث سنوات مدنية',NULL),(9,50,0,95000011,'دبلومات هندسة القديمة ثلاث سنوات كهرباء',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات كهرباء',NULL,'دبلومات هندسة القديمة ثلاث سنوات كهرباء',NULL),(9,50,0,95000012,'دبلومات هندسة القديمة ثلاث سنوات معمار',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات معمار',NULL,'دبلومات هندسة القديمة ثلاث سنوات معمار',NULL),(9,50,0,95000013,'دبلومات هندسة القديمة ثلاث سنوات ميكانيكا',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات ميكانيكا',NULL,'دبلومات هندسة القديمة ثلاث سنوات ميكانيكا',NULL),(9,50,0,95000014,'دبلومات هندسة القديمة ثلاث سنوات الكترونيات',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات الكترونيات',NULL,'دبلومات هندسة القديمة ثلاث سنوات الكترونيات',NULL),(9,50,0,95000015,'دبلومات هندسة القديمة ثلاث سنوات نسيج',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات نسيج',NULL,'دبلومات هندسة القديمة ثلاث سنوات نسيج',NULL),(9,50,0,95000016,'دبلومات هندسة القديمة ثلاث سنوات مساحة',NULL,1,3,6,NULL,NULL,'دبلومات هندسة القديمة ثلاث سنوات مساحة',NULL,'دبلومات هندسة القديمة ثلاث سنوات مساحة',NULL),(10,1,0,100100001,'بكالريوس الاشعة التشخيصية',NULL,2,4,8,1,NULL,'الاشعة التشخيصية',NULL,'درجة بكالوريوس العلوم (شرف) في تكنولوجيا الاشعة التشخيصية','The degree of Bachelor of Science (Honours) in Diagnostic Radiological Technology'),(10,1,0,100100002,'بكالريوس الاشعة التشخيصية (موازي)',NULL,2,4,8,1,1382,NULL,NULL,NULL,NULL),(10,2,0,100200001,'بكالريوس الاشعة العلاجية',NULL,2,4,8,2,1383,'الاشعة العلاجية',NULL,'درجة بكالوريوس العلوم (شرف) في تكنولوجيا العلاج بالأشعة','The degree of Bachelor of Science (Honours) in Radiotherapy Technology'),(12,1,0,120100001,'دبلوم هندسة الكترونيات - اتصالات',NULL,1,3,6,1,3311,'د. هندسة - اتصالات','2000','الدبلوم في الهندسة الإلكترونية (هندسة الإتصالات)','The Diploma in Electronics Engineering (Communication Engineering)'),(12,1,0,120100002,'دبلوم هندسة الكترونيات - حاسوب',NULL,1,3,6,2,3312,'د. هـندسة - حاسوب','1800','الدبلوم في الهندسة الإلكترونية (هندسة الحاسوب)','The Diploma in Electronics Engineering (Computer Engineering)'),(12,1,0,120100003,'دبلوم هندسة النفط',NULL,1,3,6,3,3313,'د.هندسة النفط','2250','الدبلوم فى هندسة النفط','The Diploma in Petroleum Engineering'),(12,1,0,120100004,'دبلوم هندسة مدنية - انشاءات',NULL,1,3,6,4,3316,'د.هندسة انشاءات','1900','الدبلوم فى الهندسة المدنية (الإنشاءات)','The Diploma in Civil Engineering ( Structures)'),(12,1,0,120100005,'دبلوم هندسة مدنية - طرق ونقل',NULL,1,3,6,5,3317,'د.هندسة طرق ونقل','1900','الدبلوم في الهندسة المدنية (الطرق والنقل)','The Diploma in Civil Engineering (Highway &Transportation)'),(12,1,0,120100006,'دبلوم هندسة مدنية - بلديات',NULL,1,3,6,6,3318,'د.هندسة بلديات','1300','الدبلوم فى الهندسة المدنية ( البلديات)','The Diploma in Civil Engineering (Municipal)'),(12,1,0,120100007,'دبلوم هندسة مدنية - ري ومياه',NULL,1,3,6,7,3319,'د.هندسة ري ومياه','1300','الدبلوم في الهندسة المدنية (الري والمياه)','The Diploma in Civil Engineering (Water &Irrigation)'),(12,1,0,120100008,'دبلوم هندسة مدنية - بيئية',NULL,1,3,6,8,NULL,'د. هندسة بيئية',NULL,'الدبلوم فى الهندسة المدنية (البيئية)','The Diploma in Civil Engineering (Environmental)'),(12,1,0,120100009,'دبلوم هندسة مدنية - تشييد',NULL,1,3,6,9,3321,'د.هندسة تشييد','1900','الدبلوم فى الهندسة المدنية ( التشييد)','The Diploma in Civil Engineering (Construction)'),(12,1,0,120100010,'دبلوم هندسة ميكانيكية - انتاج',NULL,1,3,6,10,3322,'د.هـ.ميكانيكية- انتاج','2000','الدبلوم في الهندسة الميكانيكية (الانتاج)','The Diploma in Mechanical Engineering (Production)'),(12,1,0,120100011,'دبلوم هندسة ميكانيكية - سيارات',NULL,1,3,6,11,3323,'د.هـ.ميكانيكية- سيارات','1800','الدبلوم فى الهندسة الميكانيكية (السيارات)','The Diploma in Mechanical Engineering (Automobile)'),(12,1,0,120100012,'دبلوم هندسة ميكانيكية - صيانة',NULL,1,3,6,12,3324,'د.هـ.ميكانيكية-صيانة','1800','الدبلوم فى الهندسة الميكانيكية (الصيانة)','The Diploma in Mechanical Engineering (Maintenance)'),(12,1,0,120100013,'دبلوم هندسة ميكانيكية - تبريد وتكييف',NULL,1,3,6,13,3325,'د.هـ.ميكانيكية-تبريد وتكييف','1800','الدبلوم فى الهندسة الميكانيكية (التبريد والتكييف)','The Diploma in Mechanical Engineering (Ref.& A/Condition)'),(12,1,0,120100014,'دبلوم هندسة كهربائية',NULL,1,3,6,14,3327,'د.هندسة كهربائية','2000','الدبلوم في الهندسة الكهربائية','The Diploma in Electrical Engineering'),(12,1,0,120100015,'دبلوم هندسة مساحة',NULL,1,3,6,15,3328,'د.هندسة مساحة','1600','الدبلوم فى هندسة المساحة','The Diploma in Surveying Engineering'),(12,1,0,120100016,'دبلوم هندسة عمارة - مبانى',NULL,1,3,6,16,NULL,'د.هندسة عمارة-مبانى',NULL,'الدبلوم في هندسة المعمار (المبانى)','The Diploma in Architecture (Building)'),(12,1,0,120100017,'دبلوم هندسة عمارة - معمار',NULL,1,3,6,17,3329,'د.هندسة عمارة-معمار','2000','الدبلوم في هندسة المعمار (المعمار)','The Diploma in Architecture (Arch.)'),(12,1,0,120100018,'دبلوم هندسة النسيج',NULL,1,3,6,18,3331,'د.هندسة النسيج','1000','الدبلوم فى هندسة النسيج','The Diploma in Textile Engineering'),(12,1,0,120100019,'دبلوم هندسة البلاستيك',NULL,1,3,6,19,3332,'د.هندسة البلاستيك','1500','الدبلوم في هندسة البلاستيك','The Diploma in Plastic Engineering'),(12,1,0,120100020,'دبلوم هندسة الجلود',NULL,1,3,6,20,3333,'د.هندسة الجلود','1500','الدبلوم فى هندسة الجلود','The Diploma of Engineering in Leather Technology'),(12,1,0,120100021,'دبلوم هندسة الطيران-صيانة الكترونيات الطائرات',NULL,1,3,6,21,3334,'د.هـ.الكترونيات الطائرات','2000','الدبلوم فى هندسة الطيران(صيانة الكترونيات الطائرات)','The Diploma in Aeronautical Engineering (Maintenance in Aircraft Avionics)'),(12,1,0,120100022,'دبلوم هندسة الطيران-صيانة ميكانيكا الطائرات',NULL,1,3,6,22,3335,'د.هـ.ميكانيكا الطائرات','2000','الدبلوم في هندسة الطيران(صيانة ميكانيكا الطائرات)','The Diploma in Aeronautical Engineering (Maintenance in Aircraft Mechanics)'),(12,1,0,120100023,'دبلوم هندسة أجهزة الاشعة والمعدات الطبية',NULL,1,3,6,23,NULL,'د.هـ. اشعة ومعدات طبية','2000','الدبلوم فى هندسة أجهزة الاشعة والمعدات الطبية','The Diploma in Radiological and Medical Instrumentation Engineering'),(12,1,0,120100024,'دبلوم هندسة زراعية',NULL,1,3,6,54,NULL,'د.هندسة زراعية',NULL,'دبلوم هندسة زراعية',NULL),(12,1,0,120100025,'دبلوم صيانة سنتان',NULL,1,2,6,55,NULL,'د.صيانة سنتان',NULL,'دبلوم صيانة سنتان',NULL),(12,1,0,120100026,'دبلوم هندسة مدنية سنتان',NULL,1,2,6,56,NULL,'د.هـ. مدنية سنتان',NULL,'دبلوم هندسة مدنية سنتان',NULL),(12,1,0,120100027,'دبلوم هندسة كهرباء سنتان',NULL,1,2,6,57,NULL,'د.هـ كهرباء سنتان',NULL,'دبلوم هندسة كهرباء سنتان',NULL),(12,1,0,120100028,'دبلوم هندسة معمار سنتان',NULL,1,2,6,58,NULL,'د.هـ.معمار سنتان',NULL,'دبلوم هندسة معمار سنتان',NULL),(12,1,0,120100029,'دبلوم هندسة ميكانيكا سنتان',NULL,1,2,6,59,NULL,'د.هـ. ميكانيكا سنتان',NULL,'دبلوم هندسة ميكانيكا سنتان',NULL),(12,1,0,120100030,'دبلوم هندسة الكترونات سنتان',NULL,1,2,6,60,NULL,'د.هـ. الكترونات سنتان',NULL,'دبلوم هندسة الكترونات سنتان',NULL),(12,1,0,120100031,'دبلوم هندسة مساحة سنتان',NULL,1,2,6,61,NULL,'د.هـ.مساحة سنتان',NULL,'دبلوم هندسة مساحة سنتان',NULL),(12,1,0,120100032,'دبلوم هندسة نسيج سنتان',NULL,1,2,6,62,NULL,'د.هـ. نسيج سنتان',NULL,'دبلوم هندسة نسيج سنتان',NULL),(12,1,0,120100033,'دبلوم هنسة تبريد وتكييف سنتان',NULL,1,2,6,63,NULL,'د.هـ.تبريد وتكييف سنتان',NULL,'دبلوم هنسة تبريد وتكييف سنتان',NULL),(12,1,0,120100034,'دبلوم هنسة سيارات سنتان',NULL,1,2,6,64,NULL,'د.هـ.سيارات سنتان',NULL,'دبلوم هنسة سيارات سنتان',NULL),(12,1,0,120100035,'دبلوم هندسة إنتاج سنتان',NULL,1,2,6,65,NULL,'د.هـ.إنتاج سنتان',NULL,'دبلوم هندسة إنتاج سنتان',NULL),(12,1,0,120100036,'دبلوم هندسة زراعية سنتان',NULL,1,2,6,66,NULL,'د.هـ. زراعية سنتان',NULL,'دبلوم هندسة زراعية سنتان',NULL),(12,1,0,120100037,'دبلوم هندسة بلاستيك سنتان',NULL,1,2,6,67,NULL,'د.هـ.بلاستيك سنتان',NULL,'دبلوم هندسة بلاستيك سنتان',NULL),(12,1,0,120100038,'دبلوم أجهزة أشعة',NULL,1,3,6,68,NULL,'د.أجهزة أشعة',NULL,'دبلوم أجهزة أشعة','The Diploma in engineering in Radiological and Medical Instrumentation'),(12,1,0,120100039,'دبلوم تأهيلي',NULL,1,2,6,69,NULL,'دبلوم تأهيلي',NULL,'دبلوم تأهيلي',NULL),(12,1,0,120100040,'دبلوم هندسة ميكانيكا',NULL,1,3,6,70,NULL,'د.هندسة ميكانيكا',NULL,'دبلوم هندسة ميكانيكا',NULL),(12,1,0,120100041,'دبلوم هندسة مدنية',NULL,1,3,6,71,NULL,'د.هندسة مدنية',NULL,'دبلوم هندسة مدنية',NULL),(12,1,0,120100042,'دبلوم هندسة بيئية',NULL,1,3,6,72,3339,'د.هندسة بيئية','1000','دبلوم الهندسة البيئية','The Diploma in Engineering (Environmental)'),(12,1,0,120100043,'دبلوم هندسة حفر ابار المياه الجوفية',NULL,1,3,6,127,3337,'د.هندسة حفر الابار','1000','الدبلوم فى هندسة حفر ابار المياه الجوفية','The Diploma in Water Wells Drilling Engineering'),(12,1,0,120100044,'دبلوم هندسة تركيب محطات وشبكات المياه',NULL,1,3,6,128,NULL,'د.هندسة محطات المياه','1000','الدبلوم فى هندسة تركيب الشبكات ومحطاة المياه','The Diploma in Installation of Water Yards And Networks Engineering'),(12,1,0,120100045,NULL,NULL,NULL,NULL,6,NULL,NULL,NULL,NULL,NULL,NULL),(12,1,0,120100047,'دبلوم هندسة المعدات الطبية',NULL,1,3,6,131,3336,NULL,'2000','دبلوم هندسة المعدات الطبية',NULL),(12,1,0,120100048,'دبلوم هندسة إستكشاف النفط',NULL,1,3,6,132,3314,NULL,'2250','دبلوم هندسة إستكشاف النفط',NULL),(12,1,0,120100049,'دبلوم هندسة نقل وتكرير النفط',NULL,1,3,6,133,3315,NULL,'2250','دبلوم هندسة نقل وتكرير النفط',NULL),(12,1,0,120100050,'دبلوم هندسة ميكانيكية - هندسة لحام',NULL,1,3,6,134,3326,NULL,'1800','دبلوم هندسة ميكانيكية - هندسة لحام',NULL),(12,2,0,120200008,'دبلوم الدراسات المصرفية',NULL,1,3,6,39,NULL,'د.الدراسات المصرفية',NULL,'الدبلوم في الدراسات المصرفية','The Diploma in Banking Studies'),(12,2,0,120200009,'دبلوم ادارة المكاتب',NULL,1,3,6,40,3347,'د. ادارة المكاتب','900','الدبلوم في ادارة المكاتب','The Diploma in Offices Management'),(12,2,0,120200010,'دبلوم المحاسبة',NULL,1,3,6,41,3348,'دبلوم المحاسبة','900','الدبلوم في المحاسبة','The Diploma in Accounting'),(12,2,0,120200011,'دبلوم ادارة الاعمال',NULL,1,3,6,42,3349,'دبلوم ادارة الاعمال','900','الدبلوم في ادارة الاعمال','The Diploma in Business Administration'),(12,2,0,120200012,'دبلوم نظم المعلومات الادارية',NULL,1,3,6,43,3351,'د. نظم معلومات ادارية','1200','الدبلوم في نظم المعلومات الادارية','The Diploma in Management Information Systems'),(12,2,0,120200013,'دبلوم الاقتصاد',NULL,1,3,6,44,3353,'دبلوم الاقتصاد','900','الدبلوم في الاقتصاد','The Diploma in Economics'),(12,2,0,120200014,'دبلوم التجارة الالكترونية',NULL,1,3,6,45,3355,'د. التجارة الالكترونية','1000','الدبلوم في التجارة الالكترونية','The Diploma in Electronic Commerce'),(12,2,0,120200015,'دبلوم التأمين',NULL,1,3,6,46,3356,'دبلوم التأمين','900','الدبلوم في التأمين','The Diploma in Insurance'),(12,2,0,120200016,'دبلوم المصارف سنتان',NULL,1,2,6,73,NULL,'د.المصارف سنتان',NULL,'دبلوم المصارف سنتان',NULL),(12,2,0,120200017,'دبلوم المحاسبة سنتان',NULL,1,2,6,74,NULL,'د. المحاسبة سنتان',NULL,'دبلوم المحاسبة سنتان',NULL),(12,2,0,120200018,'بكالريوس المحاسبة',NULL,2,4,6,75,NULL,'بكالريوس المحاسبة',NULL,'بكالريوس المحاسبة',NULL),(12,2,0,120200019,'بكالريوس المحاسبة التكميلي',NULL,2,4,6,76,NULL,'بكالريوس المحاسبة التكميلي',NULL,'بكالريوس المحاسبة التكميلي',NULL),(12,2,0,120200020,'تكميلي دبلوم المحاسبة',NULL,1,3,6,77,NULL,'تكميلي دبلوم المحاسبة',NULL,'تكميلي دبلوم المحاسبة',NULL),(12,2,0,120200021,'دبلوم البنوك و التمويل',NULL,1,3,6,121,3346,'دبلوم البنوك والتمويل','1000','الدبلوم في البنوك و التمويل','The Diploma Of Banking and Finance'),(12,2,0,120200022,'دبلوم التسويق',NULL,1,3,6,122,3354,'دبلوم التسويق','900','الدبلوم في التسويق','The Diploma Of Marketing'),(12,2,0,120200023,'دبلوم نظم المعلومات المحاسبية',NULL,1,3,6,123,3352,'د.نظم المعلومات المحاسبية','1500','الدبلوم في نظم المعلومات المحاسبية','The Diploma Of Accounting Information Systems'),(12,1,0,120300001,'دبلوم هندسة حفر ابار المياه الجوفية',NULL,1,3,6,24,NULL,'د.تكنولوجيا حفر ابار',NULL,'الدبلوم فى هندسة حفر ابار المياه الجوفية','The Diploma in Water Wells Drilling Engineering'),(12,1,0,120300002,'دبلوم هندسة تركيب محطات و شبكات المياه',NULL,1,3,6,25,3338,'د.تكنولوجيا شبكات مياه','1000','الدبلوم فى هندسة تركيب محطات و شبكات المياه','The Diploma in Installation of Water Yards And Networks Engineering'),(12,3,0,120300003,'دبلوم البيطرة والانتاج الحيوانى',NULL,1,3,6,26,NULL,'د.بيطرة وانتاج حيوانى','1000','الدبلوم في البيطرة والانتاج الحيوانى','The Diploma in Veterinay & Animal Production'),(12,3,0,120300004,'دبلوم الميكنة الزراعية',NULL,1,3,6,27,3341,'د. الميكنة الزراعية','800','الدبلوم في الميكنة الزراعية','The Diploma in Agricultural Mechanization'),(12,3,0,120300005,'دبلوم المختبرات العلمية - كيمياء',NULL,1,3,6,28,3342,'د.مختبرات علمية-كيمياء','1500','الدبلوم في المختبرات العلمية (الكيمياء)','The Diploma in Laboratory Science (Chemistry)'),(12,3,0,120300006,'دبلوم المختبرات العلمية - فيزياء',NULL,1,3,6,29,3343,'د.مختبرات علمية-فيزياء','1000','الدبلوم في المختبرات العلمية (الفيزياء)','The Diploma in Labratory Sciense (Physics)'),(12,3,0,120300007,'دبلوم تقنية المعلومات',NULL,1,3,6,30,3357,'د. تقنية المعلومات','1700','الدبلوم في تقنية المعلومات','The Diploma in Information Technology'),(12,3,0,120300008,'دبلوم الاحصاء التطبيقى',NULL,1,3,6,31,NULL,'د.الاحصاء التطبيقى','1200','الدبلوم في الاحصاء التطبيقى','The Diploma in Applied Statistcs'),(12,3,0,120300009,'دبلوم تقانة أجهزة البصريات',NULL,1,3,6,78,NULL,'د.تقانة أجهزة البصريات',NULL,'دبلوم تقانة أجهزة البصريات',NULL),(12,3,0,120300010,'دبلوم مختبرات علمية سنتان',NULL,1,2,6,79,NULL,'د.مختبرات علمية سنتان',NULL,'دبلوم مختبرات علمية سنتان',NULL),(12,3,0,120300011,'دبلوم علوم الحاسوب',NULL,1,3,6,80,NULL,'د.علوم الحاسوب',NULL,'دبلوم علوم الحاسوب',NULL),(12,3,0,120300012,'دبلوم علوم الحاسوب سنتان',NULL,1,2,6,81,NULL,'د.علوم الحاسوب سنتان',NULL,'دبلوم علوم الحاسوب سنتان',NULL),(12,3,0,120300013,'دبلوم علوم الإحصاء',NULL,1,3,6,82,NULL,'د.علوم الإحصاء',NULL,'دبلوم علوم الإحصاء','The Diploma in Applied Statistics'),(12,3,0,120300014,'دبلوم الجيولوجيا والتعدين',NULL,1,3,6,83,NULL,'د.الجيولوجيا والتعدين',NULL,'دبلوم الجيولوجيا والتعدين',NULL),(12,3,0,120300015,'دبلوم المياه الجوفية',NULL,1,3,6,84,NULL,'د.المياه الجوفية',NULL,'دبلوم المياه الجوفية',NULL),(12,3,0,120300016,'دبلوم المياه السطحية',NULL,1,3,6,85,NULL,'د.المياه السطحية',NULL,'دبلوم المياه السطحية',NULL),(12,3,0,120300017,'تكميلي دبلوم علوم حاسوب',NULL,1,3,6,86,NULL,'تكميلي دبلوم علوم حاسوب',NULL,'تكميلي دبلوم علوم حاسوب',NULL),(12,3,0,120300018,'دبلوم مختبرات علمية',NULL,1,3,6,87,NULL,'دبلوم مختبرات علمية',NULL,'دبلوم مختبرات علمية',NULL),(12,3,0,120300020,'تكميلي بكالريوس هندسة البرمجيات',NULL,2,4,6,89,NULL,'تكميلي بكالريوس هندسة البرمجيات',NULL,'تكميلي بكالريوس هندسة البرمجيات',NULL),(12,3,0,120300021,'دبلوم هندسة زراعية سنتان',NULL,1,2,6,90,NULL,'د.هندسة زراعية سنتان',NULL,'دبلوم هندسة زراعية سنتان',NULL),(12,3,0,120300022,'دبلوم علوم غابات',NULL,1,3,6,91,NULL,'دبلوم علوم غابات',NULL,'دبلوم علوم غابات',NULL),(12,3,0,120300023,'دبلوم علوم بساتين',NULL,1,3,6,92,NULL,'دبلوم علوم بساتين',NULL,'دبلوم علوم بساتين',NULL),(12,3,0,120300024,'تكميلي دبلوم إحصاء',NULL,1,3,6,93,NULL,'تكميلي دبلوم إحصاء',NULL,'تكميلي دبلوم إحصاء',NULL),(12,3,0,120300025,'تكميلي دبلوم مختبرات كيمياء',NULL,1,3,6,94,NULL,'تكميلي دبلوم مختبرات كيمياء',NULL,'تكميلي دبلوم مختبرات كيمياء',NULL),(12,3,0,120300026,'تكميلي تقنية المعلومات',NULL,1,3,6,95,NULL,'تكميلي تقنية معلومات',NULL,'تكميلي تقنية المعلومات',NULL),(12,3,0,120300030,'تكنولوجيا الاغذية',NULL,1,3,6,129,NULL,NULL,'1000','تكنولوجيا الاغذية',NULL),(12,3,0,120300031,'نظم الرى الحديث',NULL,1,3,6,130,NULL,NULL,'1000','نظم الرى الحديث',NULL),(12,4,0,120400002,'دبلوم تقانة علوم المكتبات',NULL,1,3,6,33,NULL,'د.تقانة علوم المكتبات',NULL,'الدبلوم في تقانة علوم المكتبات','The Diploma in Library Sciences & Technology'),(12,4,0,120400004,'دبلوم اللغة العربية',NULL,1,3,6,35,NULL,'دبلوم اللغة العربية',NULL,'الدبلوم في اللغة العربية',NULL),(12,4,0,120400005,'دبلوم اللغة الانجليزية',NULL,1,3,6,36,NULL,'دبلوم اللغة الانجليزية',NULL,'الدبلوم في اللغة الانجليزية','The Diploma in English Language'),(12,4,0,120400006,'دبلوم علوم الاتصال - علاقات عامة',NULL,1,3,6,37,3344,'دبلوم علاقات عامة','1000','الدبلوم في علوم الاتصال (العلاقات العامة والاعلام)','The Diploma in Communication Science (Public Relations And Press)'),(12,4,0,120400007,'دبلوم علوم الاتصال - صحافة',NULL,1,3,6,38,3345,'دبلوم صحافة','1000','الدبلوم في علوم الاتصال (الصحافة والنشر)','The Diploma in Communication Science (Journalism & Publishing)'),(12,4,0,120400008,'دبلوم علم النفس التطبيقى',NULL,1,3,6,47,3358,'د.علم نفس تطبيقى','1000','الدبلوم في علم النفس التطبيقى','The Diploma in Applied Psychology'),(12,4,0,120400009,'دبلوم الفنون الجميلة',NULL,1,3,6,48,3359,'دبلوم الفنون الجميلة','1000','الدبلوم في الفنون الجميلة والتطبيقية (الطباعة والتجليد)',NULL),(12,4,0,120400010,'دبلوم الدراسات الاسلامية',NULL,1,3,6,49,3361,'دبلوم الدراسات الاسلامية','800','الدبلوم في الدراسات الاسلامية',NULL),(12,4,0,120400011,'دبلوم رياض الاطفال',NULL,1,3,6,50,3362,'دبلوم رياض الاطفال','1000','الدبلوم في رياض الاطفال',NULL),(12,4,0,120400012,'دبلوم تنمية المرأة',NULL,1,3,6,51,NULL,'دبلوم تنمية المرأة',NULL,'الدبلوم في تنمية المرأة',NULL),(12,4,0,120400013,'دبلوم الموسيقى',NULL,1,3,6,52,3363,'دبلوم الموسيقى','2000','الدبلوم في الموسيقى',NULL),(12,4,0,120400014,'دبلوم الدراما',NULL,1,3,6,53,3364,'دبلوم الدراما','2000','الدبلوم في الدراما',NULL),(12,4,0,120400015,'دبلوم علم النفس التطبيقي سنتان',NULL,1,2,6,95,NULL,'د.علم النفس التطبيقي',NULL,'دبلوم علم النفس التطبيقي سنتان',NULL),(12,4,0,120400016,'دبلوم التصميم الإيضاحي سنتان',NULL,1,2,6,96,NULL,'د.التصميم الإيضاحي سنتان',NULL,'دبلوم التصميم الإيضاحي سنتان',NULL),(12,4,0,120400017,'دبلوم طباعة المنسوجات سنتان',NULL,1,2,6,97,NULL,'د.طباعة المنسوجات سنتان',NULL,'دبلوم طباعة المنسوجات سنتان',NULL),(12,4,0,120400018,'دبلوم الوسائط المتعددة',NULL,1,3,6,98,NULL,'دبلوم الوسائط المتعددة',NULL,'دبلوم الوسائط المتعددة',NULL),(12,4,0,120400019,'دبلوم الترجمة',NULL,1,3,6,99,NULL,'دبلوم الترجمة',NULL,'دبلوم الترجمة','The Diploma in Translation'),(12,4,0,120400020,'دبلوم العلاقات العامة والإعلام سنتان',NULL,1,2,6,100,NULL,'د.العلاقات العامةوالإعلام سنتان',NULL,'دبلوم العلاقات العامة والإعلام سنتان',NULL),(12,4,0,120400021,'دبلوم تعليم اللغة العربية للناطقين بغيرها سنتان',NULL,1,2,6,101,NULL,'د.تعليم الغة العربيةللناطقين بغيرها سنتان',NULL,'دبلوم تعليم اللغة العربية للناطقين بغيرها سنتان',NULL),(12,4,0,120400022,'دبلوم الخطوط والزخرفة العربية سنتان',NULL,1,2,6,102,NULL,'د.الخطوط والزخرفةالعربية سنتان',NULL,'دبلوم الخطوط والزخرفة العربية سنتان',NULL),(12,4,0,120400023,'دبلوم علوم تنمية المرأة سنتان',NULL,1,2,6,103,NULL,'د.علوم تنمية المرأة سنتان',NULL,'دبلوم علوم تنمية المرأة سنتان',NULL),(12,4,0,120400024,'دبلوم اللغة الفرنسية',NULL,1,3,6,104,NULL,'دبلوم اللغة الفرنسية',NULL,'الدبلوم في اللغة الفرنسية',NULL),(12,4,0,120400025,'بكالريوس اتصال جماهيري',NULL,2,4,6,105,NULL,'بكالريوس اتصال جماهيري',NULL,'بكالريوس اتصال جماهيري',NULL),(12,4,0,120400026,'تكميلي اتصال جماهيري',NULL,2,4,6,106,NULL,'تكميلي اتصال جماهيري',NULL,'تكميلي اتصال جماهيري',NULL),(12,4,0,120400027,'دبلوم العلاقات العامة والاعلام',NULL,1,3,6,107,NULL,'د.العلاقات العامة والاعلام',NULL,'دبلوم العلاقات العامة والاعلام',NULL),(12,4,0,120400028,'تكميلي دبلوم الترجمة',NULL,1,3,6,108,NULL,'تكميلي دبلوم الترجمة',NULL,'تكميلي دبلوم الترجمة',NULL),(12,4,0,120400029,'دبلوم الترجمة سنتان',NULL,1,2,6,109,NULL,'دبلوم الترجمة سنتان',NULL,'دبلوم الترجمة سنتان',NULL),(12,4,0,120400030,'دبلوم تربية رياضية سنتان',NULL,1,2,6,110,NULL,'دبلوم رياضية سنتان',NULL,'دبلوم تربية رياضية سنتان',NULL),(12,4,0,120400031,'تكميلي دبلوم إعلام',NULL,1,3,6,111,NULL,'تكميلي دبلوم إعلام',NULL,'تكميلي دبلوم إعلام',NULL),(12,4,0,120400032,'دبلوم فنون - الخطوط والزخرفة الإسلامية',NULL,1,3,6,112,NULL,'د.فنون-خط عربي',NULL,'الدبلوم في الفنون الجميلة والتطبيقية (الخط العربي)','The Diploma of Fine And Applied Art (Arabic Calligraphy)'),(12,4,0,120400033,'دبلوم فنون طباعة منسوجات',NULL,1,3,6,113,NULL,'د.طباعة منسوجات',NULL,'الدبلوم في الفنون الجميلة والتطبيقية(طباعة المنسوجات)','The Diploma of Fine And Applied Art (Textile Design & Printing)'),(12,4,0,120400034,'دبلوم فنون - طباعة وتجليد',NULL,1,3,6,114,NULL,'د.فنون طباعة وتجليد',NULL,'الدبلوم في الفنون الجميلة والتطبيقية (الطباعة و التجليد)','The Diploma in Printing & Dinding Section'),(12,4,0,120400035,'تكميلي دبلوم علوم اتصال',NULL,1,3,6,115,NULL,'د.تكميلي علوم اتصال',NULL,'تكميلي دبلوم علوم اتصال',NULL),(12,4,0,120400036,'تكميلي دبلوم تنمية المرأة',NULL,1,3,6,116,NULL,'د.تكميلي تنمية المرأة',NULL,'تكميلي دبلوم تنمية المرأة',NULL),(12,4,0,120400037,'دبلوم الموسيقى - الات موسيقية',NULL,1,3,6,117,NULL,'د. الموسيقى - الات موسيقية',NULL,'دبلوم الموسيقى - الات موسيقية',NULL),(12,4,0,120400038,'دبلوم الموسيقى - صوت',NULL,1,3,6,118,NULL,'د.الموسيقى - صوت',NULL,'دبلوم الموسيقى - صوت',NULL),(12,4,0,120400039,'دبلوم الدراما - تمثيل وإخراج',NULL,1,3,6,119,NULL,'د.الدراما - تمثيل وإخراج',NULL,'الدبلوم في الدراما (التمثيل و الإخراج)','The Diploma in Drama (Directing and Acting)'),(12,4,0,120400040,'دبلوم الدراما - نقد ودراسات درامية',NULL,1,3,6,120,NULL,'د.الدراما - نقد ودراسات درامية',NULL,'الدبلوم في الدراما (النقد و الدراسات الدرامية)',NULL),(12,4,0,120400041,'دبلوم التربية البدنية والرياضية',NULL,1,3,6,124,3365,'د.التربية البدنية والرياضية','1000','الدبلوم في التربية البدنية والرياضية','The Diploma Of Physical Education and Sport'),(12,4,0,120400042,'دبلوم الخدمة الإجتماعية والعمل الطوعي',NULL,1,3,6,125,3366,'د.الخدمة الإجتماعية والعمل الطوعي','1000','الدبلوم في الخدمة الإجتماعية والعمل الطوعي','The Diploma Of Social Work and Voluntary Work'),(12,4,0,120400043,'دبلوم فنون - تصميم إيضاحي',NULL,1,3,6,126,NULL,'د.هندسة التصميم الإيضاحي',NULL,'الدبلوم في الفنون الجميلة والتطبيقية (التصميم الإيضاحي)','The Diploma of Fine And Applied Art (Graphic Design)'),(12,50,0,125000010,'دبلومات اضافية القديمة 3+3 مدنية',NULL,1,3,6,NULL,NULL,'دبلومات اضافية القديمة 3+3 مدنية',NULL,'دبلومات اضافية القديمة 3+3 مدنية',NULL),(12,50,0,125000011,'دبلومات اضافية القديمة سنتين كهرباء',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين كهرباء',NULL,'دبلومات اضافية القديمة سنتين كهرباء',NULL),(12,50,0,125000012,'دبلومات اضافية القديمة سنتين هندسة بيئية',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين هندسة بيئية',NULL,'دبلومات اضافية القديمة سنتين هندسة بيئية',NULL),(12,50,0,125000013,'دبلومات اضافية القديمة سنتين ميكانيكا',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين ميكانيكا',NULL,'دبلومات اضافية القديمة سنتين ميكانيكا',NULL),(12,50,0,125000014,'دبلومات اضافية القديمة سنتين هندسة زراعية',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين هندسة زراعية',NULL,'دبلومات اضافية القديمة سنتين هندسة زراعية',NULL),(12,50,0,125000015,'دبلومات اضافية القديمة سنتين مدنية',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين مدنية',NULL,'دبلومات اضافية القديمة سنتين مدنية',NULL),(12,50,0,125000016,'دبلومات اضافية القديمة سنتين الكترونيات',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين الكترونيات',NULL,'دبلومات اضافية القديمة سنتين الكترونيات',NULL),(12,50,0,125000017,'دبلومات اضافية القديمة سنتين معمار',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة سنتين معمار',NULL,'دبلومات اضافية القديمة سنتين معمار',NULL),(12,50,0,125000018,'دبلومات اضافية القديمة بصريات وليزر',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة بصريات وليزر',NULL,'دبلومات اضافية القديمة بصريات وليزر',NULL),(12,50,0,125000019,'دبلومات اضافية القديمة علوم حاسوب',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة علوم حاسوب',NULL,'دبلومات اضافية القديمة علوم حاسوب',NULL),(12,50,0,125000020,'دبلومات اضافية القديمة تربية رياضية',NULL,1,2,6,NULL,NULL,'دبلومات اضافية القديمة تربية رياضية',NULL,'دبلومات اضافية القديمة تربية رياضية',NULL),(12,50,0,125000021,'دبلومات اضافية القديمة لغة عربية لغير الناطقين',NULL,1,3,6,NULL,NULL,'دبلومات اضافية القديمة لغة عربية لغير الناطقين',NULL,'دبلومات اضافية القديمة لغة عربية لغير الناطقين',NULL),(12,50,0,125000022,'دبلومات اضافية القديمة مختبرات علمية',NULL,1,3,6,NULL,NULL,'دبلومات اضافية القديمة مختبرات علمية',NULL,'دبلومات اضافية القديمة مختبرات علمية',NULL),(12,50,0,125000023,'دبلومات اضافية القديمة طباعة وتجليد',NULL,1,3,6,NULL,NULL,'دبلومات اضافية القديمة طباعة وتجليد',NULL,'دبلومات اضافية القديمة طباعة وتجليد',NULL),(12,50,NULL,125000024,'تكميلى دبلوم بصريات وليزر',NULL,NULL,NULL,6,NULL,NULL,'تكميلى دبلوم بصريات وليزر',NULL,'تكميلى دبلوم بصريات وليزر',NULL),(13,1,0,130100001,'عام',NULL,2,4,10,1,NULL,'القسم العام',NULL,'عام',NULL),(13,2,0,130200001,'مياه جوفية وحفر',NULL,2,4,10,2,NULL,'مياه جوفية وحفر',NULL,'مياه جوفية وحفر',NULL),(13,3,0,130300001,'مياه سطحية وإمداد مياه',NULL,2,4,10,3,NULL,'مياه سطحية وإمداد مياه',NULL,'مياه سطحية وإمداد مياه',NULL),(13,4,0,130400001,'مياه سطحية وحفر',NULL,2,4,10,4,NULL,'مياه سطحية وحفر',NULL,'مياه سطحية وحفر',NULL),(13,5,0,130500001,'هندسة موارد المياه',NULL,2,4,10,5,1328,'هندسة موارد المياه',NULL,'هندسة موارد المياه',NULL),(13,7,0,130700001,'بكالريوس الهندسة البيئية',NULL,2,5,10,6,1329,'هندسة بيئية',NULL,'بكالريوس الهندسة البيئية',NULL),(13,50,0,135000010,'تخصصات تكنولوجيا المياه القديمة جوفية',NULL,1,4,10,NULL,NULL,'تخصصات تكنولوجيا المياه القديمة جوفية',NULL,'تخصصات تكنولوجيا المياه القديمة جوفية',NULL),(13,50,0,135000011,'تخصصات تكنولوجيا المياه القديمة السطحية والامداد',NULL,1,4,10,NULL,NULL,'تخصصات تكنولوجيا المياه القديمة السطحية والامداد',NULL,'تخصصات تكنولوجيا المياه القديمة السطحية والامداد',NULL),(13,50,0,135000012,'تخصصات تكنولوجيا المياه القديمة ابحاث',NULL,1,4,10,NULL,NULL,'تخصصات تكنولوجيا المياه القديمة ابحاث',NULL,'تخصصات تكنولوجيا المياه القديمة ابحاث',NULL),(14,1,0,140100001,'بكالريوس الموسيقى',NULL,2,4,10,1,1384,'الموسيقا',NULL,'بكالريوس الموسيقى','(Bachelor) of MUSIC'),(14,2,0,140200001,'بكالريوس الدراما',NULL,2,4,8,2,1385,'الدراما',NULL,'بكالريوس الدراما','the degree of (Bachelor) in DRAMA'),(14,2,1,140201001,'بكلاريوس الدراما - تمثيل',NULL,NULL,NULL,8,3,NULL,'الدراما-التمثيل',NULL,'بكلاريوس الدراما ( تمثيل)','(Bachelor) in DRAMA Specialization (Acting)'),(14,2,1,140201002,'بكلاريوس الدراما - اخراج',NULL,NULL,NULL,8,4,NULL,'الدراما-إخراج',NULL,'بكلاريوس الدراما - اخراج','(Bachelor) in DRAMA Specialization(Directing)'),(14,2,1,140201003,'بكلاريوس الدراما - نقدودراسات درامية',NULL,NULL,NULL,8,5,NULL,'الدراما - نقد ودراسات درامية',NULL,'بكلاريوس الدراما ( نقد ودراسات درامية)','the degree of (Bachelor) of DRAMA in (Criticism & Drama studies)'),(14,2,1,140201004,'بكلاريوس الدراما - فنيات مسرح',NULL,NULL,NULL,8,6,NULL,'الدراما - فنيات مسرح',NULL,'بكلاريوس الدراما ( فنيات مسرح )','(Bachelor) of Drama in (Theatre Technics)'),(14,2,1,140201005,'بكلاريوس الدراما - راديووتلفزيون',NULL,NULL,NULL,8,7,NULL,'الدراما - راديووتلفزيون',NULL,'بكلاريوس الدراما - راديووتلفزيون','(Bachelor) of DRAMA in (Radio & Television)'),(15,1,0,150100001,'بكالريوس التربية الرياضية',NULL,2,4,8,1,NULL,'التربية الرياضية',NULL,'بكالوريوس التربية البدنية والرياضة','College Of Physical Education & Sport'),(15,2,0,150200001,'القسم العام',NULL,2,4,8,2,1386,'القسم العام',NULL,'القسم العام',NULL),(15,3,0,150300001,'بكالريوس التربية البدنية المدرسية',NULL,2,4,8,6,NULL,'التربية البدنية المدرسية',NULL,'درجة بكالوريوس التربية البدنية والرياضة في التربية البدنية المدرسية','The degree of Bachelor of Physical Education and Sport in School Physical Education'),(15,4,0,150400001,'بكالريوس التدريب الرياضي',NULL,2,4,8,3,NULL,'التدريب الرياضي',NULL,'درجة بكالوريوس التربية البدنية والرياضة في التدريب الرياضي','The degree of Bachelor of Physical Education and Sport in Sport Coaching'),(15,5,0,150500001,'بكالريوس الإدارة الرياضية',NULL,2,4,8,4,NULL,'الإدارة الرياضية',NULL,'درجة بكالوريوس التربية البدنية والرياضة في الإدارة الرياضية','The degree of Bachelor of Physical Education and Sport in Sport Administration'),(15,6,0,150600001,'بكالريوس الإعلام الرياضي',NULL,2,4,8,5,NULL,'الإعلام الرياضي',NULL,'درجة بكالوريوس التربية البدنية والرياضة في الإعلام الرياضي','The degree of Bachelor of Physical Education and Sport in Sport Media'),(16,1,0,160100001,'بكالريوس اللغة العربية',NULL,2,4,8,1,NULL,'اللغة العربية',NULL,'درجة بكالريوس الآداب في اللغة العربية','the degree of Bachelor of Arts in Arabic Language'),(16,1,0,160100002,'بكالريوس اللغة العربية (موازي)',NULL,2,4,8,1,1387,NULL,NULL,NULL,NULL),(16,2,0,160200001,'بكالريوس اللغة الفرنسية',NULL,2,4,8,2,NULL,'اللغة الفرنسية',NULL,'درجة بكالريوس الآداب في اللغة الفرنسية','the degree of Bachelor of Arts in French Language'),(16,2,0,160200002,'بكالريوس اللغة الفرنسية (موازي)',NULL,2,4,8,2,1388,NULL,NULL,NULL,NULL),(16,3,0,160300001,'بكالريوس اللغة الانجليزية',NULL,2,4,8,3,NULL,'اللغة الانجليزية',NULL,'درجة بكالريوس الآداب في اللغة الانجليزية','the degree of Bachelor of Arts in English Language'),(16,3,0,160300002,'بكالريوس اللغة الانجليزية (موازي)',NULL,2,4,8,3,1389,NULL,NULL,NULL,NULL),(17,1,0,170100001,'بكالريوس المختبرات الطبية',NULL,2,4,8,1,1335,'المختبرات الطبية',NULL,'درجة البكالوريوس فى علوم المختبرات الطبية','The degree of Bachelor of Science in Medical Laboratory Science'),(17,1,0,170100002,'بكالريوس مختبرات كيمياء',NULL,2,4,8,2,NULL,NULL,NULL,'بكالريوس مختبرات كيمياء',NULL),(17,1,0,170100003,'بكالريوس مختبرات فيزياء',NULL,2,4,8,3,NULL,NULL,NULL,'بكالريوس مختبرات فيزياء',NULL),(17,2,0,170200001,'الاحياء الدقيقة',NULL,2,4,8,4,NULL,NULL,NULL,'درجة البكالوريوس فى علوم المختبرات الطبية (علم الأحياء الدقيقة)','The degree of Bachelor of Science in Medical Laboratory (Microbiology)'),(17,3,0,170300001,'الكيمياء السريريه',NULL,2,4,8,4,NULL,NULL,NULL,'درجة البكالوريوس فى علوم المختبرات الطبية (الكيمياء السريرية)','The degree of Bechelor of Science in Medical Laboratory (Clinical Chemistry)'),(17,4,0,170400001,'علم الدم ومبحث المناعة',NULL,2,4,8,4,NULL,NULL,NULL,'درجة البكالوريوس فى علوم المختبرات الطبية (علم الدم)','The degree of Bachelor of Science in Medical Laboratory Science (Hematology)'),(17,5,0,170500001,'امراض الانسجة والخلايا',NULL,2,4,8,4,NULL,NULL,NULL,'درجة البكالوريوس فى علوم المختبرات الطبية (علم امراض الأنسجة والخلايا)','The degree of Bachelor of Science in Medical Laboratory (Histopathology and Cytology)'),(17,6,0,170600001,'الطفيليات والحشرات الطبية',NULL,2,4,8,4,NULL,NULL,NULL,'درجة البكالوريوس فى علوم المختبرات الطبية (علم الطفيليات والحشرات الطبية)','The degree of Bachelor of Science in Meadical Laboratory Science (Parasitology and Medical Entomology)'),(18,1,0,180100001,'الانتاج الحيواني',NULL,2,4,8,1,1377,'الانتاج الحيواني',NULL,'الانتاج الحيواني',NULL),(18,2,0,180200001,'علوم وتكنولوجيا الدواجن',NULL,3,4,8,2,NULL,NULL,NULL,'علوم وتكنولوجيا الدواجن',NULL),(18,3,0,180300001,'علوم وتكنولوجيا الالبان',NULL,3,4,8,1,NULL,NULL,NULL,'علوم وتكنولوجيا الالبان',NULL),(18,4,0,180400001,'علوم الاسماك والحياة البرية',NULL,2,4,8,1,1378,'علوم الاسماك والحياة البرية',NULL,'علوم الاسماك والحياة البرية',NULL),(18,5,0,180500001,'علوم وتكنولوجيا اللحوم',NULL,2,4,8,1,NULL,NULL,NULL,'علوم وتكنولوجيا اللحوم',NULL),(20,1,0,200100001,'بكالريوس علوم الحاسوب',NULL,3,4,8,1,1331,'علوم الحاسوب',NULL,'درجة البكالريوس (شرف) في علوم الحاسوب','the Degree of Bachelor (HONOURS) of COMPUTER SCIENCE'),(20,2,0,200200001,'بكالريوس حاسوب ونظم المعلومات',NULL,3,4,8,2,NULL,'نظم المعلومات',NULL,'درجة البكالريوس (شرف) في الحاسوب ونظم المعلومات','the Degree of Bachelor (HONOURS) of COMPUTER & INFORMATION SYSTEMS'),(20,2,0,200200002,'بكالريوس حاسوب ونظم المعلومات (موازي)',NULL,3,4,8,2,1332,NULL,NULL,NULL,NULL),(20,3,0,200300001,'بكالريوس نظم الحاسوب والشبكات',NULL,3,4,8,3,1333,'نظم الحاسوب والشبكات',NULL,'درجة البكالريوس (شرف) في نظم الحاسوب والشبكات','the Degree of Bachelor (HONOURS) of COMPUTER SYSTEMS & NETWORKS'),(20,4,0,200400001,'بكالريوس تكميلي هندسة البرمجيات',NULL,2,4,8,1,NULL,'تكميلي هندسة البرمجيات',NULL,'درجة البكالريوس في تكميلي هندسة البرمجيات',NULL),(20,4,0,200400002,'بكالريوس هندسة البرمجيات',NULL,2,4,8,4,1334,'هندسة البرمجيات',NULL,'درجة البكالريوس (شرف) في هندسة البرمجيات','the Degree of Bachelor (HONOURS) of SOFTWARE ENGINEERING'),(23,1,0,230100001,'بكالريوس علوم الاتصال',NULL,2,4,8,1,NULL,'علوم الاتصال',NULL,'بكالوريوس علوم الاتصال في العلاقات العامة',NULL),(23,1,0,230100002,'بكالريوس علوم الاتصال (موازي)',NULL,2,4,8,1,1391,NULL,NULL,NULL,NULL),(23,2,0,230200001,'الوسائط المتعددة',NULL,2,4,8,2,NULL,'الوسائط المتعددة',NULL,'بكالوريس علوم الاتصال في الوسائط المتعددة','The degree of Bachelor of Communication Science in Multimedia'),(23,3,0,230300001,'العلاقات العامة والإعلان',NULL,2,4,8,3,NULL,'العلاقات العامة والإعلان',NULL,'بكالوريوس علوم الاتصال في العلاقات العامة والإعلان','The degree of Bachelor of Communication Science in Public Relations & Advertising'),(23,4,0,230400001,'الإذاعة(راديو وتلفزيون)',NULL,2,4,8,4,NULL,'الإذاعة(راديو وتلفزيون)',NULL,'بكالوريوس علوم الاتصال في الإذاعة ( راديو وتلفزيون)','The degree of Bachelor of Communication science in the Broadcasting ( radio& television)'),(23,5,0,230500001,'التصوير والسينما',NULL,2,4,8,5,NULL,'التصوير والسينما',NULL,'بكالوريوس علوم الاتصال في التصوير والسينما','The degree of Bacheior of Communication Science in photography & Cinema'),(23,6,0,230600001,'الصحافة والنشر',NULL,2,4,8,6,NULL,'الصحافة والنشر',NULL,'بكالوريوس علوم الاتصال في الصحافة والنشر','The degree of Bachelor of Communication Science in Journalism & Publishing'),(25,1,0,250100001,'بكالريوس المحاسبة',NULL,2,4,8,1,1343,'بكالريوس المحاسبة',NULL,'بكالريوس المحاسبة',NULL),(NULL,1,0,250100002,'بكالريوس إدارةالاعمال',NULL,2,4,8,2,1346,'بكالريوس إدارةالاعمال',NULL,'بكالريوس إدارةالاعمال',NULL),(25,1,0,250100003,'بكالريوس نظم المعلومات الإدارية',NULL,2,4,8,3,1348,'نظم معلومات إدارية',NULL,'بكالريوس نظم المعلومات الإدارية',NULL),(25,1,0,250100004,'بكالريوس البنوك والتمويل',NULL,2,4,8,4,1345,'بكالريوس البنوك والتمويل',NULL,'بكالريوس البنوك والتمويل',NULL),(25,1,0,250100005,'بكالريوس الإقتصاد',NULL,2,4,8,5,1347,'بكالريوس الإقتصاد',NULL,'بكالريوس الإقتصاد',NULL),(25,1,0,250100006,'بكالريوس السكرتارية',NULL,2,4,8,6,NULL,'بكالريوس السكرتارية',NULL,'بكالريوس السكرتارية',NULL),(25,1,0,250100007,'بكالريوس التربية لغة انجليزية',NULL,2,4,8,10,1358,'بكالريوس تربية لغة انجليزية',NULL,'بكالريوس التربية لغة انجليزية',NULL),(25,1,0,250100008,'بكالريوس التربية علم نفس',NULL,2,4,8,11,1361,'بكالريوس التربية علم نفس',NULL,'بكالريوس التربية علم نفس',NULL),(25,1,0,250100009,'بكالريوس التربية تقنى',NULL,2,4,8,12,NULL,'بكالريوس التربية تقنى',NULL,'بكالريوس التربية تقنى',NULL),(25,1,0,250100010,'بكلاريوس علوم الاتصال',NULL,2,4,8,13,1391,'بكلاريوس علوم الاتصال',NULL,'بكلاريوس علوم الاتصال',NULL),(25,1,0,250100011,'بكلاريوس اللغة العربية',NULL,2,4,8,14,1387,NULL,NULL,'بكلاريوس اللغة العربية',NULL),(25,1,0,250100012,'الموسيقي والدراما - الدراما',NULL,2,4,8,15,1385,NULL,NULL,NULL,NULL),(25,1,0,250100013,'بكالريوس التكاليف والمحاسبة الإدارية',NULL,2,4,8,16,1344,NULL,NULL,NULL,NULL),(25,1,0,250100014,'بكالريوس اللغة الإنجليزية',NULL,2,4,8,17,1389,NULL,NULL,NULL,NULL),(32,1,0,320100001,'بكالريوس هندسة النفط',NULL,2,5,10,1,1325,'هندسة النفط',NULL,'بكالريوس هندسة النفط',NULL),(32,2,0,320200001,'بكالريوس هندسة الاستكشاف',NULL,2,5,10,2,1326,'هندسة الاستكشاف',NULL,'بكالريوس هندسة الاستكشاف',NULL),(32,3,0,320300001,'بكالريوس هندسة النقل والتكرير',NULL,2,5,10,3,1327,'هندسة النقل والتكرير',NULL,'بكالريوس هندسة النقل والتكرير',NULL),(36,1,0,360100001,'بكلاريوس هندسة العمارة والتخطيط',NULL,3,5,10,1,1324,NULL,NULL,'بكلاريوس هندسة العمارة والتخطيط',NULL);

/*Table structure for table `recommendations_health` */

DROP TABLE IF EXISTS `recommendations_health`;

CREATE TABLE `recommendations_health` (
  `Serial` mediumint(9) NOT NULL auto_increment,
  `Student_ID` double default NULL,
  `No_Supervisor` int(50) default NULL,
  `History` datetime default NULL,
  `Recommendation` longtext,
  PRIMARY KEY  (`Serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `recommendations_health` */

/*Table structure for table `reduction_fees` */

DROP TABLE IF EXISTS `reduction_fees`;

CREATE TABLE `reduction_fees` (
  `id` int(5) NOT NULL auto_increment,
  `state` varchar(150) default NULL,
  `Reduction` double default NULL,
  `Required` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `reduction_fees` */

insert  into `reduction_fees`(`id`,`state`,`Reduction`,`Required`) values (2,'الوفاة',25,'إعلام شرعي'),(3,'حفظة القرآن الكريم',100,'شهادة من معهد الدراسات الإسلامية بجامعة السودان'),(4,'المعاش',20,'شهادة المعاش'),(5,'الاشقاء',25,'الايصالات المالية + الجنسيات'),(6,'المعاق',25,'شهادة اتحاد المعاقين'),(7,'ابناء العاملين بالجامعة',50,'شهادة عمل من شؤون العاملين'),(9,'المجاهدين',50,'شهادة عمليات'),(10,'ابناء وزوجات الشهداء',50,'خطاب منظمة الشهيد'),(11,'الفقراء',15,'خطاب من اللجنة الشعبية + شهادات الاطفال بالمدارس'),(12,'ابناء وزوجات الشهداء',50,'خطاب منظمة الشهيد');

/*Table structure for table `schedule_activities` */

DROP TABLE IF EXISTS `schedule_activities`;

CREATE TABLE `schedule_activities` (
  `Form_No` double default NULL,
  `Student_ID` double default NULL,
  `COLNO` double default NULL,
  `DEPNO` double default NULL,
  `Conservatism` varchar(50) default NULL,
  `City` varchar(50) default NULL,
  `Neighborhood` varchar(50) default NULL,
  `Box` varchar(50) default NULL,
  `House_no` varchar(50) default NULL,
  `nearest_person` varchar(50) default NULL,
  `career` varchar(50) default NULL,
  `Title` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `Accomodation` varchar(50) default NULL,
  `Name_Accomodation` varchar(50) default NULL,
  `Cases_limitation` varchar(50) default NULL,
  `name_of_the` varchar(50) default NULL,
  `Interests` varchar(50) default NULL,
  `Competitions` varchar(50) default NULL,
  `Work` varchar(50) default NULL,
  `National_Service` varchar(50) default NULL,
  `History` datetime default NULL,
  `No_entrance` int(30) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `schedule_activities` */

/*Table structure for table `sources_family` */

DROP TABLE IF EXISTS `sources_family`;

CREATE TABLE `sources_family` (
  `serial` int(30) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `sources_family` */

insert  into `sources_family`(`serial`,`name`) values (1,'المعاش'),(2,'الاقارب'),(3,'ديوان الزكاة'),(4,'اخرى');

/*Table structure for table `sub_menu` */

DROP TABLE IF EXISTS `sub_menu`;

CREATE TABLE `sub_menu` (
  `smid` int(4) NOT NULL,
  `mmid` int(4) NOT NULL,
  `title` varchar(200) collate utf8_unicode_ci NOT NULL,
  `url` varchar(500) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`smid`,`mmid`),
  KEY `mmid` (`mmid`),
  CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`mmid`) REFERENCES `main_menu` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sub_menu` */

insert  into `sub_menu`(`smid`,`mmid`,`title`,`url`) values (1,1,'الطلبات الجديدة','nw_app.php'),(1,2,'تقرير الطلبات الجديدة','rep_interface.php?fl=1'),(1,3,'اضافة مستخدم جديد','add_user.php'),(1,4,'اعدادات الرسائل القصيرة و البريد الالكتروني','esms_set.php'),(2,1,'الطلبات المقبولة','accepted_apps.php'),(2,2,'تقارير الطلبات المقبولة','rep_interface.php?fl=2'),(2,3,'اضافة صلاحيات لمجموعة','change_per.php'),(3,1,'الطلبات المرفوضة','rejected_apps.php'),(3,2,'تقارير الطلبات المرفوضة','rep_interface.php?fl=3'),(3,3,'تغيير كلمة المرور','12'),(4,1,'كل الطلبات','يي'),(4,2,'تقرير احصائي لطلبات التجسير','2'),(5,2,'تقرير احصائي لطلبات البكالريوس','3'),(6,2,'احصائيات التقديم حسب النوع','3'),(7,2,'احصائيات التقديم حسب الحالة','5');

/*Table structure for table `type_acceptance` */

DROP TABLE IF EXISTS `type_acceptance`;

CREATE TABLE `type_acceptance` (
  `serial` int(30) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `type_acceptance` */

insert  into `type_acceptance`(`serial`,`name`) values (1,'عام'),(2,'خاص');

/*Table structure for table `type_certificate` */

DROP TABLE IF EXISTS `type_certificate`;

CREATE TABLE `type_certificate` (
  `serial` int(30) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `type_certificate` */

insert  into `type_certificate`(`serial`,`name`) values (1,'سودانية'),(2,'عربية'),(3,'اجنبية');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `serial` bigint(20) NOT NULL auto_increment,
  `fullname` varchar(40) collate utf8_unicode_ci NOT NULL,
  `userid` varchar(45) collate utf8_unicode_ci NOT NULL,
  `password` varchar(300) collate utf8_unicode_ci NOT NULL,
  `tel` varchar(15) collate utf8_unicode_ci default NULL,
  `email` varchar(100) collate utf8_unicode_ci default NULL,
  `status` int(4) NOT NULL default '0',
  `groupid` int(4) default NULL,
  `dateof` date NOT NULL,
  PRIMARY KEY  (`serial`),
  UNIQUE KEY `userid` (`userid`),
  KEY `group` (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`serial`,`fullname`,`userid`,`password`,`tel`,`email`,`status`,`groupid`,`dateof`) values (1,'sara','sara','d41d8cd98f00b204e9800998ecf8427e','0922083029','sarah22nugdallah@hotmail.com',1,2,'2013-12-05'),(2,'سارة','سمر','d41d8cd98f00b204e9800998ecf8427e','0922083024','sarah22nugdallah@hotmail.com',2,0,'2013-12-02');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

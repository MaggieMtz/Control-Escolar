/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - control
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`control` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `control`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(5) NOT NULL,
  `id_grupo` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

insert  into `alumno_grupo`(`id`,`id_alumno`,`id_grupo`) values (44,2,2);

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreGrupo` varchar(100) DEFAULT NULL,
  `avatarGrupo` varchar(100) DEFAULT NULL,
  `ordenGrupo` varchar(100) DEFAULT NULL,
  `estatusGrupo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`idGrupo`,`nombreGrupo`,`avatarGrupo`,`ordenGrupo`,`estatusGrupo`) values (1,'TIC-1',NULL,'1','si'),(2,'TIC-2',NULL,NULL,NULL),(3,'TIC-3','1',NULL,NULL),(4,'TIC-4',NULL,NULL,NULL);

/*Table structure for table `grupo_asignado` */

DROP TABLE IF EXISTS `grupo_asignado`;

CREATE TABLE `grupo_asignado` (
  `idAsignacionAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupoAlumno` varchar(11) DEFAULT NULL,
  `idAsignadoAlumno` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idAsignacionAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

/*Data for the table `grupo_asignado` */

insert  into `grupo_asignado`(`idAsignacionAlumno`,`idGrupoAlumno`,`idAsignadoAlumno`) values (89,'1','11'),(92,'2','9'),(94,'4','8'),(95,'1','10');

/*Table structure for table `maestro` */

DROP TABLE IF EXISTS `maestro`;

CREATE TABLE `maestro` (
  `idMaestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMaestro` varchar(100) DEFAULT NULL,
  `apellidoPaternoMaestro` varchar(100) DEFAULT NULL,
  `apellidoMaternoMaestro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idMaestro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `maestro` */

insert  into `maestro`(`idMaestro`,`nombreMaestro`,`apellidoPaternoMaestro`,`apellidoMaternoMaestro`) values (1,'Jose','Lopez','Ramirez'),(2,'Jorge','Dominguez','Martinez'),(3,'Carlos','Orozco','Nieto');

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMateria` varchar(100) DEFAULT NULL,
  `avatarMateria` varchar(100) DEFAULT NULL,
  `ordenMateria` varchar(100) DEFAULT NULL,
  `estatusMateria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`idMateria`,`nombreMateria`,`avatarMateria`,`ordenMateria`,`estatusMateria`) values (1,'Español',NULL,NULL,NULL),(2,'Matematicas',NULL,NULL,NULL),(3,'Formacion',NULL,NULL,NULL);

/*Table structure for table `materia_asignada` */

DROP TABLE IF EXISTS `materia_asignada`;

CREATE TABLE `materia_asignada` (
  `idMateriaAsignada` int(11) NOT NULL AUTO_INCREMENT,
  `idMateria` int(11) DEFAULT NULL,
  `idMaestro` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMateriaAsignada`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `materia_asignada` */

insert  into `materia_asignada`(`idMateriaAsignada`,`idMateria`,`idMaestro`) values (18,3,1),(23,3,2);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `numero_exterior` int(10) DEFAULT NULL,
  `numero_interior` int(10) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cp` int(10) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`apellido_paterno`,`apellido_materno`,`telefono`,`calle`,`numero_exterior`,`numero_interior`,`colonia`,`municipio`,`estado`,`cp`,`correo`,`usuario`,`contrasena`,`nivel`,`estatus`) values (1,'Margarita','Martínez','Beltrán',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'maggie','1234','1','1'),(2,'Damián','Delgadillo','Martínez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dami','1234','1','2'),(4,'Okory','Campos','Juarez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'nose','123','2','1'),(6,'Rosas','Gomez','Flores',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(7,'Julio','Campos','Adios',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(8,'carlos','Martinez','Beltran',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(9,'Diana','Gomez Lopez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(11,'Arantza','Lopez','Garcia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

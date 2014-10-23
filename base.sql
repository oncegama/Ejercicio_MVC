/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - exam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`exam` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `exam`;

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(300) DEFAULT NULL,
  `r1` varchar(100) DEFAULT NULL,
  `r2` varchar(100) DEFAULT NULL,
  `r3` varchar(100) DEFAULT NULL,
  `rb` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`idp`,`pregunta`,`r1`,`r2`,`r3`,`rb`) values (1,'¿Cuanto es 40 * 50?','9540','2000','2200','r2'),(2,'¿Cual es el planeta más grande del sistema solar?','Jupiter','Urano','Saturno','r1'),(3,'¿Qué porcentaje de agua tiene el cuerpo humano?','80%','75%','68%','r1'),(4,'¿Cuál es la capital de Peru?','Buenos Aires','Lima','Washington','r2'),(5,'¿Cuál es la fórmula química del agua?','HO2','HO','H2O','r3'),(6,'¿A cuanto equivale un kilolitro?','1000 litros','100 litros','10000 litros','r1'),(7,'¿Cuándo es el día de la bandera?','14 de Febrero','21 de Noviembre','24 de Febrero','r3'),(8,'¿Fecha en que se conmemora la Revolución Mexicana?','2 de Noviembre','21 de Noviembre','15 de Septiembre','r2'),(9,'¿Cuales son los colores primarios?','Azul, Rojo, Amarillo','Amarillo, Verde, Naranja','Rojo, Azul, Morado','r1'),(10,'¿Cuál de las siguientes pinturas es de Vincent van Gogh?','La Noche Estrellada','El grito','La Monalisa','r1'),(11,'¿Cuantos elementos hay en 1 docena?','2','20','12','r3'),(12,'¿A que corriente artistica pertenece Andy Warjol?','Arte Pop','Futurismo','Cubismo','r1'),(13,'¿Qué tipo de teclado es utilizado en México?','3*4','JHDNAQ','QWERTY','r3'),(14,'¿Cuales son los animales que comen carne y vegetales?','omnivoros','mamiferos','viviparos','r1'),(15,'¿Cuantas elecciones presidenciales ha perdido Andres Manuel Lopez Obrador?','4','6','2','r3'),(16,'¿Cuál de las siguientes opciones no es un tipo de sangre?','O+','AV-','A+','r2'),(17,'¿Cuál es la fórmula del interés compuesto?','F=P(1+i)','F=P(1+i)^n-1','F=P(1+i)^n','r2'),(18,'¿A cuál de los siguientes mounstruos mitológicos le crece una cabeza extra al cortarle una?','Medusa','Hidra','Minotauro','r2'),(19,'¿Cuál de los siguientes payasos es una caricatura?','Broso','Cepillin','Krusty','r3'),(20,'¿Cuál flor es de temporada de invierno?','Cempasúchil','Noche Buena','Alcatraz','r2');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `calif` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nombre`,`app`,`apm`,`correo`,`usuario`,`pass`,`estatus`,`calif`) values (1,'David','López','Gama','dav@hotmail.com','gama03','12345',1,7);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

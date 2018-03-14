DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;

CREATE TABLE usuario (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(128) NOT NULL,
  nombre VARCHAR(128) NOT NULL
);

CREATE TABLE fabricante (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE producto (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  producto VARCHAR(100) NOT NULL,
  precio DOUBLE NOT NULL,
  codigo_fabricante INT UNSIGNED NOT NULL,
  imagen VARCHAR(256) NOT NULL,
  descripcion VARCHAR(512) NOT NULL,
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO usuario VALUES (1, 'usuario@usuario.es', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario');
INSERT INTO usuario VALUES (2, 'leopoldo@leopoldo.es', '1bd7c70448ad1a4b30323f9e815bb366', 'Leopoldo');
INSERT INTO usuario VALUES (3, 'carlos@carlos.es', 'dc599a9972fde3045dab59dbd1ae170b', 'Carlos');

INSERT INTO fabricante VALUES(1,'Asus');
INSERT INTO fabricante VALUES(2,'Lenovo');
INSERT INTO fabricante VALUES(3,'Hewlett-Packard');
INSERT INTO fabricante VALUES(4,'Samsung');
INSERT INTO fabricante VALUES(5,'Seagate');
INSERT INTO fabricante VALUES(6,'Crucial');
INSERT INTO fabricante VALUES(7,'Gigabyte');
INSERT INTO fabricante VALUES(8,'Huawei');
INSERT INTO fabricante VALUES(9,'Xiaomi');

INSERT INTO producto VALUES(1,'Disco duro SATA3 1TB',86,5,'images/Asusd.jpg','Libere espacio en su tableta y telefono inteligente. Haga copias de seguridad o transfiera fotos y videos desde su tarjeta SD. Es un solo disco que funcionara en todos sus dispositivos.');
INSERT INTO producto VALUES(2,'Memoria RAM DDR4 8GB',120,6,'images/Lenovom.jpeg','Esta memoria original Lenovo de 8 GB DDR4 2133 Mhz es una memoria de bajo consumo y funcionamiento de alta velocidad para dispositivos que usan DDR4 SDRAM y que permite mejorar el rendimiento del sistema y aumentar la capacidad para ejecutar mas programas simultaneamente. Compatibilidad 100% comprobada en pruebas indicadas para sistemas compatibles.');
INSERT INTO producto VALUES(3,'Disco SSD 1 TB', 150,4,'images/HPd.jpeg','La unidad de disco duro HP SATA de 1 TB y 7200 rpm es una solucion practica y asequible para usuarios que necesitan almacenamiento adicional o una segunda unidad de disco duro dedicada mas rapida.');
INSERT INTO producto VALUES(4,'GeForce GTX 1050Ti',185,7,'images/Samsungt.jpeg','Incluyendo DirectCU II Tecnologia con aficionados patentado Ala-blade de hasta un 30% mas fresco y buen rendimiento para la maxima calidad y la mejor fiabilidad. Cuenta con Aura RGB Lighting que permite una personalizacion del sistema de juegos.');
INSERT INTO producto VALUES(5,'GeForce GTX 1080 Xtreme',755,6,'images/Seagatet.jpg','Estas tarjetas graficas se hacen a mano a la perfeccion en la busqueda de la mejor experiencia de graficos para los entusiastas de los juegos. Sobre la base de la arquitectura de la GPU NVIDIA revolucionaria Pascal, Xtreme tarjeta de graficos de juegos que trae la experiencia de juego increible.');
INSERT INTO producto VALUES(6,'Monitor 24 LED Full HD',202,1,'images/Crucialt.jpg','Monitor Full HD que ofrece una precision de color inigualable, crucial para aplicaciones profesionales. Con un panel SuperClear IPS de borde a borde y uno de los biseles mas finos del mundo, brinda una experiencia de visualizacion elegante y sin marcos, ideal para configuraciones de monitores multiples. Para un simple encadenamiento en cadena de un solo cable de multiples monitores, esta equipado con tecnologia DisplayPort, ademas de los puertos HDMI.');
INSERT INTO producto VALUES(7,'Monitor 27 LED Full HD',245,1,'images/Gigabytet.jpeg','El monitor Full HD basado en IPS ofrece una calidad de imagen precisa sin ningun tipo de distorsion y permite que los juegos sean lo mas realistas posible, aporta una experiencia de juego envolvente. Escenas de juego vivas y claras con FreeSync, el cual puedes jugar a juegos de alta gama sin la fragmentacion ni los cuadros interrumpidos que se producen a partir de la diferencia entre la velocidad de imagen de una tarjeta grafica y la frecuencia de actualizacion del monitor.');
INSERT INTO producto VALUES(8,'Portatil Yoga 520',559,2,'images/Huaweip.jpg','Tiene un unico reposamanos de diamante tallado. Ademas, es mas delgado y ligero que las generaciones anteriores y tiene el doble de almacenamiento. Ademas de recargarse mas de un 40 % mas rapido que los portatiles normales, el Yoga 510 se puede dar la vuelta, doblar, inclinar y mantener de pie para satisfacer sus necesidades.');
INSERT INTO producto VALUES(9,'Portatil Ideapd 320',444,2,'images/Xiaomip.jpg','Esta computadora portatil tiene 8 GB de RAM y tiene 256 GB de almacenamiento SSD. En lo que respecta a la tarjeta grafica, este portatil tiene una tarjeta grafica para administrar las funciones graficas. Para mantenerlo vivo, tiene una bateria y pesa.');
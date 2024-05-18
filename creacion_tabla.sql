-- creacion de la base de datos (prueba local)
create schema if not exists `Proyecto_Web1` default character set utf8;

-- selecionamos la DB para trabajar sobre ella (prueba local)
USE `Proyecto_Web1`;

-- Crear un tabla (local y final)

CREATE TABLE `IDpartida`(
`nombre_usuario` text not null,
`color_usuario` text not null,
`escena1` text not null,
`escena2` text not null,
`escena3` text not null,
`escena4` text not null,
`escena5` text not null,
`escena6` text not null,
`escena7` text not null,
`escena8` text not null,
`escena9` text not null,
`escena10` text not null,
`Final` text not null,
`Estado` text not null
) engine=Innodb default charset=utf8;

CREATE TABLE `Encuesta_Opcional`(
`nombre_usuario` text not null,
`correo_usuario` text not null,
`vg_usuario` text not null,
`music_usuario` text not null,
`quote_usuario` text not null
) engine=Innodb default charset=utf8;
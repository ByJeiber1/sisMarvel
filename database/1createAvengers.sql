CREATE DATABASE IF NOT EXISTS avengers2;
CREATE SCHEMA IF NOT EXISTS avengers2 ;
USE avengers2;

CREATE TABLE `actor` (
  `actorCI` int auto_increment,
  `actorNombre1` varchar(60) NOT NULL,
  `actorNombre2` varchar(60),
  `actorApell1` varchar(60) NOT NULL,
  `actorApell2` varchar(60),
  PRIMARY KEY (`actorCI`)
);

CREATE TABLE `plataforma` (
  `platfID` int auto_increment,
  `platfNombre` varchar(60),
  PRIMARY KEY (`platfID`)
);


CREATE TABLE `cargo` (
  `cargoID` int auto_increment,
  `cargoNombre` varchar(60) NOT NULL,
  PRIMARY KEY (`cargoID`)
);

CREATE TABLE `color` (
  `colorHEX` varchar(60),
  `colorNombre` varchar(60) NOT NULL,
  `colorDescripcion` varchar(60) NOT NULL,
  PRIMARY KEY (`colorHEX`)
);


CREATE TABLE `combate` (
  `combateID` int auto_increment,
  `objetoID_fk` int,
  `poderID_fk` int,
  `combateLugar` int NOT NULL,
  `combateFecha` date NOT NULL,
  `combateDescrp` varchar(60),
  PRIMARY KEY (`combateID`, `objetoID_fk`, `poderID_fk`)
);

CREATE TABLE `compannia` (
  `companniaID` int auto_increment,
  `companniaNombre` varchar(60) NOT NULL,
  `companniaDescrp` varchar(60),
  PRIMARY KEY (`companniaID`)
);

CREATE TABLE `creador` (
  `creadorID` int auto_increment,
  `creadorNombre` varchar(60) NOT NULL,
  PRIMARY KEY (`creadorID`)
);

CREATE TABLE `director` (
  `directorCI` int auto_increment,
  `directorNombre` varchar(60),
  PRIMARY KEY (`directorCI`)
);

CREATE TABLE `heroeVillanoCivil` (
  `heroeVillanoCivID` int auto_increment,
  `persHeroeID_fk` int,
  `persCivilID_fk` int,
  `persVillanoID_fk` int,
  PRIMARY KEY (`heroeVillanoCivID`)
);

CREATE TABLE `heroeVillanoEnfrentados` (
 `persHeroeID` int,
  `persVillanoID` int,
  PRIMARY KEY (`persHeroeID`,`persVillanoID`)
);

CREATE TABLE `historial` (
  `medID` int,
  `perfilID` int,
  `usuEmail` varchar(60),
  PRIMARY KEY (`medID`,`perfilID`,`usuEmail`)
);

CREATE TABLE `lugar` (
  `lugarID` int auto_increment,
  `lugarNombre` varchar(60),
  `lugarFicticio` boolean default 1,
  `lugarTipo` VARCHAR(20),
  `lugar_id` int,
  PRIMARY KEY (`lugarID`)
);

CREATE TABLE `medComic` (
  `medComID` int auto_increment,
  `medComNroTomo` int,
  PRIMARY KEY (`medComID`)
);

CREATE TABLE `medPais` (
  `med_id` int,
  `lugar_id` int,
  primary key (`med_id`, `lugar_id`)
);


CREATE TABLE `medPelicula` (
  `medPelID` INT NOT NULL AUTO_INCREMENT,
  `medPelDirectorCI` INT,
  `medPelDuracion` TIME,
  `medPelTipo` ENUM('Animada', 'Liveaction', 'Caricatura'),
  `medPelCostProd` NUMERIC(10,2),
  `medPelGananc` NUMERIC(10,2),
  `medPelDistrib` INT,
  PRIMARY KEY (`medPelID`)
);

CREATE TABLE `medSerie` (
  `medSerID` INT NOT NULL AUTO_INCREMENT,
  `medSerCreador` INT,
  `medSerTotEps` INT,
  `medSerCanalTrans` VARCHAR(60),
  `medSerTipo` ENUM('Animado', 'Liveaction', 'Caricatura'),
  PRIMARY KEY (`medSerID`)
);

CREATE TABLE `medVidPlatf` (
  `medVid_id` int,
  `medVidTipJuego` varchar(60),
  `platf_id` int
);

CREATE TABLE `medVideojuego` (
  `medVidjID` INT NOT NULL AUTO_INCREMENT,
  `medVidjTipJuego` ENUM('Accion', 'Aventura', 'Arcade', 'Estrategia', 'Simulacion', 'Musical'),
  `medVidjCompPubl` INT,
  PRIMARY KEY (`medVidjID`)
);

CREATE TABLE `medio` (
  `medID` int auto_increment,
  `medTitulo` varchar(60),
  `medFechEstreno` date,
  `companniaCreadProdID` int,
  `medSinopsis` varchar(60),
  `medPelicula` int,
  `medSerie` int,
  `medVideojuego` int,
  `medComic` int,
  PRIMARY KEY (`medID`)
);

CREATE TABLE `miLista` (
  `usuEmail` varchar(60),
  `perfilID` int,
 `medID` int,
  PRIMARY KEY (`usuEmail`, `perfilID`, `medID`)
);

CREATE TABLE `objeto` (
  `objetoID` int auto_increment,
  `objetoNombre` varchar(60),
  `objetoMaterialFabricacion` varchar(60),
  `objetoTipoFK` int,
  `objetoDescripcion` varchar(60),
  PRIMARY KEY (`objetoID`)
);

CREATE TABLE `ocupacion` (
  `ocupacionID` int auto_increment,
  `ocupacionNombre` varchar(60),
  PRIMARY KEY (`ocupacionID`)
);

CREATE TABLE `orgMed` (
  `org_id` INT,
  `med_id` INT,
  `fecha` DATE,
  `orgMedTipo` ENUM('Protagonista', 'Enemiga', 'Secundaria'),
  `orgMedEdoFinal` ENUM('Protagonista', 'Enemiga', 'Secundaria'),
  PRIMARY KEY (`fecha`)
);

CREATE TABLE `organizacion` (
  `orgID` int auto_increment,
  `orgNombre` varchar(60),
  `orgEslogan` varchar(60),
  `orgLiderMasConocido` int,
  `orgTipoOrg` VARCHAR(20),
  `orgObjetivoPpal` varchar(60),
  `orgLugarCreacion` int,
  `orgFundador` int,
  `orgPrimerAparComics` int,
  PRIMARY KEY (`orgID`)
);

CREATE TABLE `perCargOrg` (
  `personaje_id` int,
  `cargo_id` int,
  `org_id` int
);

CREATE TABLE `perMed` (
  `med_id` INT,
  `perMedTipo` ENUM('Protagonista', 'Enemiga', 'Secundaria'),
  `actorCI` INT,
  `perMedTipoInterpret` ENUM('Interprete', 'Voz'),
  PRIMARY KEY (`med_id`)
);

CREATE TABLE `perfil` (
  `usuEmail_id` varchar(60),
  `perfilID` int,
  `perfilNombre` varchar(60),
  `perfilIdiomaPref` varchar(60),
  `perfilEmail` varchar(60),
  PRIMARY KEY (`usuEmail_id`,`perfilID`)
);

CREATE TABLE `persCivil` (
  `persCivilD` int auto_increment,
  `persCivilNombre` varchar(60),
	`id_personaje` int not null,
  PRIMARY KEY (`persCivilD`)
);

CREATE TABLE `persCreador` (
  `personajeID_fk` int,
  `creadorID_fk` int
);

CREATE TABLE `persNacion` (
  `personaje_id` int,
  `nacionalidad_id` int
);

CREATE TABLE `persObjeto` (
  `personaje_id` int,
  `objeto_id` int,
  primary key (`personaje_id`, `objeto_id`)
);

CREATE TABLE `persOcupacion` (
  `personaje_id` int,
  `ocupacion_id` int,
  primary key (`personaje_id`, `ocupacion_id`)
);

CREATE TABLE `persPoder` (
  `personajeID` INT,
  `poderID` INT,
  `obtencionPoder` ENUM('Natural', 'Artificial'),
  `personajeHerencia` INT,
  PRIMARY KEY (`personajeID`, `poderID`)
);

CREATE TABLE `persVillano` (
  `persVillanoID` int auto_increment PRIMARY KEY,
  `persVillanoNombre` varchar(60),
  `persVillanoObjetivo` varchar(60),
  `id_personaje` int not null
);


CREATE TABLE `persHeroe` (
  `persHeroeID` int auto_increment,
  `superHeroeNombre` varchar(60),
  `superHeroeLogoTipo` BLOB,
  `id_personaje` int not null,
  PRIMARY KEY (`persHeroeID`)
);


CREATE TABLE `personaje` (
  `personajeID` INT NOT NULL AUTO_INCREMENT,
  `perNombre1` VARCHAR(60),
  `perNombre2` VARCHAR(60),
  `perApellido1` VARCHAR(60),
  `perApellido2` VARCHAR(60),
  `perGenero` ENUM('M', 'F', 'DESC', 'OTRO'),
  `perColorPelo` VARCHAR(60),
  `perColorOjos` VARCHAR(60),
  `perEdoMarital` ENUM('Soltero', 'Soltera', 'Casado', 'Casada', 'Viudo', 'Viuda', 'Separado', 'Separada', 'Divorciado', 'Divorciada'),
  `perPrimeraAparicionComic` INT,
  `perFraseMasCelebre` VARCHAR(60),
  `personajeHeroe` INT,
  `personajeVillano` INT,
  `personajeCivil` INT,
  PRIMARY KEY (`personajeID`)
);

CREATE TABLE `poder` (
  `poderID` int auto_increment,
  `poderNombre` varchar(60) not null,
  `poderDescripcion`  varchar(60),
  PRIMARY KEY (`poderID`)
);

CREATE TABLE `rating` (
  `med_id` INT,
  `usuEmail` VARCHAR(60),
  `perfil_id` INT,
  `ratingResenna` VARCHAR(60),
  `ratingPuntaje` ENUM('1', '2', '3', '4', '5'),
  PRIMARY KEY (`med_id`, `usuEmail`, `perfil_id`)
);

CREATE TABLE `recomendacion` (
  `medID` int,
  `perfilID` int,
  `usuEmail` varchar(60),
   PRIMARY KEY (`medID`,`perfilID`,`usuEmail`)
);

CREATE TABLE `sede` (
  `org_id` int,
  `sedeID` int,
  `sedeNombre` varchar(60),
  `sedeTipoEdificacion` varchar(20),
  `sedeUbicacion` int,
  PRIMARY KEY (`sedeID`)
);

CREATE TABLE `tipoObjeto` (
  `tipoObjetoID` int auto_increment ,
  `tipoObjetoNombre` varchar(60),
  PRIMARY KEY (`tipoObjetoID`)
);

CREATE TABLE `trajeColor` (
  `persHeroe_id` int,
  `colorHEX_id` varchar(60),
  `detalleTrajeColor` varchar(60)
);

CREATE TABLE usuario (
usuEmail varchar(60),
usuNombre1 varchar(60),
usuNombre2 varchar(60),
usuApell1 varchar(60),
usuApell2 varchar(60),
usuFechNac date,
usuPassword varchar(60),
usuUsername varchar(60),
usuPais int,
usuCiudad int,
usuTipoCuenta ENUM('gratis', 'vip', 'premium'),
PRIMARY KEY (usuEmail)
);

CREATE TABLE `nacionalidad` (
  `nacionalidadID` int auto_increment,
  `nacionalidadNombre` varchar(60),
  `nacionalidadLugar` int,
  PRIMARY KEY (`nacionalidadID`)
);
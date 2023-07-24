ALTER TABLE `cargoMontoSuscripcion` 
  drop FOREIGN KEY fk_usuTarj,
  drop FOREIGN KEY fk_usuCuentaID; 
drop table `cargoMontoSuscripcion`;

ALTER TABLE `comGal` 
  drop FOREIGN key fk_medComic,
  drop FOREIGN key fk_galID; 
drop table `comGal`;

ALTER TABLE `combate` 
  drop foreign key fk_objetoID,
  drop foreign key fk_poderID,
  drop foreign key fk_lugarID;
drop TABLE `combate`; 

ALTER TABLE `cuentaGratis` 
  drop foreign key pk_fk_usuarioEmail,
  drop foreign key fk_galeria;
drop TABLE `cuentaGratis`;

ALTER TABLE `cuentaMed` 
  drop foreign key fk_cuentaID,
  drop foreign key fk_medio;
drop TABLE `cuentaMed` ;

ALTER TABLE `cuenta` 
	drop foreign key CHK_CUENTA_TIPO;
drop TABLE `cuenta` ;

ALTER TABLE `descuento` 
  drop foreign key pk_fk_beneficio,
  drop foreign key pk_fk_cuenta;
drop TABLE `descuento`;

ALTER TABLE `dispositivo` 
  drop foreign key CHK_DISP_TIPO;
drop TABLE `dispositivo`;

ALTER TABLE `galeria`
	drop foreign key CHK_MODO_LECTURA ;
drop TABLE `galeria`;

ALTER TABLE `heroeVillanoCivil` 
  drop foreign key fk_persHeroe ,
  drop foreign key fk_persVillano ,
  drop foreign key fk_persCivil;
drop TABLE `heroeVillanoCivil`; 

ALTER TABLE `heroeVillanoEnfrentados` 
  drop foreign key fk_pershero ,
  drop foreign key fk_persvillan;
drop TABLE `heroeVillanoEnfrentados` ;

ALTER TABLE `historial` 
  drop foreign key fk_medi ,
  drop foreign key fk_perfil ;
drop TABLE `historial`;


ALTER TABLE `medPais` 
  drop foreign key fk_lugar,
  drop foreign key fk_medo;
drop TABLE `medPais`;

ALTER TABLE `medVidPlatf` 
  drop foreign key fk_medVidjID,
  drop foreign key fk_plataforma;
drop TABLE `medVidPlatf`; 
  
ALTER TABLE `miLista` 
  drop foreign key fk_media,
  drop foreign key fk_perfi;
drop TABLE `miLista`;

ALTER TABLE `objeto` 
 drop foreign key `objeto_ibfk_1`
drop TABLE `objeto`;

ALTER TABLE `orgMed` 
 drop foreign key fk_organizacion,
 drop foreign key fk_med;
drop TABLE `orgMed` ;

ALTER TABLE `organizacion` 
  drop foreign key fk_personaje;
drop TABLE `organizacion`;

ALTER TABLE `perCargOrg` 
  drop foreign key fk_organizacin,
  drop foreign key fk_personae ,
  drop foreign key fk_cargo; 
drop TABLE `perCargOrg`;
  
ALTER TABLE `perMed` 
  drop foreign key fk_Persnaje,
  drop foreign key fk_me;
create TABLE `perMed`;

ALTER TABLE `perfil` 
  drop foreign key fK_usuario ;
drop TABLE `perfil` ;

ALTER TABLE `persCivil` 
  drop foreign key fk_pernaje;
drop TABLE `persCivil`;

ALTER TABLE `persCreador` 
  drop foreign key perscreador_ibfk_1,
  drop foreign key perscreador_ibfk_2;
drop TABLE `persCreador`;

ALTER TABLE `persNacion`
  drop foreign key fk_peonaje ,
  drop foreign key fk_nacionalidad;
drop TABLE `persNacion`;

ALTER TABLE `persObjeto` 
  drop foreign key fk_objeto,
  drop foreign key fk_peraje;
ALTER TABLE `persObjeto`; 

ALTER TABLE `persPoder` 
  drop foreign key fk_poder,
  drop foreign key fk_perse;
drop TABLE `persPoder`; 

ALTER TABLE `persVillano` 
  drop foreign key fk_psonaje;
drop TABLE `persVillano`;

ALTER TABLE `persOcupacion` 
  drop foreign key fk_opacion,
  drop foreign key fk_persDSonaje;
drop TABLE `persOcupacion`;

ALTER TABLE `rating` 
  drop foreign key fk_perdil,
  drop foreign key fk_meadio;
drop TABLE `rating`;

ALTER TABLE `recomendacion` 
  drop foreign key fk_persdil,
  drop foreign key fk_mddedio;
drop TABLE `recomendacion` 

ALTER TABLE `sede` 
  drop foreign key fk_organizasscion,
  drop foreign key CHK_SEDE_TIPO_EDIFICIO;
drop TABLE `sede`;

ALTER TABLE `trajeColor` 
  drop foreign key fk_persHeeroe,
  drop foreign key fk_color;
drop TABLE `trajeColor`;

ALTER TABLE `usuDisp` 
  drop foreign key fk_dispositivo,
  drop foreign key fk_usuaario;
drop TABLE `usuDisp`;

ALTER TABLE `usuTarj` 
  drop foreign key fk_Usuaddrio,
  drop foreign key fk_tarjeta;
drop TABLE `usuTarj`;

DROP TABLE `actor`;
DROP TABLE `beneficio`;
DROP TABLE `cargoMontoSuscripcion`;
DROP TABLE `cargo`;
DROP TABLE `color`;
DROP TABLE `comGal`;
DROP TABLE `combate`;
DROP TABLE `compannia` ;
DROP TABLE `creador`;
DROP TABLE `cuentaGratis`;
DROP TABLE `cuentaMed` ;
DROP TABLE `cuenta` ;
DROP TABLE `descuento` ;
DROP TABLE `director`;
DROP TABLE `dispositivo` ;
DROP TABLE `galeria`;
DROP TABLE `heroeVillanoCivil`;
DROP TABLE `heroeVillanoEnfrentados` ;
DROP TABLE `historial` ;
DROP TABLE `lugar` ;
DROP TABLE `medComic` ;
DROP TABLE `medPais` ;
--DROP TABLE `medPelGananc`;
DROP TABLE `medPelicula`;
DROP TABLE `medSerie`;
DROP TABLE `medVidPlatf`;
DROP TABLE `medVideojuego` ;
DROP TABLE `medio`;
DROP TABLE `miLista` ;
DROP TABLE `nacionalidad`;
DROP TABLE `objeto`;
DROP TABLE `ocupacion`;
DROP TABLE `orgMed` ;
DROP TABLE `organizacion` ;
DROP TABLE `perCargOrg`;
DROP TABLE `perMed` ;
DROP TABLE `perfil` ;
DROP TABLE `persCivil`;
DROP TABLE `persCreador`;
DROP TABLE `persHeroe`;
DROP TABLE `persNacion`;
DROP TABLE `persObjeto` ;
DROP TABLE `persOcupacion` ;
DROP TABLE `persPoder` ;
DROP TABLE `persVillano`;
DROP TABLE `personaje`;
DROP TABLE `plataforma` ;
DROP TABLE `poder`;
DROP TABLE `rating ` ;
DROP TABLE `recomendacion` ;
DROP TABLE `sede` ;
DROP TABLE `tarjeta`;
DROP TABLE `tipoObjeto`;
DROP TABLE `trajeColor` ;
DROP TABLE `usuDisp`;
--DROP TABLE `usuGal`; 
DROP TABLE `usuTarj`; 
DROP TABLE `usuario`;
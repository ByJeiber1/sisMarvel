
ALTER TABLE `combate` 
  add CONSTRAINT fk_objetoID FOREIGN KEY (`objetoID_fk`) REFERENCES `objeto`(`objetoID`),
  add CONSTRAINT fk_poderID FOREIGN KEY (`poderID_fk`) REFERENCES `poder`(`poderID`),
  add CONSTRAINT fk_lugarID FOREIGN KEY (`combateLugar`) REFERENCES `lugar`(`lugarID`)
;

ALTER TABLE `heroeVillanoCivil` 
  add CONSTRAINT fk_persHeroe FOREIGN KEY (`persHeroeID_fk`) REFERENCES `persHeroe`(`persHeroeID`),
  add CONSTRAINT fk_persVillano FOREIGN KEY (`persCivilID_fk`) REFERENCES `persVillano`(`persVillanoID`),
  add CONSTRAINT fk_persCivil FOREIGN KEY (`persVillanoID_fk`) REFERENCES `persCivil`(`persCivilD`)
;

ALTER TABLE `heroeVillanoEnfrentados` 
  add constraint fk_pershero FOREIGN KEY (`persHeroeID`) REFERENCES `persHeroe`(`persHeroeID`),
  add constraint fk_persvillan FOREIGN KEY (`persVillanoID`) REFERENCES `persVillano`(`persVillanoID`)
;

ALTER TABLE `historial` 
  add constraint fk_medi FOREIGN KEY (`medID`) REFERENCES `medio`(`medID`),
  add constraint fk_perfil FOREIGN KEY (`usuEmail`,`perfilID`) REFERENCES `perfil`(`usuEmail_id`,`perfilID`)
;


ALTER TABLE `medPais` 
  add constraint fk_lugar FOREIGN KEY (`lugar_id`) REFERENCES `lugar`(`lugarID`),
  add constraint fk_medo FOREIGN KEY (`med_id`) REFERENCES `medio`(`medID`)
;

ALTER TABLE `medVidPlatf` 
  add constraint fk_medVidjID FOREIGN KEY (`medVid_id`) REFERENCES `medVideojuego`(`medVidjID`),
  add constraint fk_plataforma FOREIGN KEY (`platf_id`) REFERENCES `plataforma`(`platfID`)
;
  
ALTER TABLE `miLista` 
  add constraint fk_media FOREIGN KEY (`medID`) REFERENCES `medio`(`medID`),
   add constraint fk_perfi FOREIGN KEY (`usuEmail`,`perfilID`) REFERENCES `perfil`(`usuEmail_id`,`perfilID`)
;

ALTER TABLE `objeto` 
 add FOREIGN KEY (`objetoTipoFK`) REFERENCES `tipoObjeto`(`tipoObjetoID`)
;

ALTER TABLE `orgMed` 
 add constraint fk_organizacion FOREIGN KEY (`org_id`) REFERENCES `organizacion`(`orgID`),
 add constraint fk_med FOREIGN KEY (`med_id`) REFERENCES `medio`(`medID`)
;

ALTER TABLE `organizacion` 
  add constraint fk_personaje FOREIGN KEY (`orgLiderMasConocido`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `perCargOrg` 
  add constraint fk_organizacin FOREIGN KEY (`org_id`) REFERENCES `organizacion`(`orgID`),
  add constraint fk_personae FOREIGN KEY (`personaje_id`) REFERENCES `personaje`(`personajeID`),
  add constraint fk_cargo FOREIGN KEY (`cargo_id`) REFERENCES `cargo`(`cargoID`)
;  
  
ALTER TABLE `perMed` 
  add constraint fk_Persnaje FOREIGN KEY (`med_id`) REFERENCES `personaje`(`personajeID`),
  add constraint fk_me FOREIGN KEY ( `med_id`) REFERENCES `medio`(`medID`)
;

ALTER TABLE `perfil` 
  add CONSTRAINT fK_usuario FOREIGN KEY (`usuEmail_id`) REFERENCES `usuario`(`usuEmail`)
;

ALTER TABLE `persCivil` 
  add constraint  fk_pernaje FOREIGN KEY (`id_personaje`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `persCreador` 
  add FOREIGN KEY (`creadorID_fk`) REFERENCES `creador`(`creadorID`),
  add FOREIGN KEY (`personajeID_fk`) REFERENCES `personaje`(`personajeID`)
;
 
ALTER TABLE `persNacion`
  add constraint fk_peonaje FOREIGN KEY (`personaje_id`) REFERENCES `personaje`(`personajeID`),
  add constraint fk_nacionalidad FOREIGN KEY (`nacionalidad_id`) REFERENCES `nacionalidad`(`nacionalidadID`)
;

ALTER TABLE `persObjeto` 
  add constraint fk_objeto FOREIGN KEY (`objeto_id`) REFERENCES `objeto`(`objetoID`),
  add constraint fk_peraje FOREIGN KEY (`personaje_id`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `persPoder` 
  add constraint fk_poder FOREIGN KEY (`poderID`) REFERENCES `poder`(`poderID`),
  add constraint fk_perse FOREIGN KEY (`personajeID`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `persVillano` 
  add constraint  fk_psonaje FOREIGN KEY (`id_personaje`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `persHeroe` 
  add constraint  fk_psonaje2 FOREIGN KEY (`id_personaje`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `persOcupacion` 
  add constraint fk_opacion FOREIGN KEY (`ocupacion_id`) REFERENCES `ocupacion`(`ocupacionID`),
  add constraint fk_persDSonaje FOREIGN KEY (`personaje_id`) REFERENCES `personaje`(`personajeID`)
;

ALTER TABLE `rating` 
  add constraint fk_perdil FOREIGN KEY (`usuEmail`,`perfil_id`) REFERENCES `perfil`(`usuEmail_id`, `perfilID`),
  add constraint fk_meadio FOREIGN KEY (`med_id`) REFERENCES `medio`(`medID`)
;

ALTER TABLE `recomendacion` 
  add constraint fk_persdil FOREIGN KEY (`usuEmail`,`perfilID`) REFERENCES `perfil`(`usuEmail_id`, `perfilID`),
  add constraint fk_mddedio FOREIGN KEY (`medID`) REFERENCES `medio`(`medID`)
;

ALTER TABLE `sede` 
  add constraint fk_organizasscion FOREIGN KEY (`org_id`) REFERENCES `organizacion`(`orgID`),
  add CONSTRAINT CHK_SEDE_TIPO_EDIFICIO CHECK( `sedeTipoEdificacion`IN('Mansion' ,'Torre' , 'Cueva' , 'Casa' , 'Apartamento'))
;

ALTER TABLE `trajeColor` 
  add constraint fk_persHeeroe FOREIGN KEY (`persHeroe_id`) REFERENCES `persHeroe`(`persHeroeID`),
  add constraint fk_color FOREIGN KEY (`colorHEX_id`) REFERENCES `color`(`colorHEX`)
;

ALTER TABLE `medio`
ADD CONSTRAINT `fk_medio_medPelicula`
FOREIGN KEY (`medPelicula`)
REFERENCES `medPelicula` (`medPelID`);

ALTER TABLE `medio`
ADD CONSTRAINT `fk_medio_compannias`
FOREIGN KEY (`companniaCreadProdID`)
REFERENCES `compannia` (`companniaID`)
ON DELETE SET NULL
ON UPDATE CASCADE;

ALTER TABLE `medPelicula`
ADD CONSTRAINT `fk_medPelicula_director`
FOREIGN KEY (`medPelDirectorCI`)
REFERENCES `director` (`directorCI`)
ON DELETE SET NULL
ON UPDATE CASCADE;
-- [ ] Pseudo codigo a mejorar
CREATE TRIGGER tr_personaje_chk BEFORE INSERT OR UPDATE ON personaje
FOR EACH ROW
BEGIN
  -- Verificar si el valor de perGenero es válido
  IF NEW.perGenero NOT IN ('M', 'F', 'DESC', 'OTRO') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de perGenero es inválido';
  END IF;

  -- Verificar si el valor de perEdoMarital es válido
  IF NEW.perEdoMarital NOT IN ('Soltero', 'Soltera', 'Casado', 'Casada', 'Viudo', 'Viuda', 'Separado', 'Separada', 'Divorciado', 'Divorciada') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de perEdoMarital es inválido';
  END IF;
END;


CREATE TRIGGER tr_usuGal_chk BEFORE INSERT OR UPDATE ON usuGal
FOR EACH ROW
BEGIN
  -- Verificar si el valor de modoLectura es válido
  IF NEW.modoLectura NOT IN ('Oscuro', 'lectura', 'Solar') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de modoLectura es inválido';
  END IF;
END;


CREATE TRIGGER tr_medSerie_chk BEFORE INSERT OR UPDATE ON medSerie
FOR EACH ROW
BEGIN
  -- Verificar si el valor de medSerTipo es válido
  IF NEW.medSerTipo NOT IN ('Animado', 'Liveaction', 'Caricatura') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de medSerTipo es inválido';
  END IF;
END;
CREATE TRIGGER tr_medPelicula_chk BEFORE INSERT OR UPDATE ON medPelicula
FOR EACH ROW
BEGIN
  -- Verificar si el valor de medPelTipo es válido
  IF NEW.medPelTipo NOT IN ('Animada', 'Liveaction', 'Caricatura') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de medPelTipo es inválido';
  END IF;
END;

CREATE TRIGGER tr_organizacion_chk BEFORE INSERT OR UPDATE ON organizacion
FOR EACH ROW
BEGIN
  -- Verificar si el valor de orgTipoOrg es válido
  IF NEW.orgTipoOrg NOT IN ('Protagonista', 'Antogonistan', 'Secundaria') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de orgTipoOrg es inválido';
  END IF;
END;
CREATE TRIGGER tr_orgMed_chk BEFORE INSERT OR UPDATE ON orgMed
FOR EACH ROW
BEGIN
  -- Verificar si el valor de orgMedTipo es válido
  IF NEW.orgMedTipo NOT IN ('Protagonista', 'Enemiga', 'Secundaria') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de orgMedTipo es inválido';
  END IF;
  
  -- Verificar si el valor de orgMedEdoFinal es válido
  IF NEW.orgMedEdoFinal NOT IN ('Protagonista', 'Enemiga', 'Secundaria') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de orgMedEdoFinal es inválido';
  END IF;
END;

CREATE TRIGGER tr_rating_chk BEFORE INSERT OR UPDATE ON rating
FOR EACH ROW
BEGIN
  -- Verificar si el valor de ratingPuntaje es válido
  IF NEW.ratingPuntaje NOT BETWEEN 1 AND 5 THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de ratingPuntaje es inválido';
  END IF;
END;


CREATE TRIGGER tr_medVideojuego_chk BEFORE INSERT OR UPDATE ON medVideojuego
FOR EACH ROW
BEGIN
  -- Verificar si el valor de medVidjTipJuego es válido
  IF NEW.medVidjTipJuego NOT IN ('Accion', 'Aventura', 'Arcade', 'Estrategia', 'Simulacion', 'Musical') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de medVidjTipJuego es inválido';
  END IF;
END;

CREATE TRIGGER tr_lugar_chk BEFORE INSERT OR UPDATE ON lugar
FOR EACH ROW
BEGIN
  -- Verificar si el valor de lugarTipo es válido
  IF NEW.lugarTipo NOT IN ('Continente', 'Pais', 'Ciudad', 'Avenida', 'Calle', 'Edificio', 'Apartamento') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de lugarTipo es inválido';
  END IF;
END;

CREATE TRIGGER tr_persPoder_chk BEFORE INSERT OR UPDATE ON persPoder
FOR EACH ROW
BEGIN
  -- Verificar si el valor de obtencionPoder es válido
  IF NEW.obtencionPoder NOT IN ('Natural', 'Artificial') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de obtencionPoder es inválido';
  END IF;
END;

CREATE TRIGGER tr_dispositivo_chk BEFORE INSERT OR UPDATE ON dispositivo
FOR EACH ROW
BEGIN
  -- Verificar si el valor de dispTipo es válido
  IF NEW.dispTipo NOT IN ('Telefono', 'Tablet', 'Portatil', 'Escritorio') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de dispTipo es inválido';
  END IF;
END;

CREATE TRIGGER tr_sede_chk BEFORE INSERT OR UPDATE ON sede
FOR EACH ROW
BEGIN
  -- Verificar si el valor de sedeTipoEdificación es válido
  IF NEW.sedeTipoEdificacion NOT IN ('Mansion', 'Torre', 'Cueva', 'Casa', 'Apartamento') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de sedeTipoEdificación es inválido';
  END IF;
END;

CREATE TRIGGER tr_permed_chk BEFORE INSERT OR UPDATE ON perMed
FOR EACH ROW
BEGIN
  -- Verificar si el valor de perMedTipo es válido
  IF NEW.perMedTipo NOT IN ('Protagonista', 'Enemiga', 'Secundaria') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de perMedTipo es inválido';
  END IF;
  
  -- Verificar si el valor de perMedTipoInterpret es válido
  IF NEW.perMedTipoInterpret NOT IN ('Interprete', 'Voz') THEN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El valor de perMedTipoInterpret es inválido';
  END IF;
END;

CREATE TRIGGER `trg_check_cuenta_tipo` BEFORE INSERT ON `cuenta`
FOR EACH ROW
BEGIN
    IF NEW.cuentaTipo NOT IN ('gold', 'premium', 'vip') THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'El tipo de cuenta debe ser gold, premium o vip';
    END IF;
END;
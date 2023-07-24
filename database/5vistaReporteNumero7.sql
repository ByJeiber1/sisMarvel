-- 7. [ ] Liste los personajes de películas más vistas para identificar que personajes prefieren los usuarios
-- create view personajes_peliculas_mas_vistas as 
-- select * 
-- from perMed pm in (select m.medID
--                     from medio m, rating r 
--                     where medPelicula is not NULL
--                     and m.medID = r.medID
--                     and r.medID IN (select medID
--                                         from rating
--                                         where ratingPuntaje = 5)
-- );

-- Nombre de superhéroe o supervillano que poseen poderes artificiales y que han sido líderes. 

create view reporte1 as
    select concat('h',P1.personajeID) as id, P1.perNombre1, P1.perApellido1, PH.superHeroeNombre as alias, Pd.obtencionPoder
    from personaje P1 join persHeroe PH on P1.personajeHeroe = PH.PersHeroeID, persPoder Pd 
    where P1.personajeID = Pd.personajeID and Pd.obtencionPoder = 'Artificial' and 
    EXISTS (select orgLiderMasConocido from organizacion O where O.orgLiderMasConocido = P1.personajeID)
    UNION all
    select concat('v',P2.personajeID) id, P2.perNombre1, P2.perApellido1, PV.persVillanoNombre as alias, Pd.obtencionPoder
    from personaje P2 join persVillano PV on P2.personajeVillano = PV.persVillanoID, persPoder Pd
    where P2.personajeID = Pd.personajeID and Pd.obtencionPoder = 'Artificial' and 
    EXISTS (select orgLiderMasConocido from organizacion O where O.orgLiderMasConocido = P2.personajeID);


-- Series que han tenido más episodios que el promedio

create view reporte2 as
    select medio.medTitulo, medio.medSerie, medSerie.medSerID, medSerie.medSerTotEps
    from medSerie join medio on medio.medSerie=medSerie.medSerID
    where medSerie.medSerTotEps >
        (select avg(medSerTotEps)
        from medSerie);


-- Los 5 objetos  más usados por héroes o villanos

create view reporte3 as
    SELECT o.objetoNombre, COUNT(*) AS usos
    FROM objeto o
    JOIN persobjeto po ON o.objetoID = po.objeto_id
    JOIN personaje p ON po.personaje_id = p.personajeID
    WHERE p.personajeHeroe >= 1 OR p.personajeVillano >= 1
    GROUP BY o.objetoID
    ORDER BY usos DESC
    LIMIT 5;

-- Imprima las películas que tengan más de 2 horas y media de duración, sean de tipo animada, cuya ganancia sea mayor al promedio de todas las películas del  mismo tipo, ordenadas cronológicamente por el costo de producción.
create view reporte5 as
    SELECT mp.*
    FROM medio m
    JOIN medpelicula mp ON m.medPelicula = mp.medPelID
    WHERE mp.medPelDuracion > '02:30:00'
    AND mp.medPelTipo = 'Animada'
    AND mp.medPelGananc > (
    SELECT AVG(medPelGananc)
    FROM medpelicula
    WHERE medPelTipo = 'Animada'
    )
    ORDER BY mp.medPelCostProd;
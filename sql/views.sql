--DETAILS REGIME
SELECT  rg.id_regime , rg.poids , rg.azo_perdu , pl.nom_plat , pl.disponibilite , pl.prix  , act.description_activite from regime_plat rpl
    JOIN regime rg 
    ON rpl.id_regime = rg.id_regime
    JOIN plat pl
    ON rpl.id_plat = pl.id_plat
    JOIN activite act
    ON rpl.id_activite = act.id_activite
    ORDER BY rg.id_regime ASC; 

--PRIX REGIME ET POIDS PERDU
SELECT DISTINCT v.id_regime , SUM(PRIX) as sum , poids , azo_perdu FROM 
    (SELECT  rg.id_regime , rg.poids , rg.azo_perdu , pl.nom_plat , pl.disponibilite , pl.prix  , act.description_activite from regime_plat rpl
        JOIN regime rg 
        ON rpl.id_regime = rg.id_regime
        JOIN plat pl
        ON rpl.id_plat = pl.id_plat
        JOIN activite act
        ON rpl.id_activite = act.id_activite)
    v GROUP BY v.id_regime;

--REGIME VENDU
SELECT DISTINCT YEAR(date_achat) FROM regime_achete;
SELECT DISTINCT v.id_regime , v.sum , v.date_achat FROM 
    regime_achete rga
        JOIN (SELECT DISTINCT v.id_regime , SUM(PRIX) as sum , poids , azo_perdu FROM 
    (SELECT  rg.id_regime , rg.poids , rg.azo_perdu , pl.nom_plat , pl.disponibilite , pl.prix  , act.description_activite from regime_plat rpl
        JOIN regime rg 
        ON rpl.id_regime = rg.id_regime
        JOIN plat pl
        ON rpl.id_plat = pl.id_plat
        JOIN activite act
        ON rpl.id_activite = act.id_activite) )v_ 
        ON rga.id_regime = v.id_regime;
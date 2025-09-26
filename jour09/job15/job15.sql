SELECT salles.nom, etage.nom
FROM salles
JOIN etage ON etage.id = salles.id_etage;
-- Creation Base de Données
CREATE DATABASE AnnuaireCircuits;
USE AnnuaireCircuits;

-- Creation user 
CREATE USER "adminCircuit"@"%" IDENTIFIED BY "1mzeB0ss";
-- sans droits de creation d'autres utilisateurs
GRANT ALL PRIVILEGES ON AnnuaireCircuits.* TO "adminCircuit"@"%";
-- Force creation user
FLUSH PRIVILEGES;

-- Creation table Promenades
CREATE TABLE Promenades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(200),
    pays VARCHAR(20),
    ville VARCHAR(200),
    depart VARCHAR(200),
    arrivee VARCHAR(200),
    codePostal INT,
    pseudo VARCHAR(200),
    detail VARCHAR(4000),
    images VARCHAR(200)
);

-- insérer une promenade
INSERT INTO Promenades (titre, pays, ville, depart, arrivee, codePostal, pseudo, detail, images) VALUES ('Jonction','Suisse','Genève','Bel-Air', 'Pointe de la jonction',1227, 'Toto', 'Promenade bucolique', 'lien vers image')

-- selectionner tous les promenades -- 
SELECT titre, pays, ville FROM Promenades;

--requete slq pour faire un update
UPDATE Promenades
SET titre = "best circuit", pays = "France", ville= "Monaco",depart="concorde", arrivee="lilas", codePostal="1223", pseudo="Teddy", detail="jdjdjdjdmdjd", images = "/home/cf/promenades/www/upload/5d2dde90c43e50.78313756.jpg"
WHERE id = 3    

--requete sql pour effacer
DELETE 
FROM Promenades  
WHERE id = :idPromenades
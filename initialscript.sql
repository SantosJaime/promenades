-- Creation Base de Données
CREATE DATABASE AnnuaireCircuits;
USE AnnuaireCircuits;

-- Creation user 
CREATE USER "adminCircuit"@"%" IDENTIFIED BY "1mzeB0ss";
-- sans droits de creation d'autres utilisateurs
GRANT ALL PRIVILEGES ON AnnuaireCircuits.* TO "adminCircuit"@"%";
-- Force creation user
FLUSH PRIVILEGES;

-- Creation table
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
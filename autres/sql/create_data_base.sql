-- Création de la base de données
CREATE DATABASE aimeroad;

-- Sélectionner la base de données créée
USE aimeroad;

-- Table Categorie
CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Clé primaire
    nom VARCHAR(255) NOT NULL,           -- Le nom de la catégorie ne peut pas être nul
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table Client
CREATE TABLE Client (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Clé primaire
    nom VARCHAR(255) NOT NULL,           -- Le nom du client ne peut pas être nul
    prenom VARCHAR(255) NOT NULL,        -- Le prénom du client ne peut pas être nul
    email VARCHAR(255) NOT NULL UNIQUE,  -- L'email doit être unique et ne peut pas être nul
    password VARCHAR(255) NOT NULL,      -- Le mot de passe ne peut pas être nul
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table Produit
CREATE TABLE Produit (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Clé primaire
    idCategorie INT NOT NULL,                    -- Référence à la table Categorie
    nom VARCHAR(255) NOT NULL,           -- Le nom du produit ne peut pas être nul
    prixUnitaire DECIMAL(10, 2) NOT NULL, -- Le prix unitaire doit être non nul et précis à 2 décimales
    urlPhoto VARCHAR(255) NULL, -- url de la photo
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT FK_Produit_Categorie FOREIGN KEY (idCategorie) REFERENCES Categorie(id)
);

-- Table Panier
CREATE TABLE Panier (
    idClient INT,                        -- Référence à la table Client
    idProduit INT,                       -- Référence à la table Produit
    quantite INT NOT NULL,               -- La quantité doit être un nombre positif
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (idClient, idProduit),    -- La clé primaire est une combinaison de client et produit
    CONSTRAINT FK_Panier_Client FOREIGN KEY (idClient) REFERENCES Client(id) ,
    CONSTRAINT FK_Panier_Produit FOREIGN KEY (idProduit) REFERENCES Produit(id)
);

-- Table Administrateur
CREATE TABLE Administrateur (
    idClient INT UNIQUE,            -- L'idClient fait office de clé primaire
    FOREIGN KEY (idClient) REFERENCES Client(id)
);
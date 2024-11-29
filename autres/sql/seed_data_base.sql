-- script sql de population de la base de données
-- l'algorithme de hashage pour les mots de passes est SHA256

-- Création des catégories
INSERT INTO Categorie (nom) 
VALUES 
    ('Bijoux'),
    ('Chapeaux'),
    ('Manteaux'),
    ('Chaussures');

-- Création des clients
INSERT INTO Client (nom, prenom, email, password) 
VALUES 
    ('Dupont', 'Jean', 'jean.dupont@gmail.com', '556972429c265aab19b92b814d2ffe9b2b4dc7e99176aae6e211ad425a37ec15'); -- le mot de passe est "passe" est hashé en sha256

-- Client 2 (administrateur)
INSERT INTO Client (nom, prenom, email, password) 
VALUES 
    ('Durand', 'Marie', 'marie.durand@gmail.com', '556972429c265aab19b92b814d2ffe9b2b4dc7e99176aae6e211ad425a37ec15');


INSERT INTO Client (nom, prenom, email, password) 
VALUES 
    ('Lemoine', 'Paul', 'paul.lemoine@gmail.com', '556972429c265aab19b92b814d2ffe9b2b4dc7e99176aae6e211ad425a37ec15');

-- Table des Administrateurs : L'administrateur est le deuxième client (id = 2)
INSERT INTO Administrateur (idClient) 
VALUES (2);

-- Création des produits
-- 10 produits avec des prix et des catégories attribuées
INSERT INTO Produit (idCategorie, nom, prixUnitaire, quantite, urlPhoto) 
VALUES
    (1, 'Bague en or', 250.00, 45,'https://aimeroad.com/bague.jpg'),
    (1, 'Collier diamant', 1200.00, 40, 'https://aimeroad.com/collier.jpg'),
    (2, 'Chapeau Fedora', 50.00, 37,'https://aimeroad.com/fedora.jpg'),
    (2, 'Casquette de baseball', 25.00, 56,'https://aimeroad.com/casquette.jpg'),
    (3, 'Manteau en laine', 180.00, 67,'https://aimeroad.com/manteau.jpg'),
    (3, 'Blouson en cuir', 150.00, 56,'https://aimeroad.com/blouson.jpg'),
    (4, 'Baskets de course', 70.00, 12, 'https://aimeroad.com/baskets.jpg'),
    (4, 'Boots en cuir', 120.00, 56,'https://aimeroad.com/boots.jpg'),
    (1, 'Bracelet argent', 75.00, 10,'https://aimeroad.com/bracelet.jpg'),
    (2, 'Chapeau Panama', 90.00, 23,'https://aimeroad.com/panama.jpg');

-- Création du panier pour le premier client (idClient = 1)
-- Ajout de 2 produits dans le panier du client 1
INSERT INTO Panier (idClient, idProduit, quantite)
VALUES
    (1, 1, 1),  -- Client 1 : Bague en or
    (1, 4, 2);  -- Client 1 : Casquette de baseball (quantité = 2)

-- Vous pouvez ajouter d'autres produits dans le panier en suivant le même modèle.

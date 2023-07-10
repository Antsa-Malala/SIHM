--utilisateur
INSERT INTO utilisateur (nom, prenom, date_naissance, genre, mail, mdp)
VALUES
  ('Doe', 'John', '1990-01-01', 1, 'john.doe@example.com', 'password123'),
  ('Smith', 'Emma', '1995-02-15', 0, 'emma.smith@example.com', 'password456'),
  ('Johnson', 'Michael', '1985-07-10', 1, 'michael.johnson@example.com', 'password789'),
  ('Brown', 'Sophia', '1992-09-20', 0, 'sophia.brown@example.com', 'password987'),
  ('Wilson', 'Olivia', '1988-06-25', 0, 'olivia.wilson@example.com', 'password654');

--poids
INSERT INTO poids (id_utilisateur, poids, date_debut)
VALUES
  (1, 70.5, '2023-01-01'),
  (2, 65.2, '2023-01-05'),
  (3, 80.0, '2023-01-02'),
  (4, 72.7, '2023-01-08'),
  (5, 68.9, '2023-01-03');

--admin
INSERT INTO admin (email, mdp)
VALUES
  ('admin1@example.com', 'password123'),
  ('admin2@example.com', 'password456'),
  ('admin3@example.com', 'password789');

--taille
INSERT INTO taille (id_utilisateur, taille, date_debut)
VALUES
  (1, 170.5, '2023-01-01'),
  (2, 165.2, '2023-01-05'),
  (3, 180.0, '2023-01-02'),
  (4, 172.7, '2023-01-08'),
  (5, 168.9, '2023-01-03');
--plat 
INSERT INTO plat (nom_plat, disponibilite, prix)
VALUES
  ('Pizza Margherita', 1, 10.99),
  ('Burger Cheese', 1, 8.99),
  ('Salade César', 1, 7.99),
  ('Pâtes Carbonara', 0, 12.99),
  ('Sushi Assortiment', 1, 15.99);

--code
INSERT INTO code (etat, code, somme)
VALUES
(0,'0875480234',10000),
(0,'4678O80234',15000),
(0,'1345880234',20000),
(0,'3257980234',25000),
(0,'6479079098',30000),
(1,'4326780234',35000),
(1,'4326780234',40000),
(1,'6646780234',45000),
(1,'0866780234',50000),
(1,'9756780234',60000),
(1,'8906780234',70000),
(1,'3909480234',80000),
(1,'6556780234',90000),
(1,'6756784574',100000),
(1,'5756787684',100000);

--activite
INSERT INTO activite (description_activite)
VALUES
  ('Course à pied'),
  ('Natation'),
  ('Yoga'),
  ('Cyclisme'),
  ('Musculation');

--rechargement
  INSERT INTO rechargement (id_utilisateur, id_code, date_rechargement)
VALUES
  (1, 1, '2023-01-01'),
  (2, 2, '2023-01-05'),
  (3, 3, '2023-01-02'),
  (4, 4, '2023-01-08'),
  (5, 5, '2023-01-03');

--regime
INSERT INTO regime (poids, azo_perdu)
VALUES
  (1, 1),
  (2, 1),
  (4, 1),
  (8, 1),
  (1, 0),
  (2, 0),
  (4, 0),
  (8, 0);


--regime_plat
INSERT INTO regime_plat (id_regime, id_plat, id_activite)
VALUES
  (1, 1, 1),
  (1, 2, 1),
  (2, 2, 2),
  (2, 4, 2),
  (2, 3, 2),
  (3, 3, 3),
  (3, 5, 3),
  (4, 4, 4),
  (4, 2, 4),
  (4, 1, 4),
  (5, 5, 5),
  (5, 1, 5),
  (6, 2, 2),
  (6, 5, 2),
  (6, 3, 2),
  (7, 1, 3),
  (7, 2, 3),
  (8, 3, 4),
  (8, 4, 4),
  (8, 5, 4);


--objectif
INSERT INTO objectif (id_utilisateur, objectif, date_debut, date_fin, valeur)
VALUES
  (1, 1, '2023-01-01', '2023-01-10', 5),
  (2, 0, '2023-01-05', '2023-01-15', 10),
  (3, 1, '2023-01-02', '2023-01-12', 3),
  (4, 1, '2023-01-08', '2023-01-18', 8),
  (5, 0, '2023-01-03', '2023-01-13', 12);

-- CREATE DATABASE IFTS_2024;

-- Commento MYSQL
-- USE IFTS_2024;
-- create table Product (
-- ProductID int primary key not null, 
-- ProductName varchar(50) not NULL,
-- ProductDescription longtext not null
-- );

-- data export per creare un backup selezionare: self-conteined file e scegliere la cartella dove lo vuoi mettere
-- data import per ripristinarlo selezionare self-conteined, cliccare new per creare un nuovo schema, dare il nome e selezionare il nome
-- self-conteined serve a esportarlo in un solo file con tutti i dati mentre l'altra opzione crea una cartella con diversi file

-- cancellare database
-- drop database ifts_2024_2;

-- aggiungere una colonna alla tabella
-- ALTER TABLE ifts_2024_2.products ADD Price float;

-- cancellare una colonna dalla tabella
-- ALTER TABLE ifts_2024_2.products DROP COLUMN Prezzo;

-- cambiare typedata di una colonna
-- ALTER TABLE ifts_2024_2.products modify COLUMN Price int;

-- cambiare nome della colonna
-- ALTER TABLE ifts_2024_2.products change Prezzo Price int;

-- seleziona e visualizza i valori selezionati-> SELECT (colonne che vuoi visualizzare) FROM (tabella dove sono le colonne) -WHERE (si può aggiungere una condizione per visualizzare diti specifici)-
-- SELECT * -- ProductName, ProductDescription, Price
-- FROM ifts_2024_2.products;
-- WHERE Price < 4

-- aggiungere dati alla tabella
-- insert into ifts_2024_2.products (ProductName,ProductDescription,Price)
-- value ("Cancellino","cancelleria per lavagna",3),
-- 	  ("Pennarello","pennarello per lavagna",2),
--       ("Gel mani","gel igenizzante mani",5),
--       ("Disinfettnte superfici","disinfettante per superfici",6),
--       ("graffette","graffette per fogli",4)

-- modificare i dati della tabella
-- UPDATE ifts_2024_2.products
-- SET Price = 3
-- WHERE ProductName = "Cancellino"

-- cancellare i dati definiti nel WHERE
-- DELETE FROM ifts_2024_2.products 
-- WHERE ProductID = 6;

-- creare una copia della tabella come backup 2 modi:
-- metodo 1 
-- CREATE TABLE `products` (
--   `ProductID` int(11) NOT NULL AUTO_INCREMENT,
--   `ProductName` varchar(50) NOT NULL,
--   `ProductDescription` longtext NOT NULL,
--   `Price` int(11) DEFAULT NULL,
--   PRIMARY KEY (`ProductID`)
-- ) 
-- ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='ilsta dei prodotti';

-- insert into ifts_2024_2.productsbackup
-- select *
-- from ifts_2024_2.products

-- o metodo 2
-- create table ifts_2024_2.productsbackup2 as
-- select *
-- from ifts_2024_2.products









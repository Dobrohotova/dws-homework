SELECT * FROM Profesori WHERE akademija = 'veb' AND ime = 'Miro' OR predmet = 'Photoshop'; 
SELECT * FROM Profesori WHERE akademija LIKE '%b';
SELECT * FROM Profesori WHERE akademija NOT LIKE '%i';
SELECT COUNT id AS broj_na_profesori FROM Profesori;
UPDATE Profesori SET opis = 'Predava na veb dizajn' WHERE akademija = 'veb';
INSERT INTO Profesori (id, ime, prezime, opis, akademija) VALUES (24, 'Martin', 'Martinovski', 'Opis lorem ipsum la la la la..', 'veb');
DELETE FROM Profesori WHERE id > 23;
SELECT id, ime, prezime FROM Profesori WHERE ime IN ('Miro', 'Gorjan');
SELECT id, ime, prezime FROM Profesori WHERE ime NOT IN ('Bojan', 'Dimitar');
SELECT * FROM Profesori LIMIT 10; 
SELECT * FROM Profesori WHERE id BETWEEN 10 AND 20;
DROP Profesori2;
TRUNCATE Profesori;
SELECT * FROM Profesori ORDER BY ime ASC, prezime ASC;
SELECT * FROM Profesori WHERE akademija = 'veb' GROUP BY ime = 'Dimitar';
SELECT DISTINCT ime FROM Profesori;


?EXPORT
?IMPORT

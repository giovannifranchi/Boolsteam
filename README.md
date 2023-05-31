DATABASE VIDEOGAME TABLE INFO:  

-game -> varchar;  
-thumb -> text/nullable;  
-game_link -> text/nullable;  
-release_date -> date;  
-genre -> varchar(50);  
-dev -> varchar(100);  
-dev_link -> text/nullable;  
-publisher -> varchar;  
-platform -> varchar(30);  
-description -> text/nullable;  
-score -> float(3,1)/nullable;  
-review -> text/nullable;  
-pegi -> tinyint(21)/nullable;  




*Scegliamo di mettere delle info "nullable" perche' non sono presenti nel json di riferimento.  
*In pegi il valore tra parentesi è un riferimento di progettazione, non si riferisce a sql.  

UPDATE  
- Aggiunta colonna slug
- Utilizzato slug per get dei singoli game

Per utilizzare nuovamente il progetto è necessario eseguire un reset del database, quindi effettuare nuovamente migrazioni e seed
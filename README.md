DATABASE VIDEOGAME TABLE INFO:

-title -> varchar;
-thumbnail -> text;
-short_description -> text;
-game_url -> text/nullable;
-genre -> varchar(50);
-platform -> varchar(30);
-publisher -> varchar;
-developer -> varchar(100);
-release_date -> date;


-devLink -> text/nullable;
-publisherLink -> text/nullable;
-platformLink -> text;
-score -> float(3,1)/nullable;
-review -> text/nullable; 
-pegi -> tinyint(21)/nullable;

*Scegliamo di mettere delle info "nullable" perche' non sono presenti nel json di riferimento.


   
   
   
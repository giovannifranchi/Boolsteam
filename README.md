DATABASE VIDEOGAME TABLE INFO:

-game -> varchar;
-gameLink -> text/nullable;
-year -> year;
-genre -> varchar(50);
-dev -> varchar(100);
-devLink -> text/nullable;
-publisher -> varchar;
-publisherLink -> text/nullable;
-platform -> varchar(30);
-platformLink -> text;
-description -> text/nullable;
-score -> float(3,1)/nullable;
-review -> text/nullable; 
-pegi -> tinyint(21)/nullable;

*Scegliamo di mettere delle info "nullable" perche' non sono presenti nel json di riferimento.


   
   
   
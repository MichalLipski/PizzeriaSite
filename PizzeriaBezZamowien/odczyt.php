<?php

$nazwa_pliku = "plik.txt";

if (is_readable($nazwa_pliku))
  {
   if ($plik = fopen($nazwa_pliku, "r"))
     {
      $dane = fread($plik, filesize($nazwa_pliku));
      
      if ($dane === FALSE) echo "Odczyt danych z pliku nie powiódł się...";
        else echo "odczytane dane: ".$dane."<br />";

      fclose($plik);

     } else echo "Nie mogę nawiązać połączenia z plikiem...";

  } else echo "Z pliku nie można odczytać informacji lub on nie istnieje...";

?>
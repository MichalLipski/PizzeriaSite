<?php
$paragon=$_POST['paragon'];
$tresc=$_POST['tresc'];

// zmienna $dane, która będzie zapisana
// może także pochodzić z formularza np. $dane = $_POST['dane'];
$dane=$paragon."\r\n".$tresc."\r\n" ;

// przypisanie zmniennej $file nazwy pliku
$file="kodbierz.txt";

// uchwyt pliku, otwarcie do odczytu i dopisania
$fp=fopen("$file", "r+");

// dodanie do zmiennej dane poprzedniej zawartości pliku
$dane=$dane.fread($fp, filesize($file));

// ustawienie kursora na początku pliku
rewind($fp);

// blokada pliku do zapisu
flock($fp, 2);

// zapisanie danych do pliku
fwrite($fp, $dane);

// odblokowanie pliku
flock($fp, 3);

// zamknięcie pliku
fclose($fp);
echo "hello\nworld";
?>
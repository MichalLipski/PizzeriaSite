<?php

$telefon=$_POST['telefon'];
$ulica=$_POST['ulica'];
// zmienna $dane, która będzie zapisana
// może także pochodzić z formularza np. $dane = $_POST['dane'];
$dane=$telefon."\t".$ulica."\r\n" ;

// przypisanie zmniennej $file nazwy pliku
$file="plik.txt";

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




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zamowienia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO 'order'(telefon,ulica) VALUES ( $telefon,$ulica )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
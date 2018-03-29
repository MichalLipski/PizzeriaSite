<?php
$paragon=$_POST['paragon'];
$tresc=$_POST['tresc'];


session_start();
$connect = mysql_connect('localhost', 'root', '') or die('Nie mozna');
$db = mysql_select_db('zamowienia') or die('Nie ma');
$zapytanie = mysql_query("SELECT * FROM `order` WHERE `id_order`=$paragon");

$ile = mysql_num_rows($zapytanie);
if($paragon and $tresc) {
    

    if($ile!=0){    
        $db2 = mysql_select_db('komentarze') or die('Nie ma');
        $zapytanie2 = mysql_query("SELECT * FROM `commit` WHERE `id_paragon`=$paragon");
        $ile2 = mysql_num_rows($zapytanie2);
        if($ile2!=0){
            echo"jest juz";
           }
         else{ 
            include('bazak.php');
            $sth = $pdo->prepare( 'INSERT INTO `commit`(`id_paragon`, `komentarz`) VALUES ( :paragon, :tresc)' );
            $sth->bindParam( ':paragon', $_POST['paragon'] );
            $sth->bindParam( ':tresc', $_POST['tresc'] );
            $sth->execute();
         }
        
    }
    else{
        
        }
        
}
header('Location: index.php');
?>
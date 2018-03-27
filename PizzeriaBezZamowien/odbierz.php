<?php

$telefon=$_POST['telefon'];
$ulica=$_POST['ulica'];


if($telefon and $ulica) {
    
include('bazaz.php');
$sth = $pdo->prepare( 'INSERT INTO `order`(`telefon`, `ulica`) VALUES ( :telefon, :ulica)' );
$sth->bindParam( ':telefon', $_POST['telefon'] );
$sth->bindParam( ':ulica', $_POST['ulica'] );
$sth->execute();

}
header('Location: index.php');
?>
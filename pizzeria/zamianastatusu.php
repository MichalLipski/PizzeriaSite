<?php
$status=$_POST['s1'];
$paragon=$_POST['item_id'];

echo $paragon;
echo $status;


$pdo = new PDO('mysql:host=localhost;dbname=zamowienia;charset=utf8', 'root', '');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo -> prepare("UPDATE `order` SET `status`=:statu WHERE `paragon` = :paragon");
        $stmt->bindParam( ':paragon', $_POST['item_id']);
        $stmt->bindParam( ':statu', $_POST['s1'] );
        $ilosc = $stmt -> execute(); 
        header('Location: zamowienia.php');
?>
<?php
$promo=$_POST['wybor'];
$ud_id='1';
$db= new PDO('mysql:host=localhost;dbname=promocja','root','');
$statement =$db->prepare("UPDATE promotion SET promo=:promo WHERE Id_promotion=:id");
$statement->bindValue(':id', $ud_id, PDO::PARAM_STR);
$statement->bindValue(':promo', $promo, PDO::PARAM_STR);
$statement->execute();
header('Location: promocjep.php');
?>
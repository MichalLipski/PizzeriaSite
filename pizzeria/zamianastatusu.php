
 <?php
$paragon = substr($_POST['statu'], -1); 
$status = substr($_POST['statu'], 0, -1); 

echo $paragon;
echo $status;


$pdo = new PDO('mysql:host=localhost;dbname=zamowienia;charset=utf8', 'root', '');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo -> prepare("UPDATE `order` SET `status`=:statu WHERE `paragon` = :paragon");
        $stmt->bindParam( ':paragon', $paragon);
        $stmt->bindParam( ':statu', $status );
        $ilosc = $stmt -> execute(); 
        header('Location: zamowienia.php');
?> 


<?php

$telefon=$_POST['telefon'];
$ulica=$_POST['ulica'];
$nrdomu=$_POST['nrdomu'];
$nrmieszkania=$_POST['nrmieszkania'];
echo $nrmieszkania;
if($nrmieszkania==''){
    $nrmieszkania='-';
}else{
    
}
$pom=0;
$pizza;
$rozmiar;
$ilosc;
for( $i = 0; $i <= 999; $i++ ){
   
    $piz='pizzaType'.$i;
    $rozmia='pizzaSize'.$i;
    $ilos='pizzaAmount'.$i;
    if(!empty($_POST[$piz]))
    {
    $pizza[$i]=$_POST[$piz];

    $pom++;
}

if(!empty($_POST[$rozmia]))
{
$rozmiar[$i]=$_POST[$rozmia];

}

if(!empty($_POST[$ilos]))
{
    $ilosc[$i]=$_POST[$ilos];

}

}


session_start();
$connect = mysql_connect('localhost', 'root', '') or die('Nie mozna');
$db = mysql_select_db('zamowienia') or die('Nie ma');
$zapytanie = mysql_query("SELECT * FROM `order`ORDER BY `id_order` DESC LIMIT 1");
$r = mysql_fetch_assoc($zapytanie);
$nrparagon=$r['paragon'];
$nrparagon++;

for( $i = 0; $i < $pom; $i++ ){
$p=$pizza[$i];
$roz=$rozmiar[$i];
$ilo=$ilosc[$i];
$status="oczekuje";
 include('bazaz.php');
 $sth = $pdo->prepare( 'INSERT INTO `order`(`paragon`,`telefon`, `ulica`,`nr_domu`,`nr_mieszkania`,`pizza`,`rozmiar`,`ilosc`,`status`) VALUES ( :paragon, :telefon, :ulica , :nrdomu, :nrmieszkania, :pizza, :rozmiar, :ilosc, :statu)' );
 $sth->bindParam( ':paragon', $nrparagon );
 $sth->bindParam( ':telefon', $_POST['telefon'] );
 $sth->bindParam( ':ulica', $_POST['ulica'] );
 $sth->bindParam( ':nrdomu', $_POST['nrdomu'] );
 $sth->bindParam( ':nrmieszkania', $nrmieszkania );
 $sth->bindParam( ':pizza', $p );
 $sth->bindParam( ':rozmiar', $roz);
 $sth->bindParam( ':ilosc', $ilo );
 $sth->bindParam( ':statu', $status );
 $sth->execute();

}
header('Location: index.php');

?>
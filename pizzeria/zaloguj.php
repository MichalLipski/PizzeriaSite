<?php 
session_start();
	
if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
    header('Location: index.php');
    exit();
}
require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{

    echo"Error: ".$polaczenie->connect_errno;
}else{
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$login = htmlentities($login, ENT_QUOTES, "UTF-8");
$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

if ($rezultat = @$polaczenie->query(
    sprintf("SELECT * FROM logowanie WHERE user='%s' AND pass='%s'",
    mysqli_real_escape_string($polaczenie,$login),
    mysqli_real_escape_string($polaczenie,$haslo))))
    {
        echo "Error: ";
    $ilu_userow=$rezultat->num_rows;
    if($ilu_userow>0){
        $_SESSION['zalogowany'] = true;
        $wiersz=$rezultat->fetch_assoc();
        $_SESSION['user']=$wiersz['user'];

        unset($_SESSION['blad']);
        $rezultat->free_result();
        if($login=='pracownik'){
            header('Location: zamowienia.php');
        }elseif($login=='kierownik'){
            header('Location: zamowienia1.php');
        }
        
    }
    else{
        echo "Error: ";
$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
    }
}
$polaczenie->close();
}
?>

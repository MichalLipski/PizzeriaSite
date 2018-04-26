<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

    <!DOCTYPE html>
    <html>

    <head>
        <html lang="pl">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pizza Papa Malix</title>
        <meta name="description" content="Strona internetowa najlepszej pizzeri w Koszalinie! Papa Malix" />
        <meta name="keywords" content="smaczne, jedzenie, pizza, koszalin" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="script1.js"></script>

    </head>

    <body>
        <div id="whole">
            <div id="container">
                <div id="logo" style="height:326px">


                    <?php

echo "<p>Widok ".$_SESSION['user'].'a [ <a href="logout.php">Wyloguj się!</a> ]</p>';

?>
                       <br/><br/><img src="img/1.gif" style="margin-left:-15px" /><br/>
                    <img src="img/2.gif" style="margin-left:-15px" />


                        <div id="id01" class="modal">
                            <form action="zaloguj.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>


                                <div class="container" style="background-color:#f1f1f1">

                                </div>
                            </form>

                        </div>

                </div>

                <div id="menu" style="background-color:#AE1506">
                <a href="zamowienia.php">
                        <div class="option" style="width:313px">Zamowienia</div>
                    </a>
                    <a href="promocjep.php">
                        <div class="option" style="width:313px">Promocje</div>
                    </a>
                    <a href="komentarzep.php">
                        <div class="option" style="width:313px; color:yellow; background-color:#CB0602">Komentarze</div>
                    </a>
                    <div style="clear:both"></div>
                </div>




                <div id="content" style="width:900px">

                    <?php
                 header("Content-Type: text/html; charset=UTF-8");    
$con = mysql_connect("localhost","root","");
mysql_set_charset('utf8',$con); 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("komentarze", $con);
$com = 'commit';
/* zapytanie do konkretnej tabeli */
$wynik = mysql_query("SELECT * FROM $com")
or die('Błąd zapytania');
echo "<table cellpadding=\"2\">";
$par='Paragon';
$kom='Komentarz';
$pus="";
if(mysql_num_rows($wynik) > 0) {
    /* jeżeli wynik jest pozytywny, to wyświetlamy dane */
    echo "<tr>";
    echo "<td>".$par."</td>";
    echo "<td>".$pus."</td>";
    echo "<td>".$kom."</td>";
    echo "</tr>";
    while($r = mysql_fetch_assoc($wynik)) {
        
       
        
        echo "<tr>";
        echo "<td>".$r['id_paragon']."</td>";
        echo "<td>".$pus."</td>";
        echo "<td>".$r['komentarz']."</td>";
        
        echo "</tr>";
    }
    echo "</table>";
}

?>

                </div>
             
                <div id="footer">
                    Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
                </div>
            </div>
        </div>

    </body>

    </html>
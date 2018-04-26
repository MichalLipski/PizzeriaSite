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
        <meta charset="utf-8" />
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
                        <img src="img/papanapis.gif" style="margin-left:-15px; margin-top:-15px;">


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
                        <div class="option" style="width:313px; color:yellow; background-color:#CB0602">Promocje</div>
                    </a>
                    <a href="komentarzep.php">
                        <div class="option" style="width:313px">Komentarze</div>
                    </a>
                    <div style="clear:both"></div>
                </div>



                <div id="content">
                    <form action="promoo.php" method="post">
                        <select name="wybor">
                            <option value="Apollo">Apollo</option>
                            <option value="Amerykanska">Amerykanska</option>
                            <option value="Everest">Everest</option>
                            <option value="Peperoni">Peperoni</option>
                            <option value="Cukinio">Cukinio</option>
                            <option value="Fireball">Fireball</option>
                            <option value="Trzy sery">Trzy sery</option>
                            <option value="Grecka">Grecka</option>
                            <option value="Capricciosa">Capricciosa</option>
                            <option value="Tomato">Tomato</option>
                            <option value="Zbójnicka">Zbójnicka</option>
                            <option value="Vegetariana">Vegetariana</option>

                        </select>
                       
                        <div>
                            <input type="submit"id="wyslij" value="Wyślij" name="submit" />
                        </div>
                    </form>
                    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("promocja", $con);
$com = 'promotion';
/* zapytanie do konkretnej tabeli */
$wynik = mysql_query("SELECT * FROM $com")
or die('Błąd zapytania');

if(mysql_num_rows($wynik) > 0) {

    while($r = mysql_fetch_assoc($wynik)) {
        
        echo "<span style=' font-size: 32px; font-style: italic; '>Dzisiaj w promocji pizza: </span>",
         "<span style=' font-size: 32px; font-weight:800;
         font-style:italic;'>".$r['promo']."</span>";
     
    }

}

?>
                </div>
                <div id="sidebar">
                    <img src="https://zapodaj.net/images/bf45b73492fb8.jpg">

                </div>
                <div id="footer">
                    Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
                </div>
            </div>
        </div>

    </body>

    </html>
﻿<?php

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
    <meta name ="description" content="Strona internetowa najlepszej pizzeri w Koszalinie! Papa Malix"/>
    <meta name = "keywords" content="smaczne, jedzenie, pizza, koszalin"/>
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

echo "<p>Widok ".$_SESSION['user'].'a [ <a href="logout.php" style="text-decoration: none">Wyloguj się!</a> ]</p>';

?>
<img src="img/papanapis.gif">
            

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
            
            <a href="zamowienia1.php">
                     <div class="option"style="width:478px; color:yellow; background-color:#CB0602">Zamowienia</div> </a>
                 
             <a href="komentarzep1.php">
                     <div class="option"style="width:478px">Komentarze</div> </a>
                 <div style="clear:both"></div>
         </div> 
        
        
        
        <div id="content">

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

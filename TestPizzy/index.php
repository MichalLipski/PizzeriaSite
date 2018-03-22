<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: zamowienia.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
	<script src="controller.js"></script>

</head>

<body ng-controller="formCtrl">
    <div id="whole">
    <div id="container">
        <div id="logo" background>
                <button type="button" id="button1" style="float:right;" onclick="document.getElementById('id01').style.display='block'">Zaloguj</button>
                <!--saaaaaaaassssssalllllllllllllllllllllllllllllllllllllllllllll -->
            

<div id="id01" class="modal">
  
<form action="zaloguj.php" method="post"> 
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Login:</b></label>
      <input type="text" placeholder="Enter Username" name="login" required/>
      <label for="psw"><b>Haslo:</b></label>
      <input type="password" placeholder="Enter Password" name="haslo" required/>
        
      <input type="submit" value="Zaloguj"/> 
    </div>

    <div class="container" style="background-color:#f1f1f1">
        
    </div>
  </form>
  <?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
    ?>
  
</div>
                
                       
                      <script>
                      // Get the modal
                      var modal = document.getElementById('id01');
                      
                      // When the user clicks anywhere outside of the modal, close it
                      window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                      }
                      </script>
                      


        </div>
        <div id="topbar">
            <div id="topbarL">
                <img src=".\img\miniLogo.jpg" width="130px" height="130px">
            </div>
            <div id="topbarR">
            <img src="img/giphy.gif" height="200" width="796">
            </div>
            <div style="clear:both"></div>
           
        </div>
        <div id="menu">
            
            <a href="index.php">
                    <div class="option">Złóż zamówienie!</div> </a>
                    <a href="menu.html">
                        <div class="option">Menu</div>  
                    </a>
                    <a href="promocje.html">
                        <div class="option">Promocje</div>  
                    </a>
                    <a href="kontakt.php">
                        <div class="option">Kontakt</div> 
                    </a>
                <div style="clear:both"></div>
        </div>
        
        
        
        <div id="content">
        <form action="odbierz.php" method="post">
      <div><label for="telefon">Telefon:</label><input id="telefon" name="telefon" /></div>
      <div><label for="ulica">Ulica i nr domu:</label><input id="ulica" name="ulica" /></div>

      
      <div><input type="submit" value="Wyślij" name="submit" /></div>
   </form>
        </div>
        <div id="sidebar">
            <img src=".\img\reklama.jpg" width="247">
    </div>
        <div id="footer">
                Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
            </div>
    </div>
</div>

</body>

</html>

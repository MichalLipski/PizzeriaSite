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
    <script src="script1.js"></script>

</head>

<body ng-controller="formCtrl">
    <div id="whole">
    <div id="container">
        <div id="logo" background>
<img src="img/papanapis.gif">
                <button type="button" id="button1" style="float:right;" onclick="document.getElementById('id01').style.display='block'">Zaloguj</button>
                <!--saaaaaaaassssssalllllllllllllllllllllllllllllllllllllllllllll -->
            


                    <div id="id01" class="modal">
                        <div id=”wrapper”>
                            <form action="zaloguj.php" method="post">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <div class=”content”>
                                    <br/>
                                    <br/>
                                    <div class=”element”>
                                        <label for="uname">
                                            <b>Login: </b>
                                        </label>
                                        <input type="text" placeholder="Enter Username" name="login">
                                    </div>
                                    </br>
                                    <div class=”element”>
                                        <label for="psw">
<<<<<<< HEAD
                                            <b>Haslo:</b>
=======
                                            <b>Haslo: </b>
>>>>>>> dev
                                        </label>
                                        <input type="password" placeholder="Enter Password" name="haslo">
                                    </div>
                                    <div id="zalogujsie">
                                        <input type="submit" value="Zaloguj" />
                                    </div>
                                </div>
                            </form>
                            <?php
 if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
    ?>
                        </div>
                
                        </div>
        </div>
    
        <div id="menu">
            
            <a href="index.php">
                    <div class="option">Zamów pizze!</div> </a>
                    <a href="menu.html">
                        <div class="option">Nasze pizze</div>  
                    </a>
                    <a href="promocje.php">
                        <div class="option">Promocje</div>  
                    </a>
                    <a href="kontakt.php">
                        <div class="option">Kontakt</div> 
                    </a>
                <div style="clear:both"></div>
        </div>
        
        
        
        <div id="content">
            <img src=".\img\zamawiam.png">
            <div class="dottedLine"></div>
            <form action="odbierz.php" method="post">
                        <div>
                            <label for="telefon">Telefon:</label>
<<<<<<< HEAD
=======
                            <label>
>>>>>>> dev
                            <input id="telefon" name="telefon" />
                        </div>
                        <div>
                            <label for="ulica">Ulica i nr domu:</label>
                            <input id="ulica" name="ulica" />
                        </div>


                        <div>
                            <input type="submit" value="Wyślij" name="submit" />
                        </div>
                    </form>
        </div>
        <div id="sidebar">
            <img src="https://zapodaj.net/images/9b9ccd005175a.jpg">
            
    </div>
        <div id="footer">
                Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
            </div>
    </div>
</div>

</body>

</html>

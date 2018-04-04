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
        <html lang="pl" ng-app="agendaEditor">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pizza Papa Malix</title>
        <meta name="description" content="Strona internetowa najlepszej pizzeri w Koszalinie! Papa Malix" />
        <meta name="keywords" content="smaczne, jedzenie, pizza, koszalin" />
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
                                        <input type="text" id="text" placeholder="Enter Username" name="login">
                                    </div>
                                    </br>
                                    <div class=”element”>
                                        <label for="psw">
                                            <b>Haslo: </b>
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
                        <div class="option" style="color:yellow; background-color:#CB0602">Zamów pizze!</div>
                    </a>
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
                            
                            <label>
                                <input id="telefon" name="telefon" placeholder="Telefon:" onfocus="this.placeholder='';" onblur="this.placeholder='Telefon:';" />
                        </div>
                        <div>
                            <!-- <label for="ulica">Ulica* </label> -->
                            <input id="ulica" name="ulica" placeholder="Ulica :" onfocus="this.placeholder='';" onblur="this.placeholder='Ulica: ';" /><br/>
                            <!-- <label for="ulica"> Nr domu* </label> -->
                            <input id="ulica" name="ulica" size="10" placeholder="Nr domu: " onfocus="this.placeholder='';" onblur="this.placeholder='Nr domu: ';" /><br/>
                            <!-- <label for="ulica"> Nr mieszkania </label> -->
                            <input id="ulica" name="ulica" size="10" placeholder="Nr mieszkania: " onfocus="this.placeholder='';" onblur="this.placeholder='Nr mieszkania: ';" /><br/>
                        </div>
                        <br />
                        <table>
		<tr>
			<td>Pizza: </td>
			<td>Rozmiar: </td>
			<td>Ilość: </td>
			<td></td>
		</tr>
		<tr ng-repeat="item in list" ng-click="$last && addItem()">
			<td> 
                      <select name="wybor" ng-model="item.title">
                            <option value="Apollo">Apollo</option>
                            <option value="Amerykanska">Amerykanska</option>
                            <option value="Everest">Everest</option>
                            <option value="Peperoni">Peperoni</option>
                            <option value="Cukinio">Cukinio</option>
                            <option value="FireBall">FireBall</option>
                            <option value="Trzy sery">Trzy sery</option>
                            <option value="Grecka">Grecka</option>
                            <option value="Capricciosa">Capricciosa</option>
                            <option value="Tomato">Tomato</option>
                            <option value="Zbójnicka">Zbójnicka</option>
                            <option value="Vegetariana">Vegetariana</option>

                        </select>
                        </td>
			<td>
            <select name="wybor" ng-model="item.name">
                            <option value="Mała">Mała</option>
                            <option value="Średnia">Średnia</option>
                            <option value="Duża">Duża</option>
                        </select>
                        </td>
			<td><input type="text" id="paragon" ng-model="item.surname"></td>
			<td ng-if="!$first"><button ng-click="list.splice($index, 1)">-</button></td>
		</tr>
	</table>
    Wynik:
	<div ng-repeat="item in myResult() track by $index">{{item}}<br /></div>
                        <div>
                            <input type="submit" id="wyslij" value="Wyślij" name="submit" />
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
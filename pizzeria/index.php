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
        <meta name="description" content="Strona internetowa najlepszej pizzeri w Koszalinie! Papa Malix" />
        <meta name="keywords" content="smaczne, jedzenie, pizza, koszalin" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <div id="whole">
            <div id="container">
                <div id="logo" background>
                   
                    <button type="button" id="button1" style="float:right;" onclick="document.getElementById('id01').style.display='block'">Zaloguj</button>
                    <br/><br/>
                    <br/>
                    <img src="img/1.gif" style="margin-left:-22px" /><br/>
                    <img src="img/2.gif" style="margin-left:-18px" />

                    <div id="id01" class="modal" style="width:302px; height:242px">
                        <div id=”wrapper”>
                            <form action="zaloguj.php" method="post">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <div class=”content” style="border: 1px solid black;width:300px">
                                    <br/>
                                    <br/>
                                    <div class=”element” style="margin-left:15px">
                                        <label for="uname">
                                            <b>Login: </b>
                                        </label>
                                        <input type="text" id="text" placeholder="Enter Username" name="login">
                                    </div>
                                    </br>
                                    <div class=”element” style="margin-left:15px">
                                        <label for="psw">
                                            <b>Haslo: </b>
                                        </label>
                                        <input type="password" placeholder="Enter Password" name="haslo">
                                    </div>
                                    <div id="zalogujsie">
                                        <input type="submit" id="wyslij" value="Zaloguj" />
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
                    <div>  <button id="addNewPizzaBtn" style="float: left; margin-right:10px" >Dodaj nową pizze</button></div>
                        <form id="pizzaOrderForm" method="post" action="odbierz.php">
                    
                        <div><input id="addNewPizzaBtn" value="Zamów" type="submit" ></div>
                
                    <div>
                    
                        
                        <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" id="telefon" required name="telefon" placeholder="Telefon:" onfocus="this.placeholder='';" onblur="this.placeholder='Telefon:';"
                        />
                    </div>
                    <div>
                       
                        <input id="ulica" required name="ulica" placeholder="Ulica:" onfocus="this.placeholder='';" onblur="this.placeholder='Ulica: ';" />
                        <br/>
                       
                        <input id="ulica" required name="nrdomu" size="10" placeholder="Nr domu: " onfocus="this.placeholder='';" onblur="this.placeholder='Nr domu: ';"
                        />
                        <br/>
                        
                        <input id="ulica" type="number"  name="nrmieszkania"  placeholder="Nr mieszkania: " onfocus="this.placeholder='';" onblur="this.placeholder='Nr mieszkania: ';"
                        />
                        <br/>
                    </div>
                    <br />

                    
                    
                        <div class="labels" >
                            
                            <div class="form-in-line" style="margin-right: -2px"> 
                                <select name="pizzaType0" id="pizzaType">
                                    <option default value="Apollo">Apollo</option>
                                    <option value="Amerykanska">Amerykanska</option>
                                    <option value="Everest">Everest</option>
                                    <option value="Peperoni">Peperoni</option>
                                    <option value="Cukinio">Cukinio</option>
                                    <option value="FireBall">Fireball</option>
                                    <option value="Trzy sery">Trzy sery</option>
                                    <option value="Grecka">Grecka</option>
                                    <option value="Capricciosa">Capricciosa</option>
                                    <option value="Tomato">Tomato</option>
                                    <option value="Zbójnicka">Zbójnicka</option>
                                    <option value="Vegetariana">Vegetariana</option>
                                </select>
                            </div>
                            <div class="form-in-line"  style="margin-right: -2px">

                                <select name="pizzaSize0">
                                    <option default value="Mała">Mała</option>
                                    <option value="Średnia">Średnia</option>
                                    <option value="Duża">Duża</option>
                                </select>
                            </div>
                            <div class="form-in-line"  style="margin-right: -2px">

                                <input type="number" min="1" max="100"  id="pizzaAmount" value="1" name="pizzaAmount0" required>
                            </div>
                            <button id="deleteFirstPizza">Usuń pizze</button>
                        </div>

  
                    </form>
                    
                </div>


                      <div id="sidebar">
                  <br/><br/> Cena pizzy zależy od wielkości. <p>Wszystkie pizze z menu są w tej samej cenie.
                   Każda pizza posiada cienkie ciasto, oraz w jej cenie wliczone jest opakowanie.</p><br/>
                   Mała 24cm - 11zł<br/>
                   Średnia 30cm - 16zł<br/>
                   Duża 40cm - 25zł<br/>
                   <br/><br/>
                   Sosy:
                   <br/>
                   Czosnkowy - 1.50zł<br/>
                   Meksykański - 1.50zł<br/>
                   Ketchup - 1.50zł <br/><br/>
                   <img src="http://files.softicons.com/download/toolbar-icons/vista-people-icons-by-icons-land/png/256x256/Occupations/PizzaDeliveryman_Male_Light.png">

                </div>
                <div id="footer">
                    Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/form-serialize@0.7.2" type="text/module"></script>
        <script src="handlePizzaOrder.js"></script>
    </body>

    </html>
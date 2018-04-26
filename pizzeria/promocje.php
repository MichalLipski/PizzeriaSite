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
        <div id="logo" background>
            
        <br/><br/>
            <br/>
            <img src="img/1.gif" style="margin-left:-22px" /><br/>
            <img src="img/2.gif" style="margin-left:-18px" />
                
            

<div id="id01" class="modal">
  
  
</div>
             

        </div>
       
        <div id="menu">
            
            <a href="index.php">
                    <div class="option">Zamów pizze!</div> </a>
                    <a href="menu.html">
                        <div class="option">Nasze pizze</div>  
                    </a>
                    <a href="promocje.php">
                        <div class="option"style="color:yellow; background-color:#CB0602">Promocje</div>  
                    </a>
                    <a href="kontakt.php">
                        <div class="option">Kontakt</div> 
                    </a>
                <div style="clear:both"></div>
        </div>
        
        
        
        <div id="content">

	    <img src=".\img\promocje.png">
            <div class="dottedLine"></div>
            <div style="margin-top:150px">
            <br />
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
        
         echo "<span style='color:black; font-size: 32px; font-style: italic; '>Dzisiaj w promocji pizza: </span>",
         "<span style='color:black; font-size: 32px; 
         font-style:italic;'>".$r['promo']."</span>";
    
    }

}

?> 
<br />
<br />
<br />
            <img src=".\img\promka.png" width="300px" height="300px">
            <img src=".\img\promocja.png" width="300px" height="300px">
            <br/>
</div>
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

</body>

</html>

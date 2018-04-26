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
                        <div class="option" style="width:313px; color:yellow; background-color:#CB0602">Zamowienia</div>
                    </a>
                    <a href="promocjep.php">
                        <div class="option" style="width:313px">Promocje</div>
                    </a>
                    <a href="komentarzep.php">
                        <div class="option" style="width:313px">Komentarze</div>
                    </a>
                    <div style="clear:both"></div>
                </div>




                <div id="content">
                <?php

header("Content-Type: text/html; charset=UTF-8");    
$connect = mysql_connect('localhost', 'root', '') or die('Nie mozna');
$db = mysql_select_db('zamowienia') or die('Nie ma');
mysql_set_charset('utf8',$connect); 
$pus="";


for( $i = 0; $i < 99; $i++ ){
$wynik = mysql_query("SELECT * FROM `order` WHERE paragon='$i'")or die('Błąd zapytania');
$cc = mysql_query("SELECT * FROM `order` WHERE paragon='$i'")or die('Błąd zapytania');


if(mysql_num_rows($wynik) > 0) {
/* jeżeli wynik jest pozytywny, to wyświetlamy dane */
$c = mysql_fetch_assoc($cc);
echo "<table cellpadding=\"2\" >";
echo "<tr>";
echo "<td >".'Telefon: '."<br/>".$c['telefon']."</td>";
echo "<td >".'Ulica: '."<br/>".$c['ulica']."</td>";
echo "<td >".'Nr domu: '."<br/>".$c['nr_domu']."</td>";
echo "<td >".'Nr mieszkania: '."<br/>".$c['nr_mieszkania']."</td>";
echo"<td> <form action=\"zamianastatusu.php\" method=\"POST\">
<select name=\"s1\">
<option value=\"w realizacji\">w realizacji</option>
<option value=\"dostarczone\">dostarczone</option>
<option value=\"anulowane\">anulowane</option>
</select>
<input type=\"submit\" value=\"Zapisz\" id=\"zapispizza\" >
<input name=\"item_id\"type=\"hidden\" value=\"$c[paragon]\"></input>
</form></td>";
echo "</tr>";
echo "</table>";
echo "<table cellpadding=\"2\" style=\" border-bottom: 5px solid black\">";
echo "<tr>";
echo "<td >".$pus."</td>";
echo "</tr>";
while($r = mysql_fetch_assoc($wynik)) {

echo "<tr>";
echo "<td >".'Pizza: '."<br/>".$r['pizza']."</td>";
echo "<td >".'Rozmiar: '."<br/>".$r['rozmiar']."</td>";
echo "<td >".'Ilość: '."<br/>".$r['ilosc']."</td>";
echo "<td >".'Status: '."<br/>".$r['status']."</td>";
echo "<td >".$pus."</td>";
// echo "<td width=\"160\" height=\"60\" >".$r['status']."</td>";


echo "</tr>";

}

}
else{
    
}
echo "<tr>";
echo "<td >".$pus."</td>";
echo "</tr>";

echo "<tr>";
echo "<td >".$pus."</td>";
echo "</tr>";
echo "<tr>";
echo "<td >".$pus."</td>";
echo "</tr>";


echo "</table>";
}

?>
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
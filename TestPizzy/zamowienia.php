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
		<?php

echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';

?>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="file:///C:/Users/admin/Desktop/HTML/CSS%20odc2/pizzeria/menu.html">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>


    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
	</div>
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
            
            		<a href="zamowienia.php">
                    <div class="optionz">Zamowienia</div> </a>
                    <a href="komentarze.php">
                        <div class="optionz">Komentarze</div>  
                    </a>
                   
                <div style="clear:both"></div>
        </div>
        
        
        
        <div id="content">
        <object data="plik.txt" type="text/plain" width="500px" height="500px"></object>
		
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

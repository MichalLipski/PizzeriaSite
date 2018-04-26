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
            <div id="logo" background>

                <br/><br/>
            <br/>
            <img src="img/1.gif" style="margin-left:-22px" /><br/>
            <img src="img/2.gif" style="margin-left:-18px" />


            </div>

            <div id="menu">

                <a href="index.php">
                    <div class="option">Zamów pizze!</div>
                </a>
                <a href="menu.html">
                    <div class="option">Nasze pizze</div>
                </a>
                <a href="promocje.php">
                    <div class="option">Promocje</div>
                </a>
                <a href="kontakt.php">
                    <div class="option"style="color:yellow; background-color:#CB0602">Kontakt</div>
                </a>
                <div style="clear:both"></div>
            </div>



            <div id="content2">
            <span style=" font-size: 30px;">Kom: </span> <span style="font-size: 30px;">889 998 990</span>
            <br />
            <br />
                <form action="kodbierz.php" method="post">
                    <div>
                        <label for="paragon">Numer paragonu:</label>
                        <input id="paragon" name="paragon" style="width: 13.5%; height:50px" />
                    </div>
                    <textarea name="tresc" style="width: 90%; height:200px; resize: none;">Tutaj wpisz komentarz</textarea>
                    <div>
                        <input type="submit" id="wyslij" value="Wyślij" />
                    </div>
                </form>
                <br/><br/>
                <h3>Chcesz odebrać pizzę osobiście? Znajdziesz nas tutaj:<h3/>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2333.671442022936!2d16.194991915870947!3d54.20360138016759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4701cd6c25a0d01b%3A0x18c121a16eb15d35!2sPolitechnika+Koszali%C5%84ska!5e0!3m2!1spl!2spl!4v1522267649294" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


            </div>
            <div id="footer">
                Pizzeria Papa Malix - Najsmaczniejsza Pizza w Koszalinie!. &copy; Wszelkie prawa zastrzeżone!
            </div>
        </div>
    </div>

</body>

</html>
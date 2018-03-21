function myFunction() {
    var txt;
    var login = prompt("Login:", "");
    var password = prompt("Haslo:", "");
    if (login == "admin" && password=="admin") {
        window.location.href='logowanie.html';
    } else if (login == "worker" && password=="worker") {
        window.location.href='promocje.html';
    } else {
     window.location.href='http://www.google.pl';
    }
    
    document.getElementById("demo").innerHTML = txt;
}
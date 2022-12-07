  <div id="main">
            <div class="login-page">
              <div class="form">
                <form class="login-form">
                  <input type="text" placeholder="Imię"/>
                  <input type="text" placeholder="Nazwisko"/>
                  <input type="password" placeholder="Hasło"/>
                  <input type="text" placeholder="Adres E-Mail"/>
                  <button>Stwórz konto</button>
                  <p class="message">Już zarejestrowany? <a href="index.php?strona=login">Zaloguj się</a></p>
                </form>
                <form class="register-form" method="post" action="#">
                  <input type="text" placeholder="nazwa użykownika"/>
                  <input type="password" placeholder="hasło"/>
                  <button type="button"></button>
                  <p class="message">Zarejestruj się? <a href="#">Utwórz konto</a></p>
                </form>
              </div>
            </div>
      </div>
<?php
require("conf.php");
$xlogin = $_POST['login'];
$xhaslo = $_POST['haslo'];
$zxhaslo = $_POST['vxhaslo'];

if($xhaslo == $zxhaslo){
  mysqli_query($conn, "INSERT INTO Uzytkownicy VALUES(",'$xlogin','$xhaslo')");
  header("Location:index.php?strona=register");
}
else {
  echo "Hasla sie roznia";
}
?>
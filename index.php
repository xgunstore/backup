<?php
$conn = new mysqli("sql205.epizy.com","epiz_32912707","3dYaUWHN6avTu","epiz_32912707_Magazyn");
?>




<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Prawdziwy sklep</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php?strona=1">Sklep</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                   <form class="d-flex p-4" role="search" method="post" action="index.php?strona=wyszukaj">
                     <input class="form-control ms-2" name="szukaj" type="search" placeholder="Search" aria-label="Search">
                     <button class="btn btn-outline-success" type="submit">Szukaj</button>
                   </form>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?strona=login">Zaloguj</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?strona=produkty">Produkty</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="index.php?strona=kontakt">Kontakt</a>
                      </li>
                      <button class="koszyk" onclick="location.href='index.php?strona=koszyk';" type="button">Koszyk</button> 
                    </ul>
                 </div>
               </div>
             </nav>
             <ul class="nav justify-content-center">   
              <li>
                <a href="#">Amunicja &#9662;</a>
                <ul class="dropdown">
                    <li><a href="#">APFSDS</a></li>
                    <li><a href="#">HEATFS</a></li>
                    <li><a href="#">ATGM</a></li>
                </ul>
            </li>
            <li>
              <a href="#">Bron lekka &#9662;</a>
              <ul class="dropdown">
                  <li><a href="#">AKM</a></li>
                  <li><a href="#">AKMS</a></li>
                  <li><a href="#">RMK</a></li>
              </ul>
          </li>
              <li>
                  <a href="#">Bron ciezka &#9662;</a>
                  <ul class="dropdown">
                      <li><a href="#">6P49</a></li>
                      <li><a href="#">6P51</a></li>
                      <li><a href="#">KPVt</a></li>
                  </ul>
              </li>
              <li>
                <a href="#">Drony &#9662;</a>
                <ul class="dropdown">
                    <li><a href="#">Orion</a></li>
                    <li><a href="#">Orion-2</a></li>
                    <li><a href="#">Sirius</a></li>
                </ul>
            </li>
            <li>
              <a href="#">Pojazdy &#9662;</a>
              <ul class="dropdown">
                  <li><a href="#">T-64</a></li>
                  <li><a href="#">T-72</a></li>
                  <li><a href="#">T-80</a></li>
              </ul>
          </li>
            </ul>
            <div id="main">
                <?php
                  if(!isset($_GET['strona']))
                    {$plik="1";}
                  else {
                    $plik = $_GET['strona'];
                  }
                  $roz = ".php";
                  include("$plik$roz");
                  ?>
          </div>
			<footer class="bg-light text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">MENU</h5>

        <ul class="list-unstyled mb-0">
          <li class="li1">
            <a href="#!" class="text-dark">Strona Główna</a>
          </li>
          <li class="li1">
            <a href="#!" class="text-dark">Zaloguj/Zarejestruj</a>
          </li>
          <li class="li1">
            <a href="#!" class="text-dark">Kontakt</a>
          </li>
          <li class="li1">
            <a href="#!" class="text-dark">Kategorie</a>
          </li>
		   <li class="li1">
            <a href="#!" class="text-dark">Koszyk</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Kategorie</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Amunicja</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Broń ciężka</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Broń lekka</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Drony</a>
          </li>
		   <li>
            <a href="#!" class="text-dark">Pojazdy opancerzone</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Pomoc</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Śledź paczkę</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Zwróć produkt</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Promocje</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Nasze Media</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Instagram</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Reddit</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Twitter</a>
          </li>
        </ul>
      </div>
    </div>
	</div>
</footer>
</body>
</html>
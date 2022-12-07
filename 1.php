<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
   </div>
   <div class="carousel-inner">
  <div class="carousel-item active">
   <img src="2.jpg" class="d-block w-100" alt="...">
 </div>
<div class="carousel-item">
 <img src="1.jpg" class="d-block w-100" alt="...">
</div>
 <div class="carousel-item">
  <img src="3.jpg" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="4.jpg" class="d-block w-100" alt="...">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
</button>
</div>
<div class="products">Nasze polecane produkty</div>
<div class="panel-produkty-wyr">
<?php
session_start();
/* $wylosowanaTabelka = rand(1,5); */
$wylosowanaTabelka = '5';
$conn = new mysqli("sql205.epizy.com","epiz_32912707","3dYaUWHN6avTu","epiz_32912707_Magazyn");
if($wylosowanaTabelka == 1)
        {
          $tabelka = "Amunicja";
        }
        else if($wylosowanaTabelka == 2)
        {
          $tabelka = "BronLekka";
        }
        else if($wylosowanaTabelka == 3)
        {
          $tabelka = "BronCiezka";
        }
        else if($wylosowanaTabelka == 4)
        {
          $tabelka = "Drony";
        }
        else if($wylosowanaTabelka == 5)
        {
          $tabelka = "pojazdyOpancerzone";
        }  
          
        $wyroznione = mysqli_query($conn, "select * from $tabelka LIMIT 4");
        $identyfikator = mysqli_query($conn, "select identyfikator from $tabelka WHERE ID=1");
        if($identyfikator == 1)
        {
          ;
        }
        elseif($identyfikator == 2)
        {
          ;
        }
        elseif($identyfikator == 3)
        while($wiersz = mysqli_fetch_array($wyroznione))
        {
          /*echo '<div class="produkt-wyr"> <img src="data:image/jpeg;base64,'.base64_encode($wiersz['poZdjecie']).'"/> </div>'; */
          echo '<div class="produkt"><a href="index.php?strona=item& . $kategoria . =pojazdy&id='.$wiersz['poID'].'"><img src="data:image/jpeg;base64,'.base64_encode($wiersz['poZdjecie']).'"/></a></div>';
        }
        $_SESSION["wIdentyfikator"] = $identyfikator;
        $_SESSION["wyciagniete"] = $wyroznione;

?>
</div>
			 
      

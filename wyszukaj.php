<?php
    $conn = new mysqli("sql205.epizy.com","epiz_32912707","3dYaUWHN6avTu","epiz_32912707_Magazyn");
    $szukaj = $_POST['szukaj'];
?>

<div class="panel-produkty">
    <?php
        if(!empty($szukaj)) {
            $sqlAmunicja = "SELECT Amunicja.Dezygnacja,Amunicja.ID FROM Amunicja WHERE Amunicja.Dezygnacja LIKE '%$szukaj%'";
            $sqlBronLekka = "SELECT BronLekka.Model,BronLekka.ID,BronLekka.Zdjecie FROM BronLekka WHERE BronLekka.Model LIKE '%$szukaj%'";
            $sqlBronCiezka = "SELECT BronCiezka.Model,BronCiezka.ID,BronCiezka.Zdjecie FROM BronCiezka WHERE Amunicja.Model LIKE '%$szukaj%'";
            $sqlDrony = "SELECT Drony.Model,Drony.ID,Drony.Zdjecie FROM Amunicja WHERE Drony.Model LIKE '%$szukaj%'";
            $sqlPojazdyOpancerzone = "SELECT pojazdyOpancerzone.Model,pojazdyOpancerzone.poZdjecie,pojazdyOpancerzone.ID FROM pojazdyOpancerzone WHERE pojazdyOpancerzone.Model LIKE '%$szukaj%'";
            $wynikAmunicja = mysqli_query($conn,$sqlAmunicja);
            $wynikBronLekka = mysqli_query($conn,$sqlBronLekka);
            $wynikBronCiezka = mysqli_query($conn,$sqlBronCiezka);
            $wynikDrony = mysqli_query($conn,$sqlDrony);
            $wynikPojazdyOpancerzone = mysqli_query($conn,$sqlPojazdyOpancerzone);
                
            while ($wiersz = mysqli_fetch_array($wynikAmunicja)) {
                echo '<a href="index.php?strona=5&kategoria=Amunicja&ID='.$wiersz['ID'].'"><div class="produkt"></div></a>';
            }
            while ($wiersz = mysqli_fetch_array($wynikBronCiezka)) {
                echo '<a href="index.php?strona=5&kategoria=BronCiezka&ID='.$wiersz['ID'].'"><div class="produkt"><img src="data:image/jpeg;base64,'.base64_encode($wiersz['Zdjecie']).'"/></div></a>';
            }
            while ($wiersz = mysqli_fetch_array($wynikBronLekka)) {
                echo '<a href="index.php?strona=5&kategoria=BronLekka&ID='.$wiersz['ID'].'"><div class="produkt"><img src="data:image/jpeg;base64,'.base64_encode($wiersz['Zdjecie']).'"/></div></a>';
            }
            while ($wiersz = mysqli_fetch_array($wynikDrony)) {
                echo '<a href="index.php?strona=5&kategoria=Drony&ID='.$wiersz['ID'].'"><div class="produkt"><img src="data:image/jpeg;base64,'.base64_encode($wiersz['Zdjecie']).'"/></div></a>';
            }
            while ($wiersz = mysqli_fetch_array($wynikPojazdyOpancerzone)) {
                echo '<a href="index.php?strona=5&kategoria=pojazdyOpancerzone&ID='.$wiersz['ID'].'"><div class="produkt"><img src="data:image/jpeg;base64,'.base64_encode($wiersz['poZdjecie']).'"/></div></a>';
            }
        }
        
    
    
    
    ?>
</div>
<?php
    $conn = new mysqli("sql205.epizy.com","epiz_32912707","3dYaUWHN6avTu","epiz_32912707_Magazyn");

    $wiersz = mysqli_query($conn,"SELECT * FROM pojazdyOpancerzone WHERE poID='2'");
    while ($wynik = mysqli_fetch_array($wiersz)) {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($wynik['poZdjecie']).'"/>';
    }







?>
<center>
    OPIS
    <?php
        $conn = new mysqli("sql205.epizy.com","epiz_32912707","3dYaUWHN6avTu","epiz_32912707_Magazyn");

        $id = $_GET['ID'];
        $kategoria = $_GET['kategoria'];

        $wynik = mysqli_query($conn,"SELECT * FROM `{$kategoria}` WHERE `ID` = {$id}");
        $wiersz = mysqli_fetch_array($wynik);
        echo '<center>' . $wiersz['poID'] . '</center>';
        echo '<center>' . $wiersz['TypPojazdu'] . '</center>';
        echo '<center>' . $wiersz['Model'] . '</center>';
        echo '<center>' . $wiersz['Wariant'] . '</center>';
        echo '<center>' . $wiersz['RokProdukcji'] . '</center>';
        echo '<center>' . $wiersz['GlowneUzbrojenie'] . '</center>';
        echo '<center>' . $wiersz['SecUzbrojenie'] . '</center>';
        echo '<center>' . $wiersz['CoaxUzbrojenie'] . '</center>';
        echo '<center>' . $wiersz['TypLadowania'] . '</center>';
        echo '<center>' . $wiersz['AmmoRack'] . '</center>';
        echo '<center>' . $wiersz['HullArmor'] . '</center>';
        echo '<center>' . $wiersz['TurretArmor'] . '</center>';
        echo '<center>' . $wiersz['ERA'] . '</center>';
        echo '<center>' . $wiersz['Dym'] . '</center>';
        echo '<center>' . $wiersz['ESS'] . '</center>';
        echo '<center>' . $wiersz['Radar'] . '</center>';
        echo '<center>' . $wiersz['poZdjecie'] . '</center>';
    ?>
</center>
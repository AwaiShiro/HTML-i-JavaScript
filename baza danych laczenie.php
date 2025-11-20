<?php
$poloczenie=mysqli_connect("localhost","root","","4c_cos");
$zapytanie='SELECT  `nazwa`,  `cena`, `ilosc_sztuk`, `data_dodania` FROM `nagrody` WHERE  month(`data_dodania`)='.$_POST['checkbox'];
$wynik=mysqli_query($poloczenie,$zapytanie);
while(($wiersz=mysqli_fetch_array($wynik))!=NULL)
{
    echo $wiersz['nazwa']." ". $wiersz['cena']." ".$wiersz[2]."<br>";
}


?>
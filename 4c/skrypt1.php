<?php
$wzor='/^[A-ZŁŻŹŚÓĆŃ]{1}[a-zżąęółśźćń]+$/';

if(preg_match($wzor,$_POST['imie'])){
    echo($_POST['imie']);
    echo "<br>";
}
$wzorn='/^[A-ZŁŻŹŚÓĆŃ]{1}[a-zżąęółśźćń]+(\-[A-ZŁŻŹŚÓĆŃ]{1}[a-zżąęółśźćń]+)*$/u';
if(preg_match($wzorn,$_POST['nazwisko'])){
    echo($_POST['nazwisko']);
}
else{
    echo "zle nazwisko";
}
//echo($_POST["imie"]);
echo"<br>";
//echo($_POST["nazwisko"]);
//echo "<br>";
echo($_POST["select"]);
echo "<br>";
echo($_POST["radio"]);
echo "<br>";

echo "<br>";
if(isset($_POST["ch1"])){
    echo($_POST["ch1"]);
    echo "<br>";
}
if(isset($_POST["ch2"])){
    echo($_POST["ch2"]);

}
echo "<br>";
$wzore='/^[a-zżąęółśźćń]+(\-[a-zżąęółśźćń]+)*(\.[a-zżąęółśźćń]+)*\@[a-zżąęółśźćń]+[0-9]*(\.[a-zżąęółśźćń]+[0-9]*)*\.[a-zżąęółśźćń]+$/u';
if(preg_match($wzore,$_POST['email'])){
    echo($_POST['email']);
}
else{
    echo "zly email";
}
/*if(($_POST["select"])==67){
    echo "<br>";
    echo "kys";
}
else{
    echo "<br>";
    echo "nie kys";
}
*/
?>
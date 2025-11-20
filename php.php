<?php
   /* echo("czesc swiecie ");
    $fortntie=19;
    $zyd="nie lubie soku";
    echo($fortntie." ".$zyd);
    echo("<br>");
    if($fortntie==19){
        echo(" sigma ");
    }
    else{
        echo(" gej ");
    }
    while($fortntie>0){
        
        echo($fortntie);
        $fortntie--;
        echo("<br>")
        echo
    }
    for($i=0;$i<10;$i++){
        if($i%2 != 0){
            echo($i);
        }
    }

    */


    $data=date("Y-m-d");
    $czas=date("H:i");
    echo $data." ".$czas;
    echo("<br>");
    $losowa=rand(60,67);
    echo $losowa;
    /*if($losowa==67){
        echo("<br>");
        echo("sigma");
        echo("<img src='obraz1.png'>");
    }
    else{
        echo("<br>");
        echo("Fengler jest gejem");
    
    }
    */
    $wpisz= "<input type='text'>sigma</input>";
    
    echo "<br>";
    echo $wpisz;
    echo "<br>";
    
    $tekst="dzisiaj ładna pogoda";
    $jest=strpos($tekst, "ładna");
    echo "<br>";

    if($jest==true){
        echo "jest";

    }
    else{
        echo "nie ma";
    }
    $tekst=strtoupper($tekst);
    echo "<br>";

    echo($tekst);
    echo "<br>";
    $tekst=strtolower($tekst);
    echo($tekst) ;
    echo "<br>";
    $tekst=ucwords($tekst);
    echo($tekst);
    echo "<br>";
    $tekst1="dzisiaj ładna pogoda";
    $tekst1=trim($tekst);
    echo "<br>";
    echo $tekst;
    echo "<br>";










?>
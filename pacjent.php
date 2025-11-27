<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <?php
    $polaczenia=mysqli_connect("localhost","root","","przychodnia4c");
    ?>

    <header>
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </header>
    <nav id="lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php 
        $wynik=mysqli_query($polaczenia,"SELECT `id`,`imie`,`nazwisko` FROM `pacjenci`;");
        while(($r=mysqli_fetch_array($wynik))!=NULL){
            echo $r['id'].' '.$r['imie'].' '.$r['nazwisko']."<br>";
        }
            ?>
            
        <br><br>
        <form action="pacjent.php" method="POST">
            <p name="pacjent">Podaj id</p><br>
            <input type="number" name="numer">
            <input type="submit" name="guzik" value="Podaj dane">
        </form>
        <h3>LEKARZE</h3>
        <ul>
            <li>pn-śr
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowaleski</li>
                </ol>
            </li>
             <li>czw-pt
                <ol>
                    <li>Krzysztof Nowak</li>
                    
                </ol>
            </li>
        </ul>
    </nav>
    <section id="prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <?php 
        if(isset($_POST['guzik'])){
            if($_POST['numer']){
        $wynik=mysqli_query($polaczenia,"SELECT `imie`,`nazwisko`,`choroby_przewlekle`,`uczulenia` FROM `pacjenci` WHERE`id`=".$_POST['numer']);
        
        
         while(($r=mysqli_fetch_array($wynik))!=NULL){
            echo "<p>Imie i nazwisko: ".$r['imie'].' '.$r['nazwisko']."</p>";
            echo "<p>Choroby przewlekłe: ".$r['choroby_przewlekle']."</p>";
            echo "<p>Uczulenia: ".$r['uczulenia']."</p>";
        }
    }
    }
            ?>
        
        
    </section>
    <footer>
        <p>utworzone przez"12345678987654</p>
        <a href="kwerendy.txt"><p>Pobierz plik z kwerendami</p></a>

    </footer>
    <?php
    mysqli_close($polaczenia);
    ?>
</body>
</html>
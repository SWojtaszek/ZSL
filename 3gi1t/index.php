<?php
$name="Janusz";
echo "Imie i nazwisko: $name<br>";
echo "Imie i nazwisko: $name<br>";
// konkatenacja
echo "Imię:".$name."<br>";
//interpolacja
echo "Imię:",$name,"<br>";
//typy danych
// boolean
$prawda=true;
$falsz=false;
echo $prawda; // 1
echo $falsz; // nic nie wyswietli
// integer
$dec=10;
$bin=0b1011;
$oct=010;
$hex=0x10;
echo "<br>$hex";
echo gettype($hex); //integer
echo gettype($prawda);  //boolean
//zmiennoprzecinkowe
$x=10.5;
echo gettype($x); //double
$name="Anna";
echo "<br>Nazwa zmiennej \$name, imie: $name";
//heredoc
$surname="Nowak";
echo <<<ETYKIETA
<br>
Imię i naziwsko: $name $surname
<hr>

ETYKIETA;

?>
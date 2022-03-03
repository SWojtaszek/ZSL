<?php
echo PHP_VERSION, "<br>";
echo 2**10,"<br>"; //1024
$x=10;
$y=5;
echo $x<=>$y, "<br>"; //1
$x=1;
$y=1.0;
echo gettype($x), "<br>"; //integer
echo gettype($y), "<br>"; //double
if($x==$y){
    echo "Równe<br>";
}else{
    echo "Różne<br>";
}
//identyczne
if($x===$y){
    echo "Identyczne<br>";
}else{
    echo "Nieidentyczne<br>";
}
/*preinkrementacja ++$i
postinkremencja $i++
predekrementacja --$i
postdekrementacja $i--
*/

$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3


?>
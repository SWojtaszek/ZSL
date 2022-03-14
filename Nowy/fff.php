<<?php
$name="jANusZ<br>";
echo "$name<br>";
echo strtolower($name);
echo strtoupper($name);
$surname="bąk<br>";
echo strtoupper($surname); //BąK
echo mb_strtoupper($surname); // BĄK
$text="jaNusz koWAlski";
echo "<br>$text<br>";
echo mb_strtolower($text)."<br>";
echo ucfirst(mb_strtolower($text))."<br>";
echo ucwords(mb_strtolower($text))."<br>";

$lorem="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";
echo $lorem;
echo wordwrap($lorem, 40, "<br>");
echo wordwrap($lorem, 40, "<hr>");
ob_clean();

$name="  Jan ";
echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
echo "Długość imienia ".ltrim($name)." wynosi:" .strlen(ltrim($name))."<br>";
echo "Długość imienia ".rtrim($name)." wynosi:" .strlen(rtrim($name))."<br>";
echo "Długość imienia ".trim($name)." wynosi:" .strlen(trim($name))."<br>";

//substr
$name="Janusz";
echo substr($name, 0, 3)."<br>";
echo substr($name, 2, 2)."<br>";

//strreplace
$string="text";
$replace="*** ";
echo str_replace("$string", "$replace", "Janusz text Anna text text Poznań");
echo "<br>";

$tab=["ą", "ę"];
$replace=["a", "ę"];
echo str_replace($tab, $replace, "Bąk")."<br>";

$mail="janusz_kowalski@zsl.poznan.pl";
echo substr($mail, strpos($mail,"@")+1)."<br>";

 ?>

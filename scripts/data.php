<?php
echo "<h4>Pobrane dane formularza</h4>";
//print_r($_post)
$error=0;
if(!isset($_POST['sex'])){
    echo "<script>history.back();</script>";
    exit();
}
foreach ($_POST as $key => $value){
//echo "$key:$value";
if(empty($value)){
    $error=1;
    echo "<script>history.back();</script>";
}
}
echo<<<DATA
    Imie: $_POST[name]
    Miasto: $_POST[city]
    Płeć: $_POST[sex]
DATA
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form1</title>
    </head>
    <body>
        <h1> Dane uzytkownika</h1>
        <form method="get">;
            <input type="text" name="surname" placeholder="Podaj nazwisko">
            <input type="text" name="password" placeholder="Podaj hasło">
            <input type="submit" value="Zatwierdz">
        </form>
        <?php
        //echo @$_get("surname")
        if(!empty($_get["surname"])&&(!empty($_get["surname"])){
            echo "Nazwisko".$_get["surname"], "hasło:".$_get["password"];
        }
        ?>
    </body>
</html>
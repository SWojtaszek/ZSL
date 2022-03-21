<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>
<body>
    <h4>Dane uzytkownika</h4>
    <form action="scripts/data.php" method="post">
        <select name="city">
            <option value="Poznan">Poznań</option>
            <option value="Gniezno">Gniezno</option>
        </select>
        <input type="text" name="imie" placeholder="Podaj imie">
        <input type="text" surname="Nazwisko" placeholder="Podaj nazwisko">
            <input type="radio" name="sex" value="man">Mezczyzna
            <input type="radio" name="sex" value="woman">Kobieta
        <input type="submit" value="Zatwierdz">
</body>
</html>
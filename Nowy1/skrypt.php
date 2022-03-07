<?php
echo "<table>";
echo "<tr><th>Imię</th><th>Nazwisko</th></tr>";
echo "<tr><td>Janusz</td><td>Nowak</td></tr>";
echo "<tr><td>Anna</td><td>Nowak</td></tr>";
echo "</table>";

//heredoc
echo <<<TABELA
<table>
<tr>
<th>Imie</th>
<th>Nazwisko</th>
</tr>
TABELA;
for ($i=1; $i<=5; $i++){
  echo <<<ROW
  <tr>
  <td>Imie$i</td>
  </tr>
ROW;
}
echo "</table>";
 ?>

<table>
<tr>
    <th></th>
    
<?php

$liczba_wierszy = 10;
$liczba_kolumn = 10;

for ($i = 1; $i <= $liczba_kolumn; $i++) {
  echo "<th>$i</th>";
}
?>      
</tr>

<?php

for ($i = 1; $i <= $liczba_wierszy; $i++) {
    echo '<tr>' . PHP_EOL;
    echo "<th>$i</th>" . PHP_EOL;    
    for ($j = 1; $j <= $liczba_kolumn; $j++) {    
        echo '<td>';
        if ( ($j * $i)%2 == 0 ) {
            echo '<span style="color:blue">' . $j * $i . '</span>';
        }
        else {
            echo '<span style="color:green">' . $j * $i . '</span>';
        }
        
        echo '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;    
}
?>

</table>
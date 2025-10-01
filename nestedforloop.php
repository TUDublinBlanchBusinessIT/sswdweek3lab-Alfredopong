<?php

echo "<table border='1'>";

for ($r = 1; $r <= 15; $r++) {
    echo "<tr>";
    
    for ($c = 1; $c <= 20; $c++) {

        echo "<td>" . $r . "," . $c . "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";

?>

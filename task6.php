<?php

echo "<table>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 10; $col++) {
        $p = $col * $row;
        if($p%2 == 0) {
            echo "<td>($p)</td> \n";
        }
        elseif($p%2 == 1) {
            echo "<td>[$p]</td> \n";
        }
        else {
            echo "<td>$p</td> \n";
        }
    }
    echo "</tr>";
}
echo "</table>";

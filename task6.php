<?php

echo "<table>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 10; $col++) {
        $p = $col * $row;
        if($row%2 == 0 && $col%2 == 0) {
            echo "<td>($p)</td> \n";
        }
        elseif($row%2 != 0 && $col%2 != 0) {
            echo "<td>[$p]</td> \n";
        }
        else {
            echo "<td>$p</td> \n";
        }
    }
    echo "</tr>";
}
echo "</table>";

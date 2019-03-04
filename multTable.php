<?php function createMultTable() {

    echo"<table border=\"1\">";
    for( $row = 1; $row <= 100; $row++ ) {
        echo "<tr>";
        for( $column = 1; $column <= 100; $column++ ) {
            echo "<td>" . $row * $column . "</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
}
?>
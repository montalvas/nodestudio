<?php
    $count = 1;

    echo "While:<br>";
    while($count <= 10) {
        echo "Contador é $count<br>";
        $count++;
    }
    echo '<hr>';

    echo "Do While:<br>";
    do {
        $count--;
        echo "Contador é $count<br>";
    } while ($count >= 1);
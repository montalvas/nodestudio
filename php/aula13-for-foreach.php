<?php
    echo "For:<br>";
    for($count = 0; $count <= 10; $count++) {
        echo "5 x $count = " . ($count * 5) . '<br>';
    }
    echo '<hr>';

    echo "Foreach:<br>";
    $names = [1 => "Lucas", "Montalvani", "Oliveira", "Albuquerque"];
    foreach($names as $key => $value) {
        echo "Name  $key   =   $value<br>";
    }
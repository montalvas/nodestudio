<?php
    function displayName() {
        echo "My name is Lucas";
    }

    displayName();
    echo '<hr>';

    function myData($name, $age) {
        echo "My name is $name and i have $age years.";
    }

    myData("Adriana", 27);
    echo '<hr>';

    function calcMedia($name, $n1, $n2, $n3) {
        $media = ($n1 + $n2 + $n3) / 3;
        echo "Student: $name<br>";
        echo "Media: $media<br>";
        echo "Status: ";
        if ($media >= 7) {
            echo "Passed";
        } else {
            echo "Failed";
        }
    }

    calcMedia("Miguel", 10, 9, 8);
<?php

    // idêntico (===)
    // não idêntico (!==)
    // diferente (<>)
    // spacaship (<=>)

    var_dump(20 <=> 30);
    /*
     * Se o esquerdo for menor, retorna -1
     * Se os dois forem iguais, retorna 0
     * Se o direito for menor, retorna 1 
     */

     $age = 26;
     $name = "Lucas";

     if($age == 26 and $name == "Lucas") {
         echo "E";
         echo 'hr';
     }

     if($age == 26 or $name == "Lucas") {
        echo "OU";
        echo 'hr';
    }

    if($age == 26 xor $name == "Lucas") {
        echo '';
    } else {
        echo "OU EXCLUSIVO, só um pode ser verdadeiro";
        echo 'hr';
    }
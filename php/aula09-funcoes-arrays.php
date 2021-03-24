<?php
    $names = ["Lucas", "Miguel", "Adriana"];

    //Verifica se é um array
    if(is_array($names)) {
        echo 'A variável é um array';
    }
    echo '<hr>';

    //Verifica se um elemento existe no array
    if(in_array("Jojo", $names)) {
        echo "O nome existe no array";
    } else {
        echo "O nome Jojo não existe no array";
    }
    echo '<hr>';

    //Cria um novo array com os índices de outro array
    $client = ["name" => "Lucas", "cpf" => 1234, "tel" => 1234];

    $data = array_keys($client);
    print_r($data);
    echo '<hr>';

    //Cria um novo array com os valores de outro array
    $client2 = array_values($client);
    print_r($client2);
    echo '<hr>';

    //Unir dois arrays
    $firstname = ["Lucas"];
    $lastname = ["Albuquerque"];
    $fullname = array_merge($firstname, $lastname);
    print_r($fullname);
    echo '<hr>';

    //Excluir último elemento do array
    echo 'Elemento removido: ' . array_pop($names) . '<br>';
    print_r($names);
    echo '<hr>';

    //Adicionar ou remover elemento ao inicio do array
    $var = ['x', 'y', 'z'];
    array_shift($var);
    print_r($var);
    echo '<br>';
    array_unshift($var, 'x');
    print_r($var);
    echo '<hr>';

    //Adicionar ao final do array
    array_push($var, "w");
    print_r($var);
    echo '<hr>';

    //Mesclar dois arrays
    $keys = ["Lucas", "Miguel"];
    $values = ["Montalvani", "Montalvani"];

    $newArray = array_combine($keys, $values);
    print_r($newArray);
    echo '<hr>';

    //Somar os elementos de um array
    $sum = [26, 3 ,27];
    echo array_sum($sum);
    echo '<hr>';

    //Transforma String em array (delimitador, string)
    $data = '10/08/1994';
    $arr_data = explode('/', $data);
    print_r($arr_data);
    echo '<hr>';

    //Transforma um array em uma string (delimitado, array)
    $birthday = implode("/", $arr_data);
    echo $birthday;
    
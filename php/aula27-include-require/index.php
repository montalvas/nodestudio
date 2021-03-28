<?php
    include 'header.php';
    //Diferença entre require e include é que o require retorna um erro e interrompe o script
    //O include mostra um warning e continua executando o script
?>

<?php echo "<h1>Olá, mundo!</h1>" ?>

<?php
    require_once 'footer.php';
    //Verifica se ja foi incluido o conteúdo, pois só inclui uma vez
?>


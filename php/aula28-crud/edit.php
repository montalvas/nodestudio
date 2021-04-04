<?php
    // Conexão
    include_once 'php-action/db_connect.php';

    // Header
    include_once 'includes/header.php';

    // Select
    if(isset($_GET['id'])) {
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        
        $data = mysqli_fetch_array($result);
    }
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <form action="php-action/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" value="<?php echo $data['nome']; ?>">
                <label for="name">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="lastname" id="lastname" value="<?php echo $data['sobrenome']; ?>">
                <label for="lastname">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="age" id="age" value="<?php echo $data['idade']; ?>">
                <label for="age">Idade</label>
            </div>

            <button type="submit" name="edit-client" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>
<?php
    //Conexão BD
    include_once 'php-action/db_connect.php';

    //Header
    include_once 'includes/header.php';

    //Message
    include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";

                    $result = mysqli_query($connect, $sql);
                    //Consulta no BD

                    if(mysqli_num_rows($result) > 0) {

                    while($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $data['nome'] ?></td>
                        <td><?php echo $data['sobrenome'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['idade'] ?></td>

                        <td><a href="edit.php?id=<?php echo $data['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                        <td><a href="#modal<?php echo $data['id'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $data['id'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Atenção!</h4>
                                <p>Deseja excluir os dados?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="php-action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                                    <button type="submit" name="delete-client" class="btn red">Deletar</button>

                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </tr>
                <?php 
                    } 
                } else { ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                
                <?php } ?>
            </tbody>

        </table>
        <br>

        <a href="add.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>



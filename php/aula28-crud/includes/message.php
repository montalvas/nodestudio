<?php
    //Sessão
    session_start();
    if(isset($_SESSION['message'])) { ?>
        <script>
            window.onload = function() {
                M.toast({html: '<?php echo $_SESSION['message']; ?>'});
            }
        </script>
        
    <?php
    }
    
    session_unset();

?>
    
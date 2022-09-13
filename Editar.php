<?php 

session_start();

if (empty($_SESSION["Id"])){
    header ("location: Login.php");
}

require ('./layout/menu.php')

?>






<?php require ('./layout/footer.php') ?>

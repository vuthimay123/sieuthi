<?php
session_start();
?>
<?php
if(isset($_POST['logout'])){
    unset($_SESSION["username"]);
    header('Location:../index.php');
}
?>
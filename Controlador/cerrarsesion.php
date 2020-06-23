<?php
ob_start();
session_start();
unset ($SESSION['loggedin']);
unset ($SESSION['usuario']);

session_destroy();
header('Location: ../index.php');    
exit(); 
ob_end_flush();
?>

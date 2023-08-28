<?php
 include 'conecao.php'; 
session_start();
session_destroy();
header('Location: formadm.php'); 
?>

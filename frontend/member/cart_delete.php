<?php
session_start();
$id = $_GET['CartID'];
unset($_SESSION['Cart'][$id]);
$_SESSION['Cart'] = array_values($_SESSION['Cart']);//可以重新排序，迴圈才不會出問題
//print_r($_SESSION['Cart']);
header('Location: my_cart.php');
 ?>

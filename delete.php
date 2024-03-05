<?php 
include('src/functions.php');
$user = (isset($_GET['id'])) ? delete($_GET['id']) : exit();
?>

<?php
require ('connect.php');
$id = $_GET['id'];
$dfms = $msc->prepare("DELETE FROM app_tab WHERE id_count = '$id'");
$dfms -> execute();
echo("<script>location.href = 'cp.php';</script>");
?>

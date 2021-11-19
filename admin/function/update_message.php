<?php


include 'connect.php';

$id = $_POST['idDB'];

$update = "UPDATE contact SET view = '1' WHERE id = $id";
$connect->query($update);



$select_nav  = "SELECT * FROM contact WHERE view = '0' ";
$result_nav  = $connect->query($select_nav);
$counter     = $result_nav->num_rows;
echo $counter;

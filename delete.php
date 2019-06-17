<?php
 $connection = mysqli_connect("localhost","root","","test_model");

 $id =$_REQUEST['id'];    
$query = "DELETE FROM `books_cat` WHERE `id` = '$id'";

mysqli_query($connection, $query);
header ("location: ./");
?>

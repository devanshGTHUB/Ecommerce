<?php

$con = mysqli_connect("localhost","root"," ","store") or die(mysqli_error($con)); 
$select_query="SELECT id,name,price FROM items;"
$select_query_result=mysqli_master_query($con,$select_query) or die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
echo $row['id'].<br/>;
echo $row['name'].<br/>;
echo $row['price'];

?>
<?php
 include('../dashboard/db.php');


if (isset($_POST['id'])){
   $id =  $_POST['id'];
   
    $query = "   UPDATE proposel
    SET statu = 1
    WHERE id_proposel = $id";

$result = mysqli_query($conn, $query);

 
}
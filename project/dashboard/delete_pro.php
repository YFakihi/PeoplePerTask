<?php
include('db.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];


$query = " delete from project where id_project = '$id'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:projects.php?delete_msg your delete is  successfuly');
}
}

?>
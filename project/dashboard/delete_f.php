
<?php
include('db.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];


$query = " delete from freelances where Id_freelance = '$id'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:agents.php?delete_msg your delete is  successfuly');
}
}
?>



<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select * from user where id = '$id'";
    $res = mysqli_query($conn ,$sql);

    if(!$res){
        die("query Failed".mysali_error());
    }
    else{
        $row = mysqli_fetch_assoc($res);
    }
}
?>



<?php
if(isset($_POST['update_u']))
{

    if(isset($_GET['id_new'])){ 
        $idnew = $_GET['id_new'];
    }


    $uname = $_POST['name_u'];
    $upass = $_POST['pass_u'];
    $uemail = $_POST['email_u'];
    $image = $_POST['image'];
   

   

    $query = "UPDATE user SET  username = '$uname', PASSWORD = '$upass', email = '$uemail',image = '$image'
    WHERE id = '$idnew'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:users.php?delete_msg your update is  successfuly');
}
}

?>









<!doctype html>
<html lang="en">
<head>
  	<title>edit user</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
  
<body>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h3>Edit User</h3>
            <form action="update_user.php?id_new=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="email">username</label>
                    <input class="form-control" type="text" name="name_u" value="<?php echo $row['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="first_name">Password</label>
                    <input class="form-control" type="text" name="pass_u" value="<?php echo $row['PASSWORD'] ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Email</label>
                    <input class="form-control" type="text" name="email_u" value="<?php echo $row['email'] ?>">
                </div>

                <div class="form-group">
                    <label for="last_name">Role</label>
                    <input class="form-control" type="text" name="role" value="<?php echo $row['ROLE'] ?>">
                </div>

                <div class="form-group">
                    <label for="last_name">Email</label>
                    <input class="form-control" type="file" name="image" value="<?php echo $row['image'] ?>">
                </div>
                <input type="submit" class="btn btn-success" name="update_u" value="Save Change">
            </form>
        </div>
    </div>
</div>



	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Page Script -->
	<script src="assets/js/scripts.js"></script>

</body>
  
</html>



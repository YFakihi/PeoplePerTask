<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select * from categores where id_cat = '$id'";
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
if(isset($_POST['update_cat']))
{

    if(isset($_GET['id_new'])){ 
        $idnew = $_GET['id_new'];
    }



    $mame_cat = $_POST['mame_cat'];


   

    $query = "UPDATE categores SET  mame_cat = '$mame_cat'
    WHERE id_cat = '$idnew'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:categories.php?delete_msg your update is  successfuly');
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
            <form action="update_cat.php?id_new=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="email">mame_cat</label>
                    <input class="form-control" type="text" name="mame_cat" value="<?php echo $row['mame_cat'] ?>">
                </div>

             

                <input type="submit" class="btn btn-success" name="update_cat" value="Save Change">
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



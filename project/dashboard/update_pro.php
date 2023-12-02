<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select * from project where id_project = '$id'";
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
if(isset($_POST['update_pro']))
{

    if(isset($_GET['id_new'])){ 
        $idnew = $_GET['id_new'];
    }

    $image = $_POST['image'];
    $titre = $_POST['titre'];
    $id_cat = $_POST['Cat_name'];
    $id = $_POST['f_id_user'];
    $description = $_POST['description'];     



   

    $query = "UPDATE project SET image = '$image',  titre = '$titre', id_cat = '$id_cat'
    , id = '$id', description = '$description'
    WHERE id_project = '$idnew'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:projects.php?delete_msg your update is  successfuly');
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
            <form action="update_pro.php?id_new=<?php echo $id;?>" method="post" id="form">
            <div class="form-group">
                        <label for="f_name">image:</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                <div class="form-group">
                    <label for="email">titre</label>
                    <input class="form-control" type="text" name="titre" value="<?php echo $row['titre'] ?>">
                </div>

                <div class="form-group">
                <label for="f_id_user">Cat_name:</label>
                       <select name="Cat_name" id="">
                        <?php 
                         $query = "SELECT * from CATEGORES";
                         $result = mysqli_query($conn, $query);
                         foreach($result as $res){  ?>
                            <option value=" <?php   echo $res['id_cat']?>"><?php echo $res['mame_cat']?></option>
                        <?php }?>
                      
                       </select>
                </div>

                <div class="form-group">
                <label for="f_id_user">User_name:</label>
                       <select name="f_id_user" id="">
                        <?php 
                         $query = "SELECT * from user";
                         $result = mysqli_query($conn, $query);
                         foreach($result as $res){  ?>
                            <option value=" <?php   echo $res['id']?>"><?php echo $res['username']?></option>
                        <?php }?>
                      
                       </select>
                </div>
                <div class="form-group">
                    <label for="last_name">id</label>
                    <input class="form-control" type="text" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">description</label>
                    <input class="form-control" type="text" name="description" value="<?php echo $row['description'] ?>">
                </div>

                <input type="submit" class="btn btn-success" name="update_pro" value="Save Change">
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



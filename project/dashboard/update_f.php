<?php
include('db.php');

if(isset($_GET['id'])){ 
    $id = $_GET['id'];

    $sql = "select * from freelances where Id_freelance = '$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
            die("query Failed".mysali_error());
    }
    else {
        $row = mysqli_fetch_assoc($result);

    }
}
?>

<?php
if(isset($_POST['update_f']))
{

    if(isset($_GET['id_new'])){ 
        $idnew = $_GET['id_new'];
    }


   $fname = $_POST['name_f'];
    $fskills = $_POST['skills_f'];
    $f_id_user = $_POST['f_id_user'];

   

    $query = "UPDATE freelances SET  name_freelince = '$fname', skills = '$fskills', id = '$f_id_user'
    WHERE Id_freelance = '$idnew'";

$result = mysqli_query($conn, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:agents.php?delete_msg your update is  successfuly');
    }
}

?>

<!doctype html>
<html lang="en">
<head>
  	<title>edit freelinces</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
  
<body>
	
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h3>Add New Freelancers</h3>
            <form action="update_f.php?id_new=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input class="form-control" type="text" name="name_f" value="<?php echo $row['name_freelince'] ?>">
                </div>
                <div class="form-group">
                    <label for="first_name">Skills</label>
                    <input class="form-control" type="text" name="skills_f" value="<?php echo $row['skills'] ?>">
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
                <input type="submit" class="btn btn-success" name="update_f" value="Save Change">
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

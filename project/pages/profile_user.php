
<?php
include('header.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiverr-like Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>


  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">User Profile</h2>
            <img src="images/<?php echo  $_SESSION["image"];?>" class="img-fluid rounded-circle mb-3" style="width: 170px; height: 170px;">
            
            <h4 class="card-subtitle mb-2 text-muted"><?php echo  $_SESSION["username"]; ?></h4>
            
            <?php if (isset($_SESSION['email']) && $_SESSION['ROLE'] == 'freelincer'): ?>

            <p class="card-text">Description about the user goes here.</p>
            <p class="card-text">Skills: Skill 1, Skill 2, Skill 3</p>
            <p class="card-text">Location: City, Country</p> 

 <?php endif; ?>
            <!-- <hr>
            <h5 class="card-title">Services Offered:</h5>
            <ul class="list-group">
              <li class="list-group-item">Service 1</li>
              <li class="list-group-item">Service 2</li>
              <li class="list-group-item">Service 3</li>
            </ul>
            <hr> -->
<!-- Button trigger modal -->
<br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Projecte
</button>

<!-- Modal -->
<form  method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
                    <div class="form-group">
                        <label for="f_name">image:</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="f_name">Title:</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    <div class="form-group">
                      


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
                        <label for="f_id_user">description:</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="add_p" value="Add Projects">
                </div>
    </div>

 </div>



  </div>
</div>
</form>
<br>
<br>
           
<?php
if(isset($_POST['add_p']))
{
    $image = $_POST['image'];
    $titre = $_POST['titre'];
    $id_cat = $_POST['Cat_name'];
    $id = $_POST['f_id_user'];
    $description = $_POST['description'];

    if(empty($titre)){
        header('location:projects.php? message = fill all data!');
    }else{
    $query = "INSERT INTO  project (image,titre, id_cat, id,description) VALUES ('$image','$titre', '$id_cat','$id','$description')";
    $result = mysqli_query($conn, $query);
    }
 
if (!$result){
    die("query failed ".mysali_error());
}
// else
// {
//     header('location:agents.php?insert_msg your insert successfuly');
// }
  
}
?>
            <h5 class="card-title">Your Projects:</h5>
            <div class="media">
              <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="Reviewer Image">
              <div class="media-body">
                <!-- <h6 class="mt-0">Reviewer Name</h6> -->
                <p>project text goes here.</p>
              </div>
            </div>
            <!-- <div class="media">
              <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="Reviewer Image">
              <div class="media-body">
                 <h6 class="mt-0">Another Reviewer</h6> 
                <p>project text goes here.</p>
              </div>
            </div> -->
            <!-- Add more reviews as needed -->
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

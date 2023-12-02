<?php include('db.php'); ?>
<?php
include('head.php');
session_start();

?>
        <div class="main">
            <nav class="navbar justify-content-space-between pe-4 ps-2">
                <button class="btn open">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar  gap-4">
                    <div class="">
                        <input type="search" class="search " placeholder="Search">
                        <img class="search_icon" src="img/search.svg" alt="iconicon">
                    </div>
                    <!-- <img src="img/search.svg" alt="icon"> -->
                    <img class="notification" src="img/new.svg" alt="icon">
                    <div class="card new w-auto">
                        <div class="list-group list-group-light">
                            <div class="list-group-item px-3 d-flex justify-content-between align-items-center ">
                                <p class="mt-auto">Notification</p><a href="#"><img src="img/settingsno.svg" alt="icon"></a>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                        </div>
                    </div>
                    <div class="inline"></div>
                    <div class="name"><?php echo $_SESSION['email']; ?></div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src="img/photo_admin.svg" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="#">Profile</a>
                                <!-- <a class="dropdown-item" href="#">Account Setting</a> -->
                                <a class="dropdown-item" href="../pages/index.php">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            
        <!-- Button trigger modal -->
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Freelances</button>

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
                    <div class="form-group">
                        <label for="f_name">Name:</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="f_skills">Skills:</label>
                        <input type="text" name="f_skills" class="form-control">
                    </div>

                    
 
                    <div class="form-group">
                        <label for="f_id_user">User_name:</label>
                       <select name="f_id_user" id="">
                        <?php 
                         $query = "SELECT * from user";
                         $result = mysqli_query($conn, $query);
                         foreach($result as $res){  ?>
                            <option value=" <?php   echo $res['id']?>"><?php echo $res['mame']?></option>
                        <?php }?>
                      
                       </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="add_f" value="Add">
                </div>
            </div>
        </div>
    </div>
</form>
<?php
if(isset($_POST['add_f']))
{
    $f_name = $_POST['f_name'];
    $f_skills = $_POST['f_skills'];
    $f_id_user = $_POST['f_id_user'];

    if(empty($f_name)){
        header('location:agents.php? message = fill all data!');
    }else{
        $query = "INSERT INTO freelances (name_freelince, skills, id) VALUES ('$f_name', '$f_skills', $f_id_user)";
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



<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                            <th>Id_freelance</th>
                            <th>name_freelince</th>
                            <th>skills</th>
                            <th>User Names</th>
                            <th>Update</th>
                            <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                        $query = "SELECT F.*, U.username FROM freelances F INNER JOIN user U ON F.id = U.id";
                        
                        $result = mysqli_query($conn, $query);
                        
                        if (!$result) {
                            die("Query failed: " . mysqli_error());
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Process fetched data here
                            

                        ?>
                 <tr>
                    <td><?php echo $row['Id_freelance'];?></td>                                          
                    <td><?php echo $row['name_freelince'];?></td>
                    <td><?php echo $row['skills'];?></td>
                    <td> <?php echo $row['username'];?></td>
                    <td><a href = "update_f.php?id=<?php echo $row['Id_freelance'];?>" class = "btn btn-info">Update</a></td>
                    <td><a href = "delete_f.php?id=<?php echo $row['Id_freelance'];?>" class = "btn btn-danger">Delete</a></td>
                 </tr>
                        <?php
                       }
                    }

                        ?>
        </tbody>
        <tfoot>
        <tr>
            <th>Id_freelance</th>
                            <th>name_freelince</th>
                            <th>skills</th>
                            <th>id_user</th>
                            <th>Update</th>
                            <th>Delete</th>
            </tr>

           

        </tfoot>
    </table>
    <?php
    if(isset($_GET['delete_msg'])){
        echo $_GET['delete_msg'];
    }
    ?>

<script>
    $(document).ready(function () {     $('#example').DataTable(); });

</script>


              

   
        

    


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/dashboardhome.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="agents.js"></script>
</body>

</html>
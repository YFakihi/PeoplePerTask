<<<<<<< HEAD
<?php include('db.php'); ?>
<?php
include('head.php');

?>
=======
<?php
$projects_active = "active";
$freelancer_active = "";
$dashboard_active = "";
$categorys_active = "";
$Testimonial_active = "";
require "../../backend/project_script.php";
getAllProjects();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="wrapper">
        <?php
            require "sidebar.php";
            ?>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
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
<<<<<<< HEAD
                                <p class="mt-auto">Notification</p><a href="#"><img src="img/settingsno.svg" alt="icon"></a>
=======
                                <p class="mt-auto">Notification</p><a href="#"><img src="img/settingsno.svg"
                                        alt="icon"></a>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
<<<<<<< HEAD
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
=======
                                    <p class="card-text mb-3">Some quick example text to build on the card title and
                                        make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1 day ago</small>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                                </div>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
<<<<<<< HEAD
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1  day ago</small>
=======
                                    <p class="card-text mb-3">Some quick example text to build on the card title and
                                        make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1 day ago</small>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                                </div>
                            </div>
                            <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                        </div>
                    </div>
                    <div class="inline"></div>
<<<<<<< HEAD
                    <div class="name">yasin Admin</div>
=======
                    <div class="name">lahcen Admin</div>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src="img/photo_admin.svg" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <a class="dropdown-item" href="/PeoplePerTask/project/pages/index.html">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
<<<<<<< HEAD

            
        <!-- Button trigger modal -->
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Project</button>

<!-- Modal -->
<form  method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
=======
            <div class="container my-4 py-4">
                <!-- Primary Button -->
                <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter1"> ADD New PROJECT</button>

                <table id="example" class="table table-striped  " style="width:100%">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>PROJECT NAME</th>
                            <th>DESCRIPTION</th>
                            <th>PROJECT OWNER</th>
                            <th>CATEGORY NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for($i = 0 ; $i<count($GLOBALS["projects"]); $i++){
                        ?>
                        <tr>
                            <td><?=$GLOBALS["projects"][$i]["ID"]?></td>
                            <td><?=$GLOBALS["projects"][$i]["Title"]?></td>
                            <td><?=$GLOBALS["projects"][$i]["Description_project"]?></td>
                            <td><?=$GLOBALS["projects"][$i]["Name_user"]?></td>
                            <td><?=$GLOBALS["projects"][$i]["Name_categories"]?></td>
                            <td class="d-flex justify-content-end ">
                                <button type="button" class="btn btn-danger mx-2">DELETE</button>
                                <button type="button" class="btn btn-warning " data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter"> UPDATE </button>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>


    <!-- Modal update -->
    <div class="modal fade modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<<<<<<< HEAD
                    <div class="form-group">
                        <label for="f_name">titre:</label>
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
                            <option value=" <?php   echo $res['id']?>"><?php echo $res['mame']?></option>
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
=======
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">freelancer id</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">freelancer id</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">freelancer id</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</form>
<?php
if(isset($_POST['add_p']))
{
    $titre = $_POST['titre'];
    $id_cat = $_POST['Cat_name'];
    $id = $_POST['f_id_user'];
    $description = $_POST['description'];

    if(empty($titre)){
        header('location:projects.php? message = fill all data!');
    }else{
    $query = "INSERT INTO  project (titre, id_cat, id,description) VALUES ('$titre', '$id_cat','$id','$description')";
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
     
                            <th>id_project</th>
                            <th>Titre</th>
                            <th>name_cat</th>
                 
                            <th>name_user</th>
                            <th>description</th>
                            <th>Update</th>
                            <th>delete</th>

            </tr>
        </thead>
        <tbody>
        
        <?php


        
                         $query =  " SELECT p.* ,c.mame_cat ,u.mame FROM project p INNER JOIN categores c
                         ON  p.id_cat = c.id_cat 
                         INNER JOIN user u ON  u.id = p.id";

                        $result = mysqli_query($conn,$query);
                        if(!$result){
                            die("query faild".mysali_error());
                        }
                        else{

                     
                       while($row = mysqli_fetch_assoc($result)){

                        ?>
















        <?php

        
        ?>

                 <tr>
                    <td><?php echo $row['id_project'];?></td>                                          
                    <td><?php echo $row['titre'];?></td>
                    <td><?php echo $row['mame_cat'];?></td>
         
                    <td> <?php echo $row['mame'];?></td>
                    <td> <?php echo $row['description'];?></td>
                    <td><a href = "update_pro.php?id=<?php echo $row['id_project'];?>" class = "btn btn-info">Update</a></td>
                    <td><a href = "delete_pro.php?id=<?php echo $row['id_project'];?>" class = "btn btn-danger">Delete</a></td>
                 </tr>
                        <?php
                       }
                    }

                        ?>
        </tbody>

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
=======
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="dashboard.js"></script>
    <script src="js/script.js"></script>
>>>>>>> d24bbd1be2a4f9d08b2abe6ed9e330b43e5d2b13
</body>

</html>
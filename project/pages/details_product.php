<?php

include('header.php');


?>



<?php


if (isset($_GET['id'])) {
    $id_project = $_GET['id'];

    $query =  " SELECT p.* ,c.mame_cat ,u.username FROM project p INNER JOIN categores c
    ON  p.id_cat = c.id_cat 
    INNER JOIN user u ON  u.id = p.id  WHERE id_project = $id_project";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    if ($row) {
?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/<?php echo $row['image']; ?>" width= "500" alt="Project Image">
                </div>
                <div class="col-md-6">
                    <p><?php echo $row['username']; ?></p>
                    <h2><?php echo $row['titre']; ?></h2>
                    <p><?php echo $row['mame_cat']; ?></p>
                    <p><?php echo $row['description']; ?></p>
                    
                   
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Project not found!";
    }
} else {
    echo "Invalid project ID!";
}
?>


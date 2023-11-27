<?php
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM testimoniales WHERE Id_Testimonials = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Deletion failed: " . mysqli_error($conn));
    } else {
        header('location: testimonial.php?delete_msg=Deletion successful');
    }
}
?>



<?php
include('db.php');
if(isset($_POST['add_f']))
{
    $f_name = $_POST['f_name'];
    $f_skills = $_POST['f_skills'];
    $f_id_user = $_POST['f_id_user'];
 
    if(empty($f_name)){
        header('location:agents.php?message = insert all data!');
    }
    else{
    
    $query = "INSERT INTO freelances (name_freelince, skills, id) VALUES ('$f_name', '$f_skills', '$f_id_user')";

    $result = mysqli_prepare($conn, $query);
    }
 
if (!$result){
    die("query failed ".mysqli_error());
}
else
{
    header('location:agents.php?insert_msg your insert successfuly');
}
  
}
?>



<?php
/*
if(isset($_POST['add_f']))
{
    $f_name = $_POST['f_name'];
    $f_skills = $_POST['f_skills'];
    $f_id_user = $_POST['f_id_user'];

    if(empty($f_name)){
        header('location:agents.php? message = fill all data!');
    }else{
    $query = "INSERT INTO freelances (name_freelince, skills, id) VALUES ('$f_name', '$f_skills', '$f_id_user')";
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
*/
?>

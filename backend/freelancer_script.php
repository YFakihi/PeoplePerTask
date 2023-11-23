<?php

include(__DIR__."/../connection_database/database.php");

function getAllFreelancer(){
    $query = "select f.ID,f.Name_freelance,f.Skill,u.email,u.birthday from freelances f
    inner join users u 
    on f.ID_user = u.ID;";

    global $con;
    $res = mysqli_query($con,$query);

    while($freelancer = mysqli_fetch_assoc( $res )){
        $GLOBALS['freelancers'][]=$freelancer;
    }
}
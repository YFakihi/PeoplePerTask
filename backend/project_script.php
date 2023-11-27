<?php
include(__DIR__."../../connection_database/database.php");

function getAllProjects(){
    $query = "select p.ID,p.Title,p.Description_project,u.Name_user,c.Name_categories from Projets p
    inner join Categories c on 
    p.ID_Categorie=c.ID
    inner join users u on
    p.ID_User = u.ID;";
    
    global $con ;
    $res = mysqli_query($con,$query);

    while($project = mysqli_fetch_assoc( $res )){
        $GLOBALS['projects'][]=$project;
    }
}


?>
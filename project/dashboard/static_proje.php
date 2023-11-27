<?php include('db.php'); ?>
   


    <?php
       $sql = "SELECT COUNT(id_project) AS project_count FROM project";

       
        $res = mysqli_query($conn,$sql);
        if(!$res){
            die("query faild".mysqli_error());
        }
        else{
           
        }
    ?>
<?php
 while($row = mysqli_fetch_assoc($res)){
    $projectcont = $row['project_count'];
                

?>
<div class="row ">
<div class="card">
                            <div class="card-body  p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Projects</p>
                                        <div class="mt-4">
                                            <h3><strong><?php  echo $projectcont ;  ?></strong></h3>
                                    
                                        </div>
                                    </div>
                                    <div class="cursor">
                                        <img src="img/project-icon-1.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
        </div>

                        <?php
}
                

?> 


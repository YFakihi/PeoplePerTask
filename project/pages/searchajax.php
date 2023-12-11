
<?php 
include('../dashboard/db.php');
  
  
if(isset($_POST['input'])) {

 $input = $_POST['input'];
  
 

   $sql =  "SELECT * FROM project WHERE titre LIKE '$input%'"; 
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['titre']; ?></h5>
            <p class="card-text"><?php echo $row['description']; ?>.</p>
            <a class="btn btn-primary me-2 sign-style-color" href="details_product.php?id= <?php echo  $row['id_project']; ?>" role="button">More</a>  


            <?php if (isset($_SESSION['email']) && isset($_SESSION['ROLE'])) :
              if ($_SESSION['ROLE'] == 'freelincer') : ?>
                <a class="btn btn-primary me-2 sign-style-color" href="offer.php?project_id=<?php echo $row['id_project']; ?>" role="button">Apply now</a>

            <?php endif;
              endif; ?>

          </div>
        </div>
      </div>
    <?php
    }
}

    ?>


<?php
include('../dashboard/db.php');?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>People per task</title>

  <!-- style links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- animation links -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- link for icons -->
  <script src="https://kit.fontawesome.com/6cd9388e68.js" crossorigin="anonymous"></script>
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
 




<div class="row ">

    <?php
        $sql = " SELECT * from testimoniales ORDER BY Id_Testimonials DESC LIMIT 1";
       
        $res = mysqli_query($conn,$sql);
        if(!$res){
            die("query faild".mysqli_error());
        }
        else{
           
        }
    ?>
<?php
 while($row = mysqli_fetch_assoc($res)){
                

?>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active ">
              <div class="col-lg-6 col-md-6 col-12 mx-auto ">
                <div class="card category-card-style  my-4">
                  <div class="card-body m-4 " >
                    <div class="d-flex card-flex justify-content-between">
                      <div class="d-flex align-items-center m-3">
                         <img src="images/M.png" alt="" class=" avatar-xl mb-3 mb-lg-0 ">
                       
                      </div>
                      <div class="">
                    <!-- <h4 class="mb-0">Dizzy Dros</h4> -->
                    <!-- <p class="mb-0 fs-6">Artist</p> -->
                    <i class="fa-solid fa-quote-left fa-xl" style="color: #ff7300;"></i>
                    <p>
                        <?php  echo $row['commente'];?>
                    </p>
                    <i class="fa-solid fa-quote-left fa-rotate-180 fa-xl" style="color: #ff7300;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          
        <?php
         }
         ?>

          <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <i class="fa-solid fa-angles-right fa-2xl" style="color: #ff6600;"></i>
          </a>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="fa-solid fa-angles-left fa-2xl" style="color: #ff6600;"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
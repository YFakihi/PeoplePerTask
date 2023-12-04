
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
                                <a class="dropdown-item" href="profileadmin.php">Profile</a>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <a class="dropdown-item" href="/PeoplePerTask/project/pages/index.html">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>




  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">User Profile</h2>
            <img src="../pages/images/<?php echo  $_SESSION["image"];?>" class="img-fluid rounded-circle mb-3" style="width: 170px; height: 170px;">
            
            <h4 class="card-subtitle mb-2 text-muted"><?php echo  $_SESSION["username"]; ?></h4>
            
            
            <!-- <p class="card-text">Description about the user goes here.</p>
            <p class="card-text">Skills: Skill 1, Skill 2, Skill 3</p>
            <p class="card-text">Location: City, Country</p> -->

            <!-- <hr>
            <h5 class="card-title">Services Offered:</h5>
            <ul class="list-group">
              <li class="list-group-item">Service 1</li>
              <li class="list-group-item">Service 2</li>
              <li class="list-group-item">Service 3</li>
            </ul>
            <hr> -->




           

            <h5 class="card-title">Your Projects:</h5>
            <div class="media">
              <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="Reviewer Image">
              <div class="media-body">
                <!-- <h6 class="mt-0">Reviewer Name</h6> -->
                <p>project text goes here.</p>
              </div>
            </div>
            <!-- <div class="media">
              <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="Reviewer Image">
              <div class="media-body">
                 <h6 class="mt-0">Another Reviewer</h6> 
                <p>project text goes here.</p>
              </div>
            </div> -->
            <!-- Add more reviews as needed -->
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

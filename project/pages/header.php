<?php
include('../dashboard/db.php');?>
<?php
session_start();
?>
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

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-postion">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/M.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"  href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pack.php">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="recherch.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="recherch.php">Ui/Ux</a></li>
              <li><a class="dropdown-item" href="recherch.php">content writing</a></li>
              <li><a class="dropdown-item" href="recherch.php">video editing</a></li>
              <li><a class="dropdown-item" href="recherch.php">Ui/Ux</a></li>
              <li><a class="dropdown-item" href="recherch.php">content writing</a></li>
              <li><a class="dropdown-item" href="recherch.php">video editing</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#testimonials-key" >Testimonials</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
<!-- 
          <li class="nav-item">
           <select class="nav-link"  name="lang" id="">
            <option class="nav-link"  value="">Languges</option>
            <option class="nav-link"  value="">En</option>
            <option  class="nav-link" value="">Fr</option>
           </select>


          </li> -->
          
        </ul>
        
        <form class="d-flex input-group w-auto">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <img src="images/searchicon.svg" alt="">
          </span>
        </form> 
        
      <?php if (!isset($_SESSION['email'])): ?>
        <a class="btn btn-primary me-2 sign-style-color" href="regester.php" role="button">Sign up</a>
        <a class="btn btn-primary me-2 sign-style-color" href="login.php" role="button">Sign in</a>



        
        <?php else: ?>
          <?php echo $_SESSION['email']; ?>
          <ul class="navbar-nav">
            
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src="images/icons8-user-32.png" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="profile_user.php">Profile</a>
                                <a class="dropdown-item" href="../dashboard/dashboard.php">dashboard</a>
                                
                                <a class="dropdown-item" href="logout.php">Log out</a>
                            </div>
                        </li>
                    </ul>
          <!-- <a class="btn btn-primary me-2 sign-style-color" href="logout.php" role="button">Logout</a> -->
      <?php endif; ?>
        
      </div>
    </div>
  </nav>

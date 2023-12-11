<?php
   ob_start(); 
  include('header.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $email = $_POST["email"];
      $pass = $_POST["pass"];

      $q = "SELECT * FROM user WHERE  email = '$email' AND password = '$pass'";
      $res = mysqli_query($conn, $q); 
      
      $count = mysqli_num_rows($res);
      if ($count != 0) {
          $row = mysqli_fetch_assoc($res);
      
          // Start the session

      
          if ($row['ROLE'] == 'user') {
            // Set user session details
            $_SESSION["username"] = $row['username']; 
            $_SESSION["id"] = $row["id"]; 
            $_SESSION["image"] = $row['image']; 
            $_SESSION["email"] = $email; 
            $_SESSION["ROLE"] = $row["ROLE"]; 
          //  echo '<script type="text/javascript">';
          //   echo 'window.location.href = index.php';
          //   echo '</script>';
          header('Location: index.php'); 
          ob_end_flush();          
          
          } 

          elseif ($row['ROLE'] == 'freelincer') {
    
            $_SESSION["username"] = $row['username']; 
            $_SESSION["ROLE"] = $row['ROLE']; 
            $_SESSION["image"] = $row['image']; 
            $_SESSION["id"] = $row["id"]; 
            $_SESSION["email"] = $email; 
            $_SESSION["ROLE"] = $row["ROLE"]; 

            header('Location: index.php'); 
            ob_end_flush();  
            // echo '<script type="text/javascript">';
            // echo 'window.location.href = ./index.php';
            // echo '</script>';
          // exit();
        } 
          
          
          elseif ($row['ROLE'] == 'admin') {
              // Set admin session details
              $_SESSION["email"] = $email; 
              $_SESSION["id"] = $row["id"]; 
              $_SESSION["username"] = $row['username']; 
              $_SESSION["image"] = $row['image']; 
              $_SESSION["ROLE"] = $row["ROLE"]; 
              header("location: ../dashboard/dashboard.php");
             
              ob_end_flush();  
          }
      } else {
          // Redirect to login page if credentials are incorrect
          header("location: index.php");
      }
  }
  ?>

      <section class="vh-100 bg-image"style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">login </h2>
    
                  <form id="login-form" method = "post" action = "">
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3cg">Your Email</label>
                      <input type="text" id="login-mail_inp" name="email" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example3cg"></label>
                    </div>
    
                    <div class="form-outline mb-4 ">
                      <label class="form-label" for="form3Example4cg">Password</label>
                      <input type="password" id="login-password_inp"name="pass" class="form-control form-control-lg" />
                      <div class="text-center mrgntop">
                      <span id="login-mail_reg_err" class="text text-danger"></span>
                      </div>
                    </div>
                    
                    <button type="submit" class="mrgntop btn btn-primary primary-btn-orange" name = "login">login</button>
    
                  </form>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="pt-lg-10 pt-5 footer footer-color">
      <div class="container">
      <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
          <!-- about company -->
          <div class="mb-4">
            <img src="images/M.png" alt="" class="logo-inverse ">
            <div class="mt-4 text-light">
                <p>Youssofia, youcode school.
                  691 South El aamala Blvd.
                  Morocco, CA 155
                  </p>
                <!-- social media -->
                <div class="fs-2">
                  <i class="fa-brands fa-linkedin" style="color: #ffff;"></i>
                  <i class="fa-brands fa-instagram" style="color: #ffff;"></i>
                  <i class="fa-brands fa-facebook" style="color: #ffff;"></i>
                </div>
            </div>
          </div>
      </div>
      <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
          <div class="mb-4">
            <!-- list -->
            <h3 class="fw-semibold text-light mb-3">Company</h3>
            <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                <li><a href="#" class="nav-link text-light">About</a></li>
                <li><a href="#" class="nav-link text-light">Pricing</a></li>
                <li><a href="#" class="nav-link text-light">Blog</a></li>
                <li><a href="#" class="nav-link text-light">Careers</a></li>
                <li><a href="#" class="nav-link text-light">Contact</a></li>
            </ul>
          </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="mb-4">
          <h3 class="fw-semibold text-light mb-3">Resources</h3>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
              <li><a href="#" class="nav-link text-light">Success Stories </a></li>
              <li><a href="#" class="nav-link text-light">Become Freelancer</a></li>
              <li><a href="#" class="nav-link text-light">Get the app</a></li>
              <li><a href="about.html" class="nav-link text-light">FAQ’s</a></li>
              <li><a href="#" class="nav-link text-light">Tutorial</a></li>
          </ul>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-6">
      <div class="mb-4">
        <h3 class="fw-semibold text-light mb-3">Information</h3>
        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link text-light">Careers
            </a></li>
            <li><a href="#" class="nav-link text-light">FAQ</a></li>
            <li><a href="#" class="nav-link text-light">Privacy Policy </a></li>
            <li><a href="about.html" class="nav-link text-light">FAQ’s</a></li>
            <li><a href="#" class="nav-link text-light">Information</a></li>
        </ul>
      </div>
    </div>
    
      
  </body>
  </html>












  <?php
  /*
  include('header.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      $pass = $_POST["pass"];

      $requete = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
      $statment = $conn->query($requete);

      if ($statment) {
          $result = $statment->fetch_assoc();

          if ($result) {
              // Start the session
              

              $_SESSION["username"] = $result['username'];
              $_SESSION["id"] = $result['id'];
              $_SESSION['role'] = $result['ROLE'];
              $_SESSION["image"] = $result['image'];
              $_SESSION["email"] = $result['email'];
              echo '<script type="text/javascript">';
                  echo 'window.location.href = ./pqges/index.php';
                  echo '</script>';
                exit();
          } else if (empty($email) || empty($pass)) {
              header("location:index.php?error=please enter your email or password");
          } else {
              header("location:index.php?error=email or password not found");
          }
      } else {
          header("location:index.php?error=query failed");
      }
  }

  */

  ?>
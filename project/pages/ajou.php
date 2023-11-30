<?php
session_start();
if (isset($_POST['submit'])) {
  include('../dashboard/db.php');
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $requete = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $statment = $conn->prepare($requete);
    $statment->execute();
    $result = $statment->fetch();
    if ($result['email'] === $email && $result['password'] === $password) {
        $_SESSION['mame'] = $result['mame'];
        $_SESSION['role'] = $result['password']; 
        $_SESSION['email'] = $result['Email'];
        $_SESSION['role'] = $result['role'];
    
        // if (isset($_POST['check'])) {
        //     setcookie('email', $_SESSION['email'], time() + 3600);
        //     setcookie('password', $_SESSION['password'], time() + 3600);
        // }
       // header("location:./pages/dashboard.php");
    }  
    else if (empty($email) || empty($password)) {
        header("location:index.php?error=please enter your email or password");
    } else {
        header("location:index.php?");  
    }
}
?>


<?php
session_start();
require('../functions.php');

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil email berdasarkan id
    $result = mysqli_query($conn,"SELECT email, nama FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan email
    if($key === hash('sha256', $row['email'])){
        $_SESSION['login'] = true;

        // Ambil nama juga biar bisa ditampilin
        $_SESSION['nama'] = $row['nama'];
    }

}

if(isset($_SESSION["login"])){
  header("Location: ../home.php");
  exit;
}

$loginFailed = false;

if (isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");

  //cek email
  if(mysqli_num_rows($result) === 1){
    //cek passsword
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
      //set session
      $_SESSION["login"] = true;
      $_SESSION["nama"] = $row["nama"];

      //cek remember me
      if(isset($_POST['remember'])){

        setcookie('id',$row['id'],time()+60*60*24*3);
        setcookie('key',hash('sha256',$row['email']),time()+60*60*24*3);

      }
      header("Location: ../home.php?id=" . $row['id']);
      exit;
    }
  }
  $loginFailed = true;


}

// register atau sign up
if(isset($_POST["signup"])){
        //
        if(register($_POST) > 0){
            echo "<script>
                    alert('Successfully Sign Up!');
                    window.location.href = 'login.php';
                  </script>";
        }else{
            echo mysqli_error($conn);
        }
}
?>

<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <a href="../index.php" class="back-home">x</a>
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn active" onclick="showLogin()">
            Login
          </button>
          <button
            type="button"
            class="toggle-btn inactive"
            onclick="showSignup()"
          >
            Sign Up
          </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data" id="login" class="input-group">
          <input
            type="text"
            class="input-field"
            placeholder="Email"
            name="email" 
            id="email"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Password"
            id="password" 
            name="password"
            required
          />
          <input type="checkbox" class="checkbox" id="remember" name="remember" /><span class="spanlogin"
            >Remember me</span
          >
          <button type="submit" class="submit-btn" name="login">Login</button>
          
        </form>

        <form action="" method="post" enctype="multipart/form-data" id="signup" class="input-group">
          <input
            type="text"
            class="input-field"
            placeholder="Name"
            id="nama" 
            name="nama"
            required
          />
          <input
            type="email"
            class="input-field"
            placeholder="Email"
            name="email" 
            id="email"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Password"
            id="password" 
            name="password"
            required
          />
          <input type="checkbox" class="checkbox" required/><span class="span-signup">Agree to the Terms & Conditions</span>
          <button type="submit" class="submit-btn" name="signup">Sign Up</button>
        </form>

        <form id="forgot-password" class="input-group">
          <p></p>
          <input
            type="text"
            class="input-field"
            placeholder="User ID or Email"
            required
          />
          <button type="submit" class="submit-btn"></button>
          <a href="#" class="back-to-login" onclick="showLogin()"
            ></a
          >
        </form>
      </div>
    </div>

    <section class="hero" id="login">
      <main class="content">
        <a href="#"></a>
      </main>
    </section>

    <script src="js/script.js"></script>
  </body>
</html>

<?php
include("../includes/connect.php");
include("../includes/data.php");

session_start();

if (isset($_GET["logout"])) {
  unset($_SESSION['recruiter_id']);
  header("Location: ../");
}

if (isset($_POST["login"])) {
  $email = $_POST["Email"];
  $password = md5($_POST["Password"]);
  $result = getWhere("recruiters", 'email_id="' . $email . '" && password = "' . $password . '"');
  if (sizeof($result) > 0) {
    $_SESSION["recruiter_id"] = $result[0]["id"];
    header("Location: ./");
    die();
  }
  echo '<script>alert("Invalid Email or Password!");</script>';
}

$valid=true;
if (isset($_POST["add_recruiter"])) {
  $args["name"] = $_POST["name"];
  $args["profilephoto"] = "/uploads/default-profile-picture.jpg";
  $args["email_id"] = $_POST["email_id"];
  $args["contact_number"] = $_POST["contact_number"];
  $args["password"] = $_POST["password"];
  $args["recruiter_id"] = 0;
  $args["website"] = "";
  $args["address"] = "";
  $args["description"] = "";
  $args["status"] = 1;
  $args["created_at"] = null;
  if($valid){
    recruiter("add", "", $args);
  }$email = $args["email_id"];
  $password = md5($args["password"]);
  $result = getWhere("recruiters", 'email_id="' . $email . '" && password = "' . $password . '"');
  if (sizeof($result) > 0) {
    $_SESSION["recruiter_id"] = $result[0]["id"];
    header("Location: ./");
    die();
  }
  echo '<script>alert("Sorry! Something went wrong.");</script>';

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/auth-style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" />
          </div>
          <input type="submit" value="Login" name="login" class="btn solid" />

        </form>
        <form action="" method="POST" class="sign-up-form" id="sign-up-form-scroll">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Company Name" name="name" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email_id" />
          </div>
          <div class="input-field">
            <i class="fas fa-mobile"></i>
            <input type="text"  placeholder="Contact No" name="contact_number" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <input type="submit" class="btn" name="add_recruiter" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="../img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="../img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="../js/auth-app.js"></script>
</body>

</html>
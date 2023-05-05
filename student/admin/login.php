<?php 
session_start();
error_reporting(0);
$err="";
include('include/db.php');

if(isset($_POST['login'])){
$user=$_POST['username'];
$pass=$_POST['pass'];
// $query="SELECT * FROM admin where username='$user';";
$sql=mysqli_query($conn,"SELECT * FROM admin where username='$user';");

if(mysqli_num_rows($sql)>0){
  $d=mysqli_fetch_assoc($sql);
  $p=$d['Password'];
  if($p!==$pass){
    // $message = "Paasword not matching.";
    echo '<script>alert("Password not matching.")</script>';
    header('Refresh: 0.5; url=login.php'); 
    }
    else{
        $_SESSION["name"] = $d['Name'];
        $_SESSION["email"]=$d['Email'];
        $_SESSION["username"]=$d['UserName'];
        $_SESSION["pass"]=$d['Password'];
        // $_SESSION["Last_Name"]=$d['Last_Name'];
        header("Location:dashboard.php");
    }
}
else{
  $err="Invalid Details";
  // echo "<script>alert('Invalid Details');</script>";
}
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>  

<div>

<form method="post" >
<h4>Hello! let's get started</h4>
<h6 class="font-weight-light">Sign in to continue.</h6>
<br>
    <input type="text" id="username" name="username" placeholder="enter your username" required value="<?php echo $user ?>">
    <input type="password" id="pass" name="pass" placeholder="enter your password" value="<?php echo $pass ?>">
    <div class="err">
    <?php echo $err;?>
    </div>
    <input type="submit" value="Login" name="login">
    
    <br> <br>
    <div class="form-check">
      <div class="container">
        <div class="row">
         
          <div class="col-md-6">
          <label class="form-check-label text-muted">
      <input type="checkbox" id="remember" class="form-check-input" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> /> Keep me signed in </label>
          </div>
          <div class="col-md-6" style="text-align:right"><a href="forgot-password.php" class="d">Forgot password?</a></div>
        </div>
      </div>
      <br> 
    </div>

      <div class="c">
                    <a href="../index.php" class="btn btn-block btn-facebook auth-form-btn">
                      Back Home </a>
                  </div>
    
    

</div>


 
</body>
</html>

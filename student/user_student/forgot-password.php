<?php 
include("include/db.php");
$emailErr=$mobnoErr=$npassErr=$cpassErr="";
$email=$mobno=$npass=$cpass="";
$f1=0;
if(isset($_POST['reset'])){
    if(empty($_POST['email'])){
        $emailErr="Email is Required!!";
    }
    else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Email is Invalid');</script>";
        $f1=1;
        $emailErr="Email is Invalid!!";
    }
    else{
        $email=htmlspecialchars($_POST['email']);
    }

    if(empty($_POST['num'])){
        echo "<script>alert('Mobile Number is Required');</script>";
        $f1=1;
    }
    else if(!preg_match('/^[1-9]{1}[0-9]{9}$/',$_POST['num'])){
        echo "<script>alert('Only 10 digits are required in Mobile Number!!');</script>";
        $f1=1;
    
    }
    else{
        $mobno=$_POST['num'];
    }
    if(empty($_POST['npass'])){
        echo "<script>alert('New Password required!!');</script>";
        $f1=1;
        
    }
    else if(!preg_match("/^[0-9][a-zA-z]{8,}$/",$_POST['npass'])){
        echo "<script>alert('New Password is not in valid format');</script>";
        $f1=1;
        
    }
    else{
        $npass=htmlspecialchars($_POST['npass']);
    }
    if(empty($_POST['cpass'])){
        echo "<script>alert('Confirm Password required!!');</script>";
        $f1=1;
        
    }
    else if(!preg_match("/^[0-9][a-zA-z]{8,}$/",$_POST['cpass'])){
        echo "<script>alert('Confirm Password is not in valid format');</script>";
        $f1=1;
    }
    else{
        $cpass=htmlspecialchars($_POST['cpass']);
    }

if($f1!=1){
    $sql="SELECT ID FROM student WHERE StudentEmail='$email' and ContactNumber='$mobno'";
    $q=mysqli_query($conn,$sql);
    if(mysqli_num_rows($q)==0){
        echo "<script> alert('User Your Account does not exist!!')</script>";
        
    }
    else{
        if($npass===$cpass){
            $up="UPDATE student SET Password='$npass' WHERE StudentEmail='$email' and ContactNumber='$mobno'";
        if(mysqli_query($conn,$up)){
            echo "<script>alert('Your Password succesfully changed');</script>";
            echo "<script>window.location.href = 'login.php'</script>";
        }
        else{
            echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
        }
        }
        else{
            echo "<script>alert('Confirm Password and New Password does not match');</script>";
        }

    }
}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <style>
    input[type='number']{
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 3px;
    border: none;
    background-color: #f5eded;
  }
  </style>
</head>
<body>  

<div>

<form method="post" >

<h4>RECOVER PASSWORD</h4>
<h6 class="font-weight-light">Enter your email address and mobile number to reset password!</h6>
<br>
<input type="text" id="email" name="email" placeholder="Email Address" value="<?php echo $email?>">
<span class="err"><?php echo $emailErr ?> </span>
<input type="number" id="num" name="num" placeholder="Mobile Number" value="<?php echo $mobno ?>">
<span class="err"><?php echo $mobnoErr ?></span>
<input type="text" id="npass" name="npass" placeholder="New Password">
<span class="err"><?php echo $npassErr ?></span>
<input type="text" id="cpass" name="cpass" placeholder="Confirm Password">
<span class="err"><?php echo $cpassErr ?></span>
    
    <input type="submit" value="Reset" name="reset">
    
    <br> <br>
    <div class="form-check">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
        
          </div>
          <div class="col-md-6" style="text-align:right"><a href="login.php" class="d">Already have a Account?</a></div>
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

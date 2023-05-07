<?php  
// session_start();
include('include/db.php');
$sname=$semail=$sclass=$sgender=$sdob=$sid=$fathername=$mothername=$contactno=$alterno=$add=$user=$pass="";
$f1=0;
if(isset($_POST['Submit'])){
    if(empty($_POST['sname'])){
        echo '<script>alert("Student Name is required!!")</script>';
        $f1=1;
    }
    else{
        $sname=$_POST['sname'];
    }
    if(empty($_POST['semail'])){
        echo '<script>alert("Student Email is required!!")</script>';
        $f1=1;
    }
    else{
        $semail=$_POST['semail'];
    }
    if(empty($_POST['class'])){
        echo '<script>alert("Student CLass is required!!")</script>';
        $f1=1;
    }
    else{
        $sclass=$_POST['class'];
    }
    if(empty($_POST['gender'])){
        echo '<script>alert("Student Gender is required!!")</script>';
        $f1=1;
    }
    else{
        $sgender=$_POST['gender'];
    }
    if(empty($_POST['sDOB'])){
        echo '<script>alert("Student Date Of Birth is required!!")</script>';
        $f1=1;
    }
    else{
        $sdob=$_POST['sDOB'];
    }
    if(empty($_POST['stuID'])){
        echo '<script>alert("Student ID is required!!")</script>';
        $f1=1;
    }
    else{
        $sid=$_POST['stuID'];
    }
    if(empty($_POST['fname'])){
        echo '<script>alert("Father Name is required!!")</script>';
        $f1=1;
    }
    else{
        $fathername=$_POST['fname'];
    }
    if(empty($_POST['mname'])){
        echo '<script>alert("Mother Name is required!!")</script>';
        $f1=1;
    }
    else{
        $mothername=$_POST['mname'];
    }
    if(empty($_POST['conno'])){
        echo '<script>alert("Mobile Number is required!!")</script>';
        $f1=1;
    }
    else if(!preg_match('/^[1-9]{1}[0-9]{9}$/',$_POST['conno'])){
        echo "<script>alert('Only 10 digits are required in Mobile Number!!');</script>";
        $f1=1;
    }
    else{
        $conno=$_POST['conno'];
    }
    
    if(empty($_POST['altno'])){
        echo '<script>alert("Alternate Mobile Number is required!!")</script>';
        $f1=1;
    }
    else if(!preg_match('/^[1-9]{1}[0-9]{9}$/',$_POST['altno'])){
        echo "<script>alert('Only 10 digits are required in Mobile Number!!');</script>";
        $f1=1;
    }
    else{
        $altno=$_POST['altno'];
    }
    if(empty($_POST['add'])){
        echo '<script>alert("Address is required!!")</script>';
        $f1=1;
    }
    else{
        $add=$_POST['add'];
    }

    if(empty($_POST['user'])){
        echo '<script>alert("UserName is required!!")</script>';
        $f1=1;
    }
    else{
        $user=$_POST['user'];
    }
    if(empty($_POST['pass'])){
        echo '<script>alert("Password is required!!")</script>';
        $f1=1;
    }
    else if(!preg_match("/^[0-9][a-zA-z]{8,}$/",$_POST['pass'])){
        echo "<script>alert('Password is not in valid format');</script>";
        $f1=1;
    }
    else{
        $pass=$_POST['pass'];
    }
    
    if($f1!=1){
        $sql="SELECT UserName FROM student WHERE UserName='$user' or StuID='$sid'";
        $q=mysqli_query($conn,$sql);
        if(mysqli_num_rows($q)==0){
                $sql="INSERT INTO student ( StudentName , StudentEmail, StudentClass, Gender, DOB, StuID, FatherName, MotherName, ContactNumber, AltenateNumber, Address, UserName, Password) VALUES ('$sname','$semail','$sclass','$sgender','$sdob','$sid','$fathername','$mothername','$conno','$altno','$add','$user','$pass')";
        
                if(mysqli_query($conn,$sql)){
                    echo '<script>alert("Student has been added.")</script>';
                    echo "<script>window.location.href = 'manage-students.php'</script>";    
                }
                else{
                    echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
                }
        }
        else{
            echo "<script>alert('Username or Student Id  already exist. Please try again');</script>";
        }
    }

    
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student  Management System|| Add Students</title>
      
    
    <style>
        .f{
        background-color: white;
           width: 100%;
           height: 100%;
        }
        h2{
            text-align: center;
        }
        input[type="text"],input[type="number"],input[type="file"],input[type="date"] ,input[type="email"], select ,input[type='password']{
    width: 80%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 3px;
    border: none;
    background-color: #f5eded;
  }
  input[type="submit"]{
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    
  }
    </style>
</head>
<body>

<div class="container">

<?php  include_once('include/sidebar.php'); ?>
<section class="main">
<h1> Add Students </h1>
<div class="f">
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title" style="text-align: centre;">Add Students</h2>

        <form action="" method="post">

        <h3>Student Details</h3>
        <div class="form-group">
            <label for="name">Student Name</label> 
            <input type="text" name="sname" id="sname"  required value="<?php echo $sname ?>" />
        </div>
       

        <div class="form-group">
            <label for="email">Student Email</label> 
            <input type="text" name="semail" id="semail" value="<?php echo $semail ?>" required/>
        </div>

        
        <div class="form-group">
            <label for="email">Student CLass</label> 
            <select name="class" id="class">
                <option value="Select Class">Select Class</option>
                <?php 
                $s="SELECT *FROM class";
                $q=mysqli_query($conn,$s);                
                while($v = mysqli_fetch_assoc($q)){
                   
                    ?>
            <option value="<?php echo htmlentities($v['ID']) ?>"><?php echo htmlentities($v["CLassName"]);?> <?php echo htmlentities($v['Section']);?> </option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="gender">Student Gender</label> 
            <select name="gender" id="gender">
                        <option value="Select One">Select One</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="DOB">Date Of Birth</label> 
            <input type="date" name="sDOB" id="sDOB" value="<?php echo $sdob ?>"  required/>
        </div>

        <div class="form-group">
            <label for="email">Student ID</label> 
            <input type="text" name="stuID" id="stuID" value="<?php echo $sid ?>"  required/>
        </div>

    
        <h3>Parent/Guardian's Details</h3>

        <div class="form-group">
            <label for="fname">Father's Name</label> 
            <input type="text" name="fname" id="fname" value="<?php echo $fathername ?>"  required/>
        </div>
        <div class="form-group">
            <label for="mname">Mother's Name</label> 
            <input type="text" name="mname" id="mname" value="<?php echo $mothername ?>"  required/>
        </div>
        <div class="form-group">
            <label for="conno">Contact Number</label> 
            <input type="text" name="conno" id="conno" value="<?php echo $contactno ?>"  required/>
        </div>
        <div class="form-group">
            <label for="altno">Alternate Number</label> 
            <input type="text" name="altno" id="altno" value="<?php echo $alterno ?>" required/>
        </div>

        <div class="form-group">
            <label for="addd">Address</label> 
            <input type="text" name="add" id="add" value="<?php echo $add ?>"  required/>
        </div>
        <h3>Login Details</h3>
        <div class="form-group">
            <label for="user">UserName</label> 
            <input type="text" name="user" id="user" value="<?php echo $user ?>" required/>
        </div>
        <div class="form-group">
            <label for="pass">Password</label> 
            <input type="password" name="pass" id="pass" value="<?php echo $pass ?>" required/>
        </div>
<input type="submit" name="Submit" value="Submit">
        </form>
        </div>
    </div>
    </div>
   

</div>
</section>
</div>


</body>
</html>
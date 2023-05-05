<?php 
include("include/db.php");
$sid=$amt="";
$f1=0;
if(isset($_POST['Submit'])){
    if(empty($_POST['sid'])){
        echo '<script>alert("Student ID is required!!.")</script>';
        $f1=1;
    }
    else{
        $sid=$_POST['sid'];
    }
    if(empty($_POST['amt'])){
        echo '<script>alert("Amount is required!!.")</script>';
        $f1=1;
    }
    else if($_POST['amt']<0){
        echo '<script>alert("Amount can not be negative!!.")</script>';
        $f1=1;
    }
    else{
        $amt=$_POST['amt'];
    }
    if($f1!=1){
        $c="SELECT *FROM student WHERE StuID='$sid'";
        $q1=mysqli_query($conn,$c);
        
        if(mysqli_num_rows($q1)>0){
            $sql="INSERT INTO fee_payments ( student_id, amount ) VALUES ('$sid','$amt')";
            if(mysqli_query($conn,$sql)){
                $up="UPDATE student SET fee_balance=fee_balance - $amt WHERE StuID='$sid'";
                if(mysqli_query($conn,$up)){
                    echo '<script>alert("Amount has been deposited.")</script>';
                    echo "<script>window.location.href ='manage-fee.php'</script>";
                }
                else{
                    echo '<script>alert("Something Went Wrong. Please try again")</script>';
                }
    
            }
            else{
               echo '<script>alert("Something Went Wrong. Please try again")</script>';
            }
        }
        else{
            echo '<script>alert("Student doesnt Exist")</script>';
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
    <title>Student  Management System|| Add Class</title>
    <style>
        .f{
        background-color: white;
           width: 100%;
           height: auto;
           top: 100vh;
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

    <?php include_once("include/sidebar.php");?>
    
    <section class="main">
    <h1> Add Amount</h1>
        <div class="f">
        <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title" style="text-align: centre;">Add Amount</h2>

        <form action="" method="post">
        <div class="form-group">
            <label for="cname">Student ID</label> 
            <input type="text" name="sid" id="sid"  required value="<?php echo $sid ?>" />
        </div>
       

        <div class="form-group">
            <label for="email">Amount</label> 
            <input type="text" name="amt" id="amt" value="<?php echo $amt ?>" required/>
        </div>
        <input type="submit" value="Submit" name="Submit" >
</form>
        </div>
</div>
</div>
    </section>
    </div>
</body>
</html>
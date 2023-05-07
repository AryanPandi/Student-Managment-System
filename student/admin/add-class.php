<?php 
include("include/db.php");
$cname=$secname="";

if(isset($_POST['Submit'])){
    $cname=$_POST['cname'];
    $secname=$_POST['csec'];
    $c="SELECT CLassName and Section FROM class WHERE CLassName='$cname' and Section='$secname' ";
    $q1=mysqli_query($conn,$c);
    if(mysqli_num_rows($q1)==0){
        $sql="INSERT INTO class(CLassName,Section) VALUES ('$cname','$secname')";
        if(mysqli_query($conn,$sql)){
            echo '<script>alert("Class has been added.")</script>';
echo "<script>window.location.href ='manage-class.php'</script>";
        }
        else{
           echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    }
    else{
        echo '<script>alert("CLass Already Exist")</script>';
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
    <h1> Add Class</h1>
        <div class="f">
        <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title" style="text-align: centre;">Add CLass</h2>

        <form action="" method="post">
        <div class="form-group">
            <label for="cname">Class Name</label> 
            <input type="text" name="cname" id="cname"  required value="<?php echo $cname ?>" />
        </div>
       

        <div class="form-group">
            <label for="email">Section</label> 
            <input type="text" name="csec" id="csec" value="<?php echo $secname ?>" required/>
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
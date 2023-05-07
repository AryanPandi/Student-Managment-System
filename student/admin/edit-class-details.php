<?php 
include("include/db.php");
$cname=$secname="";

if(isset($_POST['Submit']))
{
    $cname=$_POST['sname'];
 $secname=$_POST['sclass'];
 
 $eid=$_GET['editid'];

 $sql="UPDATE class SET CLassName='$cname',Section='$secname'  WHERE ID ='$eid' ";

 if(mysqli_query($conn,$sql)){
    echo '<script>alert("CLass has been updated")</script>';
    echo "<script>window.location.href ='manage-class.php'</script>";
 }
 else{
    echo '<script>alert("Some Error Occured!!!")</script>';
 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student  Management System|| Update Class</title>
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
<h1> Update Class</h1>
<div class="f">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="text-align:centre">Update Class</h2>

                <form  method="post">
                    <?php 
                 $eid=$_GET['editid'];
                    $sl="SELECT * FROM class  WHERE ID='$eid'";
                    $sq=mysqli_query($conn,$sl);

                    if(mysqli_num_rows($sq) > 0){
                    while($v = mysqli_fetch_assoc($sq)){ 
                        // print_r($v);?>
                       <div class="form-group">
                     <label for="name">CLass Name</label> 
                    <input type="text" name="sname" id="sname"  required value="<?php echo htmlentities($v['CLassName']) ?>" />
                </div>
                <div class="form-group">
                     <label for="name">Section</label> 
                    <input type="text" name="sclass" id="sclass"  required value="<?php echo htmlentities($v['Section']) ?>" />
                </div>

        <?php }} ?> 
       
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
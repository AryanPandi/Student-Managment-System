<?php 
session_start();
error_reporting(0);
include("include/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student  Management System|||Manage Students></title>
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
  .right{
    float:right;
}

.left{
    float:left;
}
    </style>
</head>
<body>
    <div class="container">
    <?php  include_once('include/sidebar.php'); ?>
    
    <section class="main">
        
    <div class="content-wrapper">
            <h3> Manage Students </h3>
    <div class="f">
            <table class="table">
                <thead>
                    <tr>
                    <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Class Name</th>
                            <th class="font-weight-bold">Section</th>
                            <th class="font-weight-bold">Creation Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql="SELECT * FROM class";
                    $q=mysqli_query($conn,$sql);
                    $c=1;
                    if(mysqli_num_rows($q)>0){ 

                    while($row=mysqli_fetch_assoc($q)){
                        // print_r($row);
                    ?>
                    <tr>
                        <td><?php echo htmlentities($c) ?></td>
                        <td><?php echo htmlentities($row['CLassName']); ?></td>
                        <td><?php echo htmlentities($row['Section']); ?></td>
                        <td><?php echo htmlentities($row['ClassTime']); ?></td>
                    
                    </tr>

                         <?php $c+=1;
                    }
                }
                    ?>
                </tbody>

            </table>
        </div>
            
        
    </section>
    </div>

</body>
</html>
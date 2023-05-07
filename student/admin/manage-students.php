<?php 
session_start();
error_reporting(0);
include("include/db.php");
if(isset($_GET['delid'])){
    $eid=($_GET['delid']);
    $sql="DELETE FROM student WHERE StuID='$eid'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-students.php'</script>";     
    }
    else{
        echo "<script>alert('Some Error Occured!!');</script>"; 
    }
}
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
                            <th class="font-weight-bold">Student ID</th>
                            
                            <th class="font-weight-bold">Student Class</th>
                            <th class="font-weight-bold">Student Name</th>
                            <th class="font-weight-bold">Student Email</th>
                            <th class="font-weight-bold">Student Address</th>
                            <th class="font-weight-bold">Admissin Date</th>
                            <th class="font-weight-bold">Fee Status</th>
                            <th class="font-weight-bold">Fee Amount</th>
                            <th class="font-weight-bold">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $sql="SELECT student.StuID,student.ID,student.StudentName,student.address,student.StudentEmail,student.DateofAdmission,student.AltenateNumber,student.fee_balance,class.ClassName,class.Section from student join class on class.ID=student.StudentClass ";
                    $q=mysqli_query($conn,$sql);
                    $c=1;
                    if(mysqli_num_rows($q)>0){ 

                    while($row=mysqli_fetch_assoc($q)){
                        // print_r($row);
                    ?>
<tr>
                        <td><?php echo htmlentities($c) ?></td>
                        <td><?php echo htmlentities($row['StuID']); ?></td>
                      
                        <td><?php echo htmlentities($row['ClassName']);?> <?php echo htmlspecialchars($row['Section']) ?></td>
                        <td><?php echo htmlentities($row['StudentName']);?></td>
                        <td><?php echo htmlentities($row['StudentEmail']);?></td>
                        <td><?php echo htmlentities($row['address']);?></td>
                        <td><?php echo htmlentities($row['DateofAdmission']);?></td>
                        <td>
                            <?php 
                            if($row['fee_balance']<0){
                                echo "PAID";
                            }
                            else{
                                echo "UNPAID";
                            }
                           
                            ?>
                        </td>
                        <td>
                            <?php 
                            if($row['fee_balance']>=0){
                                echo htmlentities($row['fee_balance'])." Remaining";
                            }
                            else{
                                echo htmlentities(abs($row['fee_balance']))." Surplus";
                            }
                           
                            ?>
                        
                        </td>

                        <td>
                        <div>
                            <a href="edit-student-details.php?editid=<?php echo htmlentities ($row['StuID']);?>">
                              Edit</a>
                                                || 
                                <a href="manage-students.php?delid=<?php echo ($row['StuID']);?>" onclick="return confirm('Do you really want to Delete ?');">Delete</a>
                              </div>
                        </td>
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
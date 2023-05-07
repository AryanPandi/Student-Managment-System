<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    
</head>
<body>
  <div class="container">
    <?php include_once('include/sidebar.php'); ?>

   

    <section class="main">
      <div class="main-top">
        <h1>Student</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        
        <div class="card">
          <!-- <img src="./pic/img1.jpg"> -->
          <h4>Aryan Pandi</h4>
          <!-- <p>Ui designer</p> -->
          <div class="per">
            <table>
              <tr>
                <td><span>20BCE020</span></td>
                <td><span>6BCE-F</span></td>
              </tr>
              <tr>
                <td>Roll No</td>
                <td>Section</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <!-- <img src="./pic/img2.jpg"> -->
          <h4>Devangi Hadiya</h4>
          <!-- <p>Progammer</p> -->
          <div class="per">
            <table>
              <tr>
                <td><span>20BCE084</span></td>
                <td><span>6BCE-B</span></td>
              </tr>
              <tr>
              <td>Roll No</td>
                <td>Section</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <!-- <img src="./pic/img3.jpg"> -->
          <h4>Malav Shah</h4>
          <!-- <p>tester</p> -->
          <div class="per">
            <table>
              <tr>
                <td><span>20BCE147</span></td>
                <td><span>6BCE-B</span></td>
              </tr>
              <tr>
              <td>Roll No</td>
                <td>Section</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Student List</h1>
          <table class="table">
            <thead>
            <tr>
                    <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Student ID</th>
                            <th class="font-weight-bold">Student Class</th>
                            <th class="font-weight-bold">Student Name</th>
                            <th class="font-weight-bold">Student Email</th>
                            <th class="font-weight-bold">Contact Number</th>
                            <th class="font-weight-bold">Alternate Number</th>
                            <th class="font-weight-bold">Address</th>
                            <th class="font-weight-bold">Admissin Date</th>
                            <th class="font-weight-bold">Fee Status</th>
                            
                    </tr>
            </thead>
            <tbody>
              <?php 
              $sql="SELECT student.StuID,student.ID,student.StudentName,student.address,student.StudentEmail,student.DateofAdmission,student.ContactNumber,student.AltenateNumber,student.fee_balance,class.ClassName,class.Section from student join class on class.ID=student.StudentClass ";
              $q=mysqli_query($conn,$sql);
              $c=1;
              if(mysqli_num_rows($q)>0){ 

              while($row=mysqli_fetch_assoc($q)){
                  // print_r($row);
              ?>
              <tr>
              <td><?php echo htmlentities($c) ?></td>
              <td><?php echo htmlentities($row['StuID']) ?></td>
              <td><?php echo htmlentities($row['ClassName']) ?>-<?php echo htmlentities($row['Section']) ?></td>
              <td><?php echo htmlentities($row['StudentName']) ?></td>
              <td><?php echo htmlentities($row['StudentEmail']) ?></td>
              <td><?php echo htmlentities($row['ContactNumber']) ?></td>
              <td><?php echo htmlentities($row['AltenateNumber']) ?></td>
              <td><?php echo htmlentities($row['address']) ?></td>
              <td><?php echo htmlentities($row['DateofAdmission']) ?></td>
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


              </tr>

          <?php 
          $c=$c+1;
              }} ?>
           
             
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .navbar{
            height: 100px;
        }
        html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
.content {
      min-height: calc(100% - 100px); /* 100px is the height of the footer */
      overflow: auto;
    }
    .footer {
      height: 100px;
      background-color: #ccc;
    }
main {
  flex: 1;
}
        body{
            background: url("../images/banner.jpg");
    background-size:cover;
	min-height:650px;
	padding-top:0em !important;
	text-align:center;
    
        }
        nav .logo{
    width: 80px;
    cursor: pointer;
}
nav ul{
    flex: 1;
    text-align: right;
    margin-right: 40px;
}
nav ul li{
    list-style: none;
    display: inline-block;
    margin: 10px 20px;
}
nav ul li a{
    text-decoration: none;
    color: red;
    font-weight: 700;
    position: relative;
    padding: 5px;
    font-size: x-large;
}

    </style>
</head>
<body>
    <?php 
    include('h.php');
    ?>
    <div class="content">

    </div>
    <footer class="footer fixed-bottom">
    <footer class="bg-dark text-white py-4 footer fixed bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Company Name</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum lectus eu ex pharetra maximus. Duis vulputate vestibulum est, sit amet elementum velit consequat vel.</p>
      </div>
      <div class="col-md-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contact</h5>
        <ul class="list-unstyled">
          <li>123 Main Street</li>
          <li>Anytown, USA 12345</li>
          <li>info@company.com</li>
          <li>(555) 555-5555</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center py-3">
    <p>&copy; 2023 Company Name. All rights reserved.</p>
  </div>
</footer>

    </footer>
     
      
</body>
</html>

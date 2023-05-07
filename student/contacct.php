<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact Form</title>
    <!-- Form styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/c.css" />
    <style>
      label{
        font-size: x-large;
      }
      button{
        margin-bottom: 10px;
      }
      .c{
        background-color: lightgreen;
        color:white;
        border-radius: 10px;
      }
      
    </style>
  </head>
  <body>
    <div class="formcarry-container">
      <form action="contact.php" method="POST" class="formcarry-form">
        <label for="name" >Your Name</label>
        <input type="text" id="name" name="fullName" required />

        <label for="email">Your Email Address</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <button type="submit">Send</button> 
        <div class="c">
                    <a href="index.php" class="btn btn-block btn-facebook auth-form-btn">
                      Back Home </a>
                  </div>
      </form>
    </div>
  </body>
</html>
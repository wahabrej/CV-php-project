<?php
require 'config.php';
 if(!empty($_SESSION["id"])){
   header("Location: index.php");
 }
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgb(229, 211, 211);
      }

      * {
        box-sizing: border-box;
      }

      /* Add padding to containers */
      .container {
        padding: 16px;
        background-color: white;
      }

      /* Full-width input fields */
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }

      input[type="text"]:focus,
      input[type="password"]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Overwrite default styles of hr */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }

      /* Set a style for the submit button */
      .registerbtn {
        background-color: #04aa6d;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }

      .registerbtn:hover {
        opacity: 1;
      }

      /* Add a blue text color to links */
      a {
        color: dodgerblue;
      }

      /* Set a grey background color and center the text of the "sign in" section */
      .signin {
        background-color:gray;
        text-align: center;
      }
      .container {
        max-width: 95%;
        align-items: center;
       
      }
      nav {
       
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
      }
      .right ul {
        float: right;
      }
      .right ul li {
        float: left;
        list-style-type: none;
        margin: 30px;
      }
      .left ul li img {
        width: 100px;
        height: 70px;
        border-radius: 50%;
      }
      .left ul li {
        float: left;
        list-style-type: none;
        margin-left: 20px;
      }
      .right ul li a {
        text-decoration: none;
      }
      .right ul li a:hover {
        text-decoration: tomato underline;
        color: rgb(10, 15, 20);
      }
      .left ul li h2,
      p {
        margin-top: 20px;
      }
      
    
 </style>
<body>
<div class="container">
      <nav>
        <div class="left">
          <ul>
           
            <li>
              <h2>Online CV generator</h2>
              
            </li>
          </ul>
        </div>

        <div class="right">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">More</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="main">
       
        </div>
      
      </main>
    </div>
    <center>
      <form class="" action="" method="post" autocomplete="off">
        <div class="container" style="width: 400px;margin-top: 20px; ">
          <h2>Registration</h2>
          <form class="" action="" method="post" autocomplete="off">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required value="" /> <br />
            <label for="username">Username : </label>
            <input
              type="text"
              name="username"
              id="username"
              required
              value=""
            />
            <br />
            <label for="email">EmailId : </label><br>
            <input type="email" name="email" id="email" required value="" style="width:370px;height:40px;background-color:white"  />
            <br />
            <label for="password">Password : </label>
            <input
              type="password"
              name="password"
              id="password"
              required
              value=""
            />
            <br />
            <label for="confirmpassword">Confirm Password : </label>
            <input
              type="password"
              name="confirmpassword"
              id="confirmpassword"
              required
              value=""
            />
            <br />
            <button type="submit" name="submit">Register</button>
          </form>
          <br />
          <a href="login.php">Login</a>
        </div>
      </form>
    </center>
  </body>
</html>

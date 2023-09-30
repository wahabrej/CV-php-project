<?php
require 'config.php';
 if(!empty($_SESSION["id"])){
   header("Location: index.php");
 }
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: temp4.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
        background-color: #f1f1f1;
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
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
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
        <div class="div" style="width:400px;margin-top:20px">
            <h2>Login</h2>
            <form class="" action="" method="post" autocomplete="off">
              <label for="usernameemail">Username or Email : </label>
              <input
                type="text"
                name="usernameemail"
                id="usernameemail"
                required
                value=""
              />
              <br />
              <label for="password">Password : </label>
              <input type="password" name="password" id="password" required value="" />
              <br />
              <button type="submit" name="submit">Login</button>
            </form>
            <br />
            <a href="registration.php">Registration</a>
        </div>
        
    </center>
    
   
  </body>
</html>

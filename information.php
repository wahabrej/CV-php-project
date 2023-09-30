<?php
   include 'config.php';
   if(isset($_POST["submit"])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $school=$_POST['school'];
    $collage=$_POST['collage'];
    $university=$_POST['university'];
	  $ex1=$_POST['ex1'];
    $ex2=$_POST['ex2'];
    $ex3=$_POST['ex3'];
    $prof=$_POST["professtion"];
    $dob=$_POST["dob"];
    $hobby=$_POST["hobby"];
  
    $sql="INSERT INTO `information`(`id`, `name`, `email`, `contact`, `school`, `collage`, `university`,`ex1`,`ex2`,`ex3`,`professtion`,`dob`,`hobby`) VALUES ('','$name','$email','$contact','$school','$collage','$university','$ex1','$ex2','$ex3','$prof','$dob','$hobby')";
    $result=mysqli_query($conn,$sql);
       if($result){
      header("location:template.php");
       }else{
        die(mysqli_error($conn));
       }
       session_start();
       $_SESSION["na"]=$name;
       $_SESSION["em"]=$email;
       $_SESSION["co"]=$contact;
       $_SESSION["school"]=$school;
       $_SESSION["collage"]=$collage;
       $_SESSION["university"]=$university;
       $_SESSION["ex1"]=$ex1;
       $_SESSION["ex2"]=$ex2;
       $_SESSION["ex3"]=$ex3;
       $_SESSION["prof"]=$prof;
       $_SESSION["dob"]=$dob;
       $_SESSION["hobby"]=$hobby;
      
    

 }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-color: aquamarine;
  }
  .form{
    margin-top: 30px;
  }
    
    input{
        margin:10px;
        
    }
    label{
        text-align: right;
    }
    
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      
    
      }
      .container {
        max-width: 95%;
        align-items: center;
        margin-left: 30px;
      }
      nav {
       background-color: seashell;
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
        height: 100px;
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
              <li><a href="home.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </div>
        </nav>
        <main>
          <div class="main">
         
          </div>
        
        </main>
      </div>
    <center>
        <div class="form">
           
            <form action="" method="post" >
            <div class="left"  style="width:30%;float:left">
                <h1>Your Personal Information</h1><br><br>
               
       
                <label for="name">Name:</label>
                <input type="text" name="name" style=""><br><br>
                <label for="Email">Email:</label>
                <input type="email" name="email" style=""><br><br>
                <label for="Contact">Contact:</label>
                <input type="number" name="contact" style=""><br><br>
                
             
               
               
            
        </div>
            <div class="mid"  style="width:30%;float:right">
			 <h1>Skill & Experience</h1><br><br>
                
                
                <label for="name">ex1:</label>
                <input type="ex1" name="ex1" style=""><br><br>
                <label for="Email"> ex2:</label>
                <input type="ex2" name="ex2" style=""><br><br>
                <label for="Contact"> ex3:</label>
                <input type="ex3" name="ex3" style=""><br><br>
                
                   
                
            </div>
            <div class="right" style="width:30%;float:right">
                   <h1>Education</h1><br><br>             
                    <label for="name">School:</label>
                    <input type="text" name="school" style=""><br><br>
                    <label for="collage">Collage:</label>
                    <input type="text" name="collage" style=""><br><br>
                    <label for="university">University:</label>
                    <input type="university" name="university" style=""><br><br>
                    
                   
                    
           
                   
          
                 
                
            </div>
           
            <div class="left" style="width:30%;float:left">
                   <h1>professtion</h1><br><br>             
                    <label for="name">Profe:</label>
                    <input type="text" name="professtion" style=""><br><br>
                    <br><br>
                    
          
                 
                
            </div>
            <div class="mid"  style="width:30%;float:right">
                   <h1>DOB</h1><br><br>             
                    <label for="name">lan:</label>
                    <input type="text" name="dob" style=""><br><br>
                    <br><br>
                   
          
                 
                
            </div>
            <div class="right" style="width:30%;float:right">
                   <h1>Hobby</h1><br><br>             
                    <label for="name">hobby:</label>
                    <input type="text" name="hobby" style=""><br><br>
                    
                    <br><br>
                    <button type="submit" name="submit" >  submit </button>
          
                 
                
            </div>

            </form>

        
        </div>
        
    
    </center>
  

</body>
</html>

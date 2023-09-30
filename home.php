<?php
// include "config.php";
// if(!empty($_SESSION["id"])){
//   $id = $_SESSION["id"];
 
//   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);
// }
// else{
//   header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h2 onclick="location.href = 'home1.html'">Cv maker</h2>
    </div>
    <hr>

    <div class="middle">
        <div style="width: 50%;">
            <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif; font-weight: 600; margin-bottom: 0;">Free CV Builder <br> Make Your CV Online Quickly And Easily</p>
            <p style="margin-top: 5px; font-size: 20px; font-family: Arial, Helvetica, sans-serif; color: rgb(100, 99, 99); margin-bottom: 0;">Fast Easy Effective</p>
            <br>
            <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; color: rgb(131, 129, 129); line-height: 30px;">Creating a curriculum vitae can be overwhelming,<br> especially when you have to do it all by yourself. But this <br> time, Zety CV maker has got your back. Let’s outperform <br> your competition and get you that dream job.</p> <br>
            <p class="button" onclick="location.href = 'home2.php'">CREATE YOUR CV NOW</p>
        </div>
        <div style="width: 50%;">
            <img src="https://cdn.pixabay.com/photo/2018/05/18/15/30/web-design-3411373__480.jpg" alt="">
        </div>
    </div>
</body>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .header{
        width: 80%;
        margin: auto;
    }
    .header h2{
        color: #3983FA;
        cursor: pointer;
    }
    hr{
        border:none;
        height: 20px;
        height: 50px;
        margin-top: 0;
        border-bottom: 1px solid #b6b6b6;
        box-shadow: 0 10px 10px -10px rgb(145, 144, 144);
        margin: -50px auto 10px; 
        padding: 0;
    }
    .middle{
        display: flex;
        width: 70%;
        margin: 50px auto;
        justify-content: space-between;
    }
    .middle img{
        width: 650px;
        opacity: 85%;
    }
    .middle .button{
        color: #fff;
        font-family: Arial, Helvetica, sans-serif; 
        font-size: 18px; 
        border: 1px solid rgb(255, 255, 255); 
        width: fit-content; 
        padding: 15px 20px; 
        border-radius: 50px; 
        background: #D04141;
        cursor: pointer;
    }
</style>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
    form{
        margin-top: 200px;
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
        background-color: gray;
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
              <h2>CV MAKER</h2>
              
            </li>
          </ul>
        </div>

        <div class="right">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="template.php">Template</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="main">
          
          <hr />
        </div>
      
      </main>
      <div class="body">
	  
        <div class="left" style="width:45%;float:left;margin:80px 0 0 20px">
        <h3>Discover the easiest way to your CV</h3>
        <h1>Online CV Builder <br>With Creative Template</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, aliquam voluptatibus alias exercitationem voluptate qui? Possimus expedita amet id obcaecati, numquam mollitia dolorem, accusantium rem deleniti consectetur cupiditate repellat. Molestias totam inventore aliquid voluptates maiores sunt nemo adipisci mollitia iure modi! Hic sit ad consequuntur vel non! Nemo obcaecati facere nostrum velit, pariatur exercitationem. Nemo animi error ut asperiores voluptas!</ipsum></p>
        <!-- <form action="information.php" method="post" > -->
        <!-- <a href="information.php"><button style="color:black;background-color:gray;border-radius:50px 25px;margin:10px;width:200px;height:30px">Give Your Info</button></a>
        <!-- <button style="color:black;background-color:bisque;border-radius:50px 25px;margin:20px">Contact Us</button> -->
        <!-- </form> -->
       
<!--     
        </div>
        <div class="right" style="width:45%;float:right"><img src="img1.png" style="width:500px;height:500px;margin-top: 30px;border-radius:30%"></div>
      </div>
    </div>
    

</body>
</html>  -->

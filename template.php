<?php
// include 'config.php';
// if(!empty($_SESSION["id"])){
//   $id = $_SESSION["id"];
 
//   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);
// }
// else{
//   header("Location: login.php");
// }
session_start();
$name=$_SESSION["na"];

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
              <h2>CV Maker</h2>
              
            </li>
          </ul>
        </div>

        <div class="right">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="#">Template</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </div>
      </nav>
      <main>
      <div style="margin-top: 30px">
  
      <div class="left" style="width:70%;float:left">
      <button><a href="temp1.php">
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template one</h4>

            <img
              src="img1.png"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div></a>
          </button>
   
          
          <button>
		  <a href="temp3.php">
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template Two</h4>

            <img
              src="img2.png"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div>
		  
		  </a>
          </button>
    
  
        <button><from><a href="temp4.php">
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template Three</h4>

            <img
              src="img3.jpg"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div></a></from>
          </button>
   
          
        
          <button>
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template Four</h4>

            <img
              src="img4.jpg"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div>
          </button>
        
          <button>
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template Five</h4>

            <img
              src="img5.jpg"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div>
          </button>
          <button>
          <div
            class="bleft"
            style="
              width: 25%;
              float: left;
              border: 2px solid green;
              border-radius: 20px 3px;
              background-color: bisque;
              margin:10px;
            "
          >
            <h4 style="text-align: center">This is template Six</h4>

            <img
              src="img6.jpg"
              style="
                width: 300px;
                height: 400px;
                
                margin: 0 auto;
              "
              ;
            />
            
          </div>
          </button>
        
        </div>
        <div class="right" style="width:25%;float:right">
            <h1 style="margin-top: 300px;">Choose Anyone of these given template</h1>
			<hr>
            
        </div>
      
        </div>
      
      </main>
      
    

</body>
</html>
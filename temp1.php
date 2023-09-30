<?php
include 'config.php';


//  if(!empty($_SESSION["id"])){
//   $id = $_SESSION["id"];
 
//   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);
//   $nam=$_SESSION["na"];
//   $eml=$_SESSION["em"];
//   $cont=$_SESSION["co"];
//   $school=$_SESSION["school"];
//   $collage=$_SESSION["collage"];
//   $university=$_SESSION["university"];
//   $ex1=$_SESSION["ex1"];
//   $ex2=$_SESSION["ex2"];
//   $ex3=$_SESSION["ex3"];
  
//  }
//  else{
//   header("Location: login.php");
//  }
?>
<?php

   
    // $sql="SELECT * FROM `information` WHERE id=1";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //     $row=mysqli_fetch_assoc($result);
    //     $name=$row["name"];
    //     $email=$row["email"];
    //     $contact=$row["contact"];
	// 	$school=$row["school"];
    //     $collage=$row["collage"];
    //     $university=$row["university"];
	// 	$ex1=$row["ex1"];
    //     $ex2=$row["ex2"];
    //     $ex3=$row["ex3"];
    // }
 session_start();
  $nam=$_SESSION["na"];
  $eml=$_SESSION["em"];
  $cont=$_SESSION["co"];
  $school=$_SESSION["school"];
  $collage=$_SESSION["collage"];
  $university=$_SESSION["university"];
  $ex1=$_SESSION["ex1"];
  $ex2=$_SESSION["ex2"];
  $ex3=$_SESSION["ex3"];
  $prof=$_SESSION["prof"];
  $dob=$_SESSION["dob"];
  $hobby=$_SESSION["hobby"];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CV</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        #div1{
            border: 1px solid black;
            width: 800px;
            margin-left: 300px;
            height: 1060px;
        }
        #div2{
            background-color: rgb(39,25,126);
            margin: 0px;
            padding: 0px;
            height: 140px;
        }
        #img1{
            width: 130px;
            height: 130px;
            border-radius: 100px;
            margin-left: 40px;
            margin-top: 5px;
            float: left;

        }
        #h11{
            float: left;
            color: white;
            margin-left: 90px;
            font-size: 48px;
        }
        #div3{
            background-color: rgb(207,197,197);
            width: 270px;
            height: 920px;
            margin-top: 0px;
            float: left;

        }
        #h22{
            margin-left: 60px;
            font-size: 35px;
            
        }
        #h33{
            margin-left: 80px;
            font-size: 22px;
            margin-bottom: 14px;
        }
        #p1{
            margin-left: 25px;
            font-size: 19px;
            margin-top: 10px;
            font-weight: bold;
            opacity: 0.8;
        }
        #h44{
            margin-left: 80px;
        }
        #label01{
            font-size: 20px;
            margin-left: 25px;
            font-weight: bold;
            opacity: 0.8;
        }
        #label02{
            font-size: 20px;
            margin-left: 10px;
            font-weight: bold;
            opacity: 0.8;
        }
        #h55{
            margin-left: 80px;
            margin-bottom: 40px;
        }
        #p2{
            font-size: 21px;
            margin-top: 20px;
            margin-left: 70px;
            font-weight: bold;
            opacity: 0.8;
        
        }
        #div4{
            background-color: azure;
            width: 528px;
            height: 920px;
            float: left;
        }
        #label1{
            font-size: 32px;
            font-weight: bold;
        }
        .fa-briefcase{
            font-size: 32px;
            margin-left: 20px;
        }
        #label2{
            font-size: 24px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label4{
            font-size: 20px;
            font-weight: bold;
            margin-left: 90px;

        }
        #label3{
            font-size: 19px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label5{
            font-size: 24px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label6{
            font-size: 20px;
            font-weight: bold;
            margin-left: 80px;
        }
        #label7{
            font-size: 20px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label8{
            font-size: 24px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label9{
            font-size: 20px;
            font-weight: bold;
            margin-left: 80px;
        }
        #label10{
            margin-left: 60px;
            font-size: 20px;
            font-weight: bold;
        }
        .fa-book{
            font-size: 35px;
            margin-left: 20px;

        }
        #label11{
            font-size: 30px;
            font-weight: bold;
        }
        #p2{
            margin-left: 60px;
            font-size: 20px;
            font-weight: bold;
            opacity: 0.9;
            margin-top: 4px;
            margin-bottom: 0px;
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
       background-color: aqua;
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
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="logout.php">logout</a></li>
            </ul>
          </div>
        </nav>
      
      </div>

    <div id="div1">
        <div id="div2">
           
            <h1 id="h1" style="margin-left:20px;color:white"><?php echo $nam; ?></h1>
            <h4 id="h1" style="margin-left:20px;color:white"><?php echo $prof; ?></h4>

        </div>

        <div id="div3">
            <h2 id="h22"></h2>
            <h4 id="h33">Phone</h4>
            <p id="p1" style="margin-left: 40px;">+88<?php echo $cont; ?></p>
            <h4 id="h33">Email</h4>
            <p id="p1"><?php echo $eml ;?></p>
            <h4 id="h33">Address</h4>
            <p id="p1">4219 Mohammadpur Road Mirpur,Dhaka</p>
            <br>
            <h1 id="h44">Skills</h1>
            <label id="label01">Photoshop</label>
            <label id="label02">Illustrator</label><br><br>
            <label id="label01">MS Office</label>
            <label id="label02">HTML/CSS</label><br><br>
            <label id="label01">inDesign</label>
            <label id="label02">WordPress</label><br><br>

            <h1 id="h55">Hobby</h1>
            <p id="p1"> <?php echo $hobby; ?></p>
            <h1 id="h55" style="margin-left: 15px;margin-top:30px">Date Of Birth</h1>
            <p id="p1"> <?php echo $dob; ?></p>
            


        </div>


        <div id="div4">
            <br>
            <br>
            <i class="fa fa-briefcase"></i>
            <label id="label1">Work Experience</label><br><br><br>
            <label id="label2"><?php echo $ex2;?></label>
            <label id="label4">2017-2020</label><br>
            <label id="label3">ABCD TECH BD</label><br><br>

            <label id="label5"><?php echo $ex3;?></label>
            <label id="label6">2012-2016</label><br>
            <label id="label7">STUV Soft Tech</label><br><br>

            <label id="label8"><?php echo $ex1;?></label>
            <label id="label9">2007-2011</label><br>
            <label id="label10">IJKL Tech Limited</label><br><br><br>

            <i class="fa fa-book"></i>
            <label id="label11">Education</label><br><br>
            <p id="p2">MSC in Computer Science & Engineering</p>
            <p id="p2"><?php echo $university;?></p>
            <p id="p2">CGPA: 3.50</p>
            <p id="p2">Class of 2021</p><br>

            <p id="p2">BSC in Computer Science & Engineering</p>
            <p id="p2"><?php echo $university;?></p>
            <p id="p2">CGPA: 3:40</p>
            <p id="p2">Class of 2019</p><br>

            <p id="p2">Higher Secondary School Certificate</p>
            <p id="p2"><?php echo $collage;?></p>
            <p id="p2">GPA: 4.94</p>
            <p id="p2">2017</p><br>

            <p id="p2">Secondary School Certificate</p>
            <p id="p2"><?php echo $school;?></p>
            <p id="p2">GPA: 5.00</p>
            <p id="p2">2015</p>
            

        </div>

    </div>
    <button> <a href="login.php">Download</a></button>
    <button onclick="myfun()">Download1</button>
    <!-- printDiv("myDiv");

function printDiv(id){
        var printContents = document.getElementById(id).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
} -->

</body>
<script type="text/javascript">
    function myfun(){
        window.print();
    }


</script>

</html>
<?php
include 'config.php';


// if(!empty($_SESSION["id"])){
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
  
// }
// else{
//   header("Location: login.php");
// }
// session_start();
// $nam=$_SESSION["na"];
// $eml=$_SESSION["em"];
// $cont=$_SESSION["co"];
// $school=$_SESSION["school"];
// $collage=$_SESSION["collage"];
// $university=$_SESSION["university"];
// $ex1=$_SESSION["ex1"];
// $ex2=$_SESSION["ex2"];
// $ex3=$_SESSION["ex3"];
// $prof=$_SESSION["prof"];
// $dob=$_SESSION["dob"];
// $hobby=$_SESSION["hobby"];
// ?>
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
        body {
            background-color: whitesmoke;
        }

        #div1 {
            border: 1px solid black;
            width: 800px;
            margin-left: 300px;
            height: 1060px;
        }
        #div2 {
            background-color: azure;
            width: 500px;
            float: left;
            height: 1060px
        }
        #h1 {
            color: rgb(14, 18, 25);
            margin-left: 5px;
            font-size: 25px;

        }
        #paragraph {
            color: rgb(79, 82, 87);
            margin-left: 20px;

        }
        #h2 {
            color: rgb(79, 82, 87);
            font-size: 15px;
            float: left;
        }

        #h3 {
            color: currentColor;
            font-size: 13px;
            float: left;
        }
        #h4 {
            color: rgb(79, 82, 87);
            font-size: 15px;
            float: left;
        }
        #h5 {
            color: rgb(79, 82, 87);
            font-size: 15px;
            float: left;
        }

        #h6 {
            color: currentColor;
            font-size: 13px;
            float: left;
        }
        #div3 {
            
            width: 300px;
            margin-top: 0px;
            margin-left: 500px;
            height: 1060px;
            
        }
        #div4 {
            
            background-color: rgb(52, 184, 231);
            border: 1px solid skyblue;
            margin-top: 0px;
            width: 300px;
            height: 300px;
            
            
        }
        #div_photo {
            margin-top: 25px;
            margin-left: 25px;
        }

        #img1 {
            width: 130px;
            height: 130px;
            border-radius: 100px;
            margin-left: 40px;
            margin-top: 5px;
            float: left;

        }

        #h7 {

            color: black;
            font-size: 40px;
        }
        #h8 {
            margin-top: 0px;
            margin-left: auto;
            color: black;
            font-size: 12px;
        }
        #h9 {
            color: white;
            margin-left: 5px;
            font-size: 25px;

        }

        #h10 {
            margin-top: 3px;
            color: white;
            font-size: 12px;
            float: left;
        }

        #h11 {
            color: rgb(79, 82, 87);
            font-size: 12px;
            float: left;
        }
        #div5 {
            
            background-color: rgb(8, 12, 20);
            width: 302px;
            height: 759px;
            margin-top: 0px;
            
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


    <div id="div1" style="margin-top:10px">
        <div id="div2">
            <div id="div_profil">
                <table style=" margin-left: 25px;">
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg></td>
                         <!-- for icon -->
                        <td><h2 id="h1">PROFILE INFO</h2></td>
                    </tr>
                </table>
                    <hr size="2" width="90%" color="black">
                    <p id="paragraph">A software engineering student who is seeking to find the opportunity to work in a fun and challenging working environment that will encourage him to improve and learn new and necessary skills as well as be motivated by the company to do his best for the sake of helping himself and the company advancement in the software engineering industry.</p>
                       
            </div>
            <div id="div_education">
                <table style=" margin-left: 25px;">
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16"><path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" /></svg></td>
                        <!-- for icon -->
                        <td><h2 id="h1">EDUCATION</h2></td></tr>
                </table>
                    <hr size="2" width="90%" color="black">
                <table style=" margin-left: 25px;">
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" /><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" /></svg></td>
                        <td id="h2">2019 - Present</td>
                    </tr>
                    <tr><td></td><td id="h2">Bachelor Of Computer Science.</td></tr>
                    <tr><td></td><td id="h3"> <i><?php echo $university ;?></i></td></tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" /><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" /></svg></td>
                        <td id="h2">2015 - 2017</td></tr>
                    <tr><td></td><td id="h2">Science</td></tr>
                    <tr><td></td><td id="h3"><i><?php echo $collage ;?></i></td></tr>
                    <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" /><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" /></svg></td>
                        <td id="h2">2009 - 2015</td></tr>
                    <tr><td></td><td id="h2">Science</td></tr>
                    <tr><td></td><td id="h3"><i><?php echo $school ;?></i></td></tr>
                </table>
            </div>
            <div id="div_skill">
                    <table style=" margin-left: 25px;">
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16"><path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/></svg></td>
                            <!-- for icon -->
                            <td><h2 id="h1">MY SKILLS & EXPERTISE</h2></td>
                        </tr>
                    </table>
                        <hr size="2" width="90%" color="black">
                        
                            <table style=" margin-left: 20px;">
                            <b>
                                <tr><td><i>Photoshop</i></td> <td><progress id="h4" value="90" max="100"> 90% </progress></td><td><i>WordPress</i></td> <td><progress id="h8" value="95" max="100"> 95% </progress></td></tr>
                                <tr><td><i>Illustrator</i></td><td><progress id="h4" value="80" max="100"> 80% </progress></td><td><i>inDesign</i></td> <td><progress id="h8" value="80" max="100"> 85% </progress></td></tr>
                                <tr><td><i>MS Office</i></td><td><progress id="h4" value="100" max="100"> 100% </progress></td><td><i>HTML/CSS</i></td> <td><progress id="h8" value="70" max="100"> 70% </progress></td></tr>
                                </b>
                            </table>
                    
                        <p id="paragraph"> The following are my best skills which I believe are applicable to the position.</p>
                       
                </div>
                <div id="div_expreience">
                    
                    <table style=" margin-left: 25px;">
                        <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16"><path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/><path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/></svg></td>
                            <!-- for icon -->
                            <td><h2 id="h1">WORK EXPERIENCE</h2></td>
                        </tr>
                    </table>
                        <hr size="2" width="90%" color="black">
                    <table style=" margin-left: 25px;">
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16"><path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/></svg></td>
                            <td id="h5">2017-2020</td>
                        </tr>
                        <tr><td></td><td id="h5"><?php echo $ex1 ;?></td></tr>
                        <tr><td></td><td id="h6"><i>ABCD TECH BD</i></td></tr>
                        <br>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16"><path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/></svg></td>
                            <td id="h5">2012-2016</td></tr>
                        <tr><td></td><td id="h5"><?php echo $ex2 ;?></td></tr>
                        <tr><td></td><td id="h6"><i>STUV Soft Tech</i></td></tr>
                        <br>
                        <tr>
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="cornflowerblue" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16"><path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/></svg></td>
                            <td id="h5">2007-2011</td></tr>
                        <tr><td></td><td id="h5"><?php echo $ex3 ;?></td></tr>
                        <tr><td></td><td id="h6"><i>IJKL Tech Limited</i></td></tr>
                    </table>
                               
                </div>

        </div>
        <div id="div3">
            <div id="div4">
                <div id="div_photo">
                    <table>
                       
                        <tr><td><h1 id="h7"> <?php echo $nam ;?></h1></td></tr>
                        <tr><td><h1 id="h8"> <?php echo $prof ;?></h1></td></tr>
                    </table>

                </div>

            </div>
            <div id="div5">
                <div id="div_contact">
                    <table style=" margin-left: 25px;">
                        <tr><td><svg id="icon1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" /></svg></td>
                            <!-- for icon -->
                            <td><h2 id="h9">CONTACT</h2></td>
                        </tr>
                        <tr><td colspan="2"><hr size="2" width="100%" color="white"></td></tr>
                        <tr>
                            <td> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" /></svg></td>
                            <td id="h10">Phone</td>
                        </tr>
                        <tr><td></td><td id="h11">+88<?php echo $cont ;?></td></tr>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" /></svg></td>
                            <td id="h10">Email</td>
                        </tr>
                        <tr><td></td><td id="h11"><?php echo $eml ;?></td></tr>
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16"><path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" /></svg></td>
                            <td id="h10">Address</td>
                        </tr>
                        <tr><td></td><td id="h11">471/1 Somiti Building, Mirpur Kazipara, Dhaka</td></tr>
                    </table>
                </div>
                
                <div id="div_language">
                    <table style=" margin-top: 25px; margin-left: 25px;">
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-globe-central-south-asia" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM4.882 1.731a.482.482 0 0 0 .14.291.487.487 0 0 1-.126.78l-.291.146a.721.721 0 0 0-.188.135l-.48.48a1 1 0 0 1-1.023.242l-.02-.007a.996.996 0 0 0-.462-.04 7.03 7.03 0 0 1 2.45-2.027Zm-3 9.674.86-.216a1 1 0 0 0 .758-.97v-.184a1 1 0 0 1 .445-.832l.04-.026a1 1 0 0 0 .152-1.54L3.121 6.621a.414.414 0 0 1 .542-.624l1.09.818a.5.5 0 0 0 .523.047.5.5 0 0 1 .724.447v.455a.78.78 0 0 0 .131.433l.795 1.192a1 1 0 0 1 .116.238l.73 2.19a1 1 0 0 0 .949.683h.058a1 1 0 0 0 .949-.684l.73-2.189a1 1 0 0 1 .116-.238l.791-1.187A.454.454 0 0 1 11.743 8c.16 0 .306.084.392.218.557.875 1.63 2.282 2.365 2.282a.61.61 0 0 0 .04-.001 7.003 7.003 0 0 1-12.658.905Z" /></svg></td>
                            <!-- for icon -->
                            <td><h2 id="h9">LANGUAGE</h2></td>
                        </tr>
                        <tr><td colspan="2"><hr size="2" width="100%" color="white"></td></tr>
                        <ul>
                            <tr><td id="h4">Bangla</td><td> <progress id="h4" value="95" max="100"> 95% </progress></td></tr>
                            <tr><td id="h4">English</td><td> <progress id="h4" value="50" max="100"> 50% </progress></td></tr>
                            <tr><td id="h4">Hindi</td><td> <progress id="h4" value="30" max="100"> 30% </progress></td></tr>
                        </ul>
                    </table>
                </div>
                <div id="div_hobby">
                    <table style=" margin-left: 25px;">
                        <tr>
                            <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="cornflowerblue" fill="currentColor" class="bi bi-browser-edge" viewBox="0 0 16 16"><path d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.838 3.838 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006a.594.594 0 0 1-.043.041Z"/><path d="M.01 7.753a8.137 8.137 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5.21 5.21 0 0 1-.785-.377h-.01l-.12-.075a5.45 5.45 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285.129.001.257.012.384.033a4.037 4.037 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49Zm10.263 7.912c.088-.027.177-.054.265-.084-.102.032-.204.06-.307.086l.042-.002Z"/><path d="M10.228 15.667a5.21 5.21 0 0 0 .303-.086l.082-.025a8.019 8.019 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35c-.215.112-.436.21-.663.294a6.367 6.367 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644.002-.135.017-.268.046-.399a4.543 4.543 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996Z"/></svg></td>
                            <!-- for icon -->
                            <td><h2 id="h9">HOBBIES</h2></td></tr>
                            </table>
                        <hr size="2" width="90%" color="black">
                    <table style=" margin-left: 25px;">
                        <tr>
                           <p style="color:white"><?php echo $hobby;  ?></p> 
                         </tr>
                        
                    </table>
                    <h1 id="h55" style="margin-left: 15px;margin-top:30px;color:white">Date Of Birth</h1>
                    <p id="p1" style="color:white"> <?php echo $dob; ?></p>
                </div>

            </div>

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
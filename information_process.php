<?php
include 'config.php';


    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $school=$_POST['school'];
    $collage=$_POST['collage'];
    $university=$_POST['university'];
    echo $name;
    $sql="INSERT INTO `information`(`id`, `name`, `email`, `contact`, `school`, `collage`, `university`) VALUES ('','$name','$email','$contact','$school','$collage','$university')";
    $result=mysqli_query($conn,$sql);
       if($result){
      header("location:template.php");
       }else{
        die(mysqli_error($con));
       }



    
?>
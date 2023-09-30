<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      *{
        font-family: Arial, Helvetica, sans-serif;
        background-color: aliceblue;
		color:black;
      }

      * {
        box-sizing: border-box;
		background-color:aliceblue;
      }

      /* Add padding to containers */
      .container {
        padding: 16px;
        background-color: gray;
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
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
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
      <div class="left" style="float:left;margin-left:40px">
        <h2>Espetial Thanks-:</h2>
		<hr>
        <p>A.Wahab      : awahab193058@bscse.uiu.ac.bd</p>
        <p>Azizul Islam : Azizu201058@bscse.uiu.ac.bd</p>
        <p>Fuhad        : Fuhad193058@bscse.uiu.ac.bd</p>
        <p>Abir Hassan  :abir193058@bscse.uiu.ac.bd</p>
        <p>Direc Contact :980362922761828</p><br><br>
        <p>Hotline675894</p>
        <p>Address-:Company Bazar,la lula tech farma</p>
      </div>
      <div class="right">
	       <img src="img1.png" style="border-radius:45px;width:500px;height:500px;margin-top:30px">
	  </div>
    </center>
  </body>
</html>

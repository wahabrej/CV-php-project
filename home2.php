<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV maker</title>
</head>
<body>
    <div class="header">
        <h2 onclick="location.href = 'home1.html'">Cv maker</h2>
    </div>
    <hr>
    <div class="middle">
        <p style="text-align: center;
        font-size: 40px;
        color: #3983FA; font-family: Arial, Helvetica, sans-serif;">Choose what you want...</p>
        <div class="box">
            <div onclick="location.href='information.php'">
                <img src="note.svg" alt="">
                <p style="font-size: 20px; text-align: center; color: #3983FA;">CREATE A NEW CV</p>
                <p style="width: 90%; text-align: center; color: #949393;">We will help you create a cv step by step</p>
            </div>
            <div onclick="location.href='findcv.php'">
                <img src="search.svg" alt="">
                <p style="font-size: 20px; text-align: center; color: #3983FA;">Find A CV</p>
                <p style="width: 90%; text-align: center; color: #949393;">Enter the unique cv number to find</p>
            </div>
            
        </div>
        <div style="display: flex; flex-direction: row-reverse; margin-top: 50px;">
            <p style="color: white; font-weight: bold; background: #D04141; width: fit-content; padding: 10px 20px; cursor: pointer;">NEXT</p>
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
        width: 60%;
        margin: 50px auto;
    }
    .box{
        display: flex;
        gap: 20px;
        width: 	fit-content;
        margin: auto;
    }
    .box div{
        padding: 30px;
        border: 1px solid #3983FA;
        margin-top: 30px;
        cursor: pointer;
    }
    .box img{
        width: 50px;
        margin-left: 100px;
    }
    
</style>
</html>
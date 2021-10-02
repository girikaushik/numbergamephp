<!-- DEVELOPED BY KAUSHIK KUMAR GIRI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADITUDE</title>
<!-- DEVELOPED BY KAUSHIK KUMAR GIRI -->
<STYLE>
    body
    {
        background-color: cornflowerblue;
    }
    .head
    {
        color: cornsilk;
        background-color: rgb(0, 0, 0);
        text-align: center;
        padding: 1px;
    }
    .form
    {
        margin-top: 45px;
    }
   #text1,h2
    {
        margin-left: 35% !important;
       /* margin-left: 100px; */
        
    }
    #btn:hover
    {
        cursor: pointer;
    }
    .form h2
    {
        
        display: inline-block;
        margin-left: 40%  !important;
        color: rgb(255, 255, 255);
        text-decoration: underline;
    }
   
  
    </STYLE>
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['flag']==0)
    {
    $_SESSION['rand'] = rand (1,10);                          //used only 1-10 in place of 1-100 because that is more fun to predict 
    $_SESSION['points'] = 10;                          //used only 1-10 in place of 1-100 because that is more fun to predict 
    }
    ?>
    <div class="head">
        <h1>Assignment-5</h1>
      <p> LIFE : <?php echo $_SESSION['points']." / 10";?> <p>
    </div>
    <div class="form">
        <h2>NUMBER GAME </h2>
        <form action="game1.php" method="post">
            <input type="number" id="text1" name="guess" style="padding:5px 40px;"  placeholder="guess b/w 1-100"  max="10" >
           
            <input id="btn" type="submit" name="submit" value="check">
        </form>
    </div>
    
</body>
</html>
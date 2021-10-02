<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADITUDE</title>
    <style>
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
    .gen
    {
        color: white;
        font-size: 30px;
        text-align: center;
        margin-top:30px;
    }
    </style>
</head>
<body>
<div class="head">
        <h1>Assignment-5</h1>
    </div>
    <div class="gen">
    <?php
        session_start();
        $guess = $_POST['guess'];
        $submit = $_POST['submit'];
        if (isset($submit))
        {
            $_SESSION['flag'] =1;
            $_SESSION['points'] = $_SESSION['points'] -1;
            if($guess == null)
            {
                header("location: numbergame.php");
                exit();
            }
            else if ($guess >  $_SESSION['rand'])
            {
                echo "$guess is greater than real value ";
                // echo "$guess is greater than ". $_SESSION['rand'];
                echo "<br> <a href='numbergame.php'>try again</a>";
            }
           
            else if ($guess <  $_SESSION['rand'])
            {
                echo "$guess is smaller than real value";
                // echo "$guess is smaller than".$_SESSION['rand'];
                echo "<br> <a href='numbergame.php'>try again</a>";
            }
            else
            {
                $_SESSION['flag']=0;
                echo "hurrah!!!!!  $guess is correct answere <br>";
                echo "your score : ". $_SESSION['points'] ;
                echo "<br> <a href='numbergame.php'>play again</a>";
            }
           
        }
        else
        {
            header("location: numbergame.php");
            exit();
        }

    ?>
    </div>
</body>
</html>
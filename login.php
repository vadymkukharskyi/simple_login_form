<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
         <title> Login Form </title>
         <link rel="stylesheet" a href="style.css">
    </head>
        <body>
             <form method="POST" action="#">
         <div class="conteiner_logout"> 

            <?php

            echo "<br></br> You Have Successfully Logged in";
            if(isset($_POST['myActionName']))
            {
                require('logout.php');
            }
            
            ?>

            <center>
                <form action="logout.php" method="POST">
                     <input name="myActionName" type="submit" value="LOG OUT" class="btn-logout"/>
                </form>
            </center>
         </div>
    </body>
</html>
<?php
//creating a cookie to store the player 2 name, start--------------------------------------------------------------------------------------------
    if (isset($_POST['Pname2'])){
        //setting the cookie values
        $cookie_name = "PlayerName2";
        $cookie_value = $_POST['Pname2'];

        //setting the cookie expiry time to 3 days
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //setting the cookie value as $_POST['Pname2']
        $_COOKIE['PlayerName2'] = $_POST['Pname2'];
    }   
//end----------------------------------------------------------------------------------------------------------------------------------------------

//creating a cookie to store the player 2 name, start--------------------------------------------------------------------------------------------
    if (isset($_POST['Pname1'])){
        //setting the cookie values
        $cookie_name = "PlayerName1";
        $cookie_value = $_POST['Pname1'];

        //setting the cookie expiry time to 3 days
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //setting the cookie value as $_POST['Pname2']
        $_COOKIE['PlayerName1'] = $_POST['Pname1'];
    }   
//end----------------------------------------------------------------------------------------------------------------------------------------------

//creating a cookie to store the player 1 name, start-----------------------------------------------------------------------------------------------
    if (isset($_POST['Pname'])){
        //setting the cookie values
        $cookie_name = "PlayerName";
        $cookie_value = $_POST['Pname'];

        //setting cookie expiry time to 3 days
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //setting the cookie value as $_POST['Pname1']
        $_COOKIE['PlayerName'] = $_POST['Pname'];
    }   
//end----------------------------------------------------------------------------------------------------------------------------------------------
?>

    <html>

    <head>

        <!--------------------------------------linking style sheet start------------------------------------------>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="change.php" rel="stylesheet">
        <!--------------------------------------linking style sheet end-------------------------------------------->

        <!--------------------------------------setting the title to players name start---------------------------->
        <title>Hangman with <?php echo $_COOKIE['PlayerName']; ?> </title>
        <!--------------------------------------setting the title to players name end------------------------------>

    </head>

    <body>
        <!-------------------------------------including navbar page start----------------------------------------->
        <?php include 'navbar.php'; ?>
        <!-------------------------------------including navbar page end------------------------------------------->

        <form action="index.php" method="post">

        <!-------------------------------------text box to input player name start--------------------------------->
        <div id="Pname">
            <center>
            <!---player 1 name----------------------------------------------------------------------------------->
            <h2>Player name</h2><input type="text" name="Pname" value= "<?php echo $_COOKIE['PlayerName']; ?>">
            <input type="submit" name="submit" id="submit">
            <br><br>
                    
            <!--2 player------------------------------------------------------------------------------------>
            <h2>2 Player</h2>
            <input type="text" name="Pname2" value= "<?php echo $_COOKIE['PlayerName2']; ?>" ><br>
            <p> vs. </p><br>
            <input type="text" name="Pname1" value= "<?php echo $_COOKIE['PlayerName1']; ?>" ><br><br> 
            <input type="submit" name="submit" id="submit">
            </center>    
        </div>
        <!-------------------------------------text box to input player name end----------------------------------->
        </form>
    </body>

    </html>
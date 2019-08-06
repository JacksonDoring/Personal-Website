<?php
//if the reset button is pressed then the styles will reset, start----------------------------------------------------
    if($_POST['normal']){
        $_POST['BC'] = ""; 
        $_POST['FC'] = "";  
        $_POST['H'] = "";  
        $_POST['GA'] = "";  
        $_POST['B'] = "";  
        $_POST['NT'] = "";  
        $_POST['NB'] = "";  
        $_POST['NH'] = "";  
        $_POST['TS'] = "";  
        $_POST['HFS'] = "";  
    }
//end-----------------------------------------------------------------------------------------------------------------

//saving the styles inputted in the text boxes as cookies, start--------------------------------------------------------------------
    if (isset($_POST['BC'])){
        //setting the player name cookie
        $cookie_name = "BC";
        $cookie_value = $_POST['BC'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['BC'] = $_POST['BC'];
    }   

    if (isset($_POST['FC'])){
        //setting the player name cookie
        $cookie_name = "FC";
        $cookie_value = $_POST['FC'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['FC'] = $_POST['FC'];
    } 

    if (isset($_POST['H'])){
        //setting the player name cookie
        $cookie_name = "H";
        $cookie_value = $_POST['H'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['H'] = $_POST['H'];
    } 

    if (isset($_POST['GA'])){
        //setting the player name cookie
        $cookie_name = "GA";
        $cookie_value = $_POST['GA'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['GA'] = $_POST['GA'];
    }  

    if (isset($_POST['B'])){
        //setting the player name cookie
        $cookie_name = "B";
        $cookie_value = $_POST['B'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['B'] = $_POST['B'];
    } 
    
    if (isset($_POST['NT'])){
        //setting the player name cookie
        $cookie_name = "NT";
        $cookie_value = $_POST['NT'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['NT'] = $_POST['NT'];
    } 

    if (isset($_POST['NB'])){
        //setting the player name cookie
        $cookie_name = "NB";
        $cookie_value = $_POST['NB'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['NB'] = $_POST['NB'];
    } 

    if (isset($_POST['NH'])){
        //setting the player name cookie
        $cookie_name = "NH";
        $cookie_value = $_POST['NH'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['NH'] = $_POST['NH'];
    }  
    
    if (isset($_POST['TS'])){
        //setting the player name cookie
        $cookie_name = "TS";
        $cookie_value = $_POST['TS'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['TS'] = $_POST['TS'];
    } 

    if (isset($_POST['HFS'])){
        //setting the player name cookie
        $cookie_name = "HFS";
        $cookie_value = $_POST['HFS'];

        //setting player name cookies time expiry
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
    
        //set value for this page load
        $_COOKIE['HFS'] = $_POST['HFS'];
    }
//end----------------------------------------------------------------------------------------------------------------------
?>

<html>
    <head>
<!--changing the styles to within the css to whatever the corresponding cookie values is, start------------------------------------------------------------------------->        
    <style>
        h3{
            
        }
        p {
            color: <?php echo $_COOKIE['FC'] ?>;
            font-size: <?php echo $_COOKIE['TS'] ?>;
        }
        
        p2{
            color: <?php echo $_COOKIE['GA'] ?>;
        }
        
        body {
            background-color: <?php echo $_COOKIE['BC'] ?>; 
        }
        
        h2 {
            color: <?php echo $_COOKIE['H'] ?>;
            font-size: <?php echo $_COOKIE['HFS'] ?>;
        } 
        
        h1 {
            color: <?php echo $_COOKIE['B'] ?>;
        }
        
        #topnav a {
            color: <?php echo $_COOKIE['NT'] ?>;
        }
        
        #topnav {
            background-color: <?php echo $_COOKIE['NB'] ?>;
        }
        
        #topnav a:hover {
            background-color: <?php echo $_COOKIE['NH'] ?>;
        }
    </style> 
<!---end----------------------------------------------------------------------------------------------------------------->    

    <!-------------------------linking style sheet start--------------------------------------------------->
        <link rel="stylesheet" type="text/css" href="style.css">
    <!-------------------------linking style sheet end----------------------------------------------------->

    <!-------------------------title including the players name start-------------------------------------->
    <title>Hangman with
        <?php echo $_COOKIE['PlayerName']; ?> </title>
    <!-------------------------title including the players name end---------------------------------------->
    


</head>

<body>

    <!-------------------------including the navigation page start----------------------------------------->
    <?php include 'navbar.php'; ?><br>
    <!-------------------------including the navigation page end------------------------------------------->
    
<!---creating text boxes for players to enter desired styles, start--------------------------------------------------------------------->    
   <form method = "post" action = "change.php">
	   <center>		
       <table>
                
				<tr>
					<td>
						<p>Background Colour:</p>
					</td>
					<td>
						<input type = "text" name = "BC" value = "<?php echo $_COOKIE['BC']; ?>">
					</td>
                  
                    <td>
						<p>Banner:</p>
					</td>
					<td>
						<input type = "text" name = "B" value = "<?php echo $_COOKIE['B']; ?>">
					</td>
				</tr>
                
                <tr>
					<td>
						<p>Game Announcements:</p>
					</td>
					<td>
						<input type = "text" name = "GA" value = "<?php echo $_COOKIE['GA']; ?>">
					</td>
                    <td>
						<p>Navigation text:</p>
					</td>
					<td>
						<input type = "text" name = "NT" value = "<?php echo $_COOKIE['NT']; ?>">
					</td>
				</tr>
                
				<tr>
					<td>
						<p>Text Colour:</p>
					</td>	
					<td>
						<input type = "text" name = "FC" value = "<?php echo $_COOKIE['FC']; ?>">
					</td>
                    
                    <td>
						<p>Navigation background:</p>
					</td>	
					<td>
						<input type = "text" name = "NB" value = "<?php echo $_COOKIE['NB']; ?>">
					</td>
				</tr>
				
                <tr>
					<td>
						<p>Headings:</p>
					</td>
                    
					<td>
						<input type = "text" name = "H" value = "<?php echo $_COOKIE['H']; ?>">
					</td>
                    <td>
						<p>Navigation hover:</p>
					</td>
                    
					<td>
						<input type = "text" name = "NH" value = "<?php echo $_COOKIE['NH']; ?>">
					</td>
				</tr>
           
                <tr>
					<td>
						<p>Text size:</p>
					</td>
                    
					<td>
						<input type = "text" name = "TS" value = "<?php echo $_COOKIE['TS']; ?>">
					</td>
                    <td>
						<p>Heading font size:</p>
					</td>
                    
					<td>
						<input type = "text" name = "HFS" value = "<?php echo $_COOKIE['HFS']; ?>">
					</td>
				</tr>
                
                <tr>
					<td>
						<input type = "submit" name = "submit" value = "Update Page">
						<input type = "submit" name = "normal" value = "Reset">
					</td>
				</tr>
            </table>
           </center>      
		</form>		
<!---end---------------------------------------------------------------------------------------------------------------------------------->     
</body>

</html>
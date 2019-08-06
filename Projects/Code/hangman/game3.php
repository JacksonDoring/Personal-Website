<?php
    //splitting the letters in the random word into its own array
    $split_array = str_split($_POST['Answer']);
        
    //if the "_array" cookie is set, then the following code will run
    if(isset($_COOKIE['_array'])){ 
        
        //sets $_array to the values of "_array" cookie
        $_array = str_split($_COOKIE['_array']);
    }
    //if "_array" isn't set, then the following code will run    
    else{
        
        //setting the _array to nothing
        $_array = array();
    }

//if the user clicks "New Word" then a random word will be selected from the category, then underscores will be generated according to the number of letters in the word, then cookies will be created for the Wrong Letters, start----------------------------         
    //if "New Word" button is pressed, then the following code will run
    if($_POST['sub']){  
   
        //setting An cookies name and value
        $cookie_name = "An";
        $cookie_value = $_POST['Word'];

        //setting An cookies time expiry to 3 days
        setcookie($cookie_name, $cookie_value,time() + (86400 * 3), "/");
        $_COOKIE['An'] = $_POST['Word']; 
            
        //counting how many letters are in the word, then saving it
        $underscore = strlen($_COOKIE['An']);
            
        //counting how many letters are in the word, then saving it
        $underscore = strlen($_COOKIE['An']);
            
        //setting the $_array to nothing
        $_array = array();
            
        //Setting a counter for the while loop
        $Cunderscore = 0; 
            
        //loops until the counter is greater than the length of the word
        while($underscore > $Cunderscore){
                
            //adding an underscore to the $_array
            array_push($_array, "_"); 
                
            //adding 1 to the counter
            $Cunderscore += 1;  
        }
            
        //counting the length of $_array and storing it
        $arraylength = count($_array);
       
        //setting the Incorrect letters to nothing
        $Incorrect = '';
            
        //setting the counter for Incorrect letters to -1
        $IncorrectC = -1;
		
        //setting the Incorrect cookie values
        $cookie_name = 'Incorrect';
        $cookie_value = $Incorrect;
            
        //setting the expiry time for Incorrect cookie to 3 days
        setcookie($cookie_name, $cookie_value,time() + (84600 * 3), "/");
            
        //setting Incorrect cookie to the value of $Incorrect
        $_COOKIE[$cookie_name] = $cookie_value;
            
        //setting values for Incorrect Counter cookie
        $cookie_name = 'IncorrectC';
        $cookie_value = $IncorrectC;
            
        //setting the expiry time for Incorrect Counter to 3 days
        setcookie($cookie_name, $cookie_value,time() + (84600 * 3), "/");
            
        //setting Incorrect Counter cookie to the value of $IncorrectC
        $_COOKIE[$cookie_name] = $cookie_value;
    }
//end--------------------------------------------------------------------------------------------------------------------------------------

//if the 'Wrong' cookie is set, then the following code will run 
    if(isset($_COOKIE['Wrong'])){
            
        //sets $Wrong to as 'Wrong' cookie
        $Wrong = $_COOKIE['Wrong'];
    }
    //if the 'Wrong' cookie isn't set, then the following code will run
    else{
            
        //setting $Wrong to 0
        $Wrong = 0;
    }
            
//checks to see if the letter entered is in the word, if it is, then the corresponding underscore will be replaced with the letter, if not, then the wrong letter will be saved, start-------------------------------------------------------------------------------  
    //setting a counter
    $_count = 0;
            
    //creating a found counter
    $found = 0;
    
    //creating a correct counter
    $Correct = 0;

    //setting IncorrectC as IncorrectC cookie value
	$IncorrectC = $_COOKIE['IncorrectC'];

    //setting Incorrect as Incorrect cookie value
	$Incorrect = $_COOKIE['Incorrect'];

    //while the $_count value doesn't equal the number of letters in the word, then the following code will run     
    while($_count <> count($split_array)){
                
        //if the letter inputted by the user is in the word, then the following code will run
        if(strcasecmp($split_array[$_count], $_POST['Guess']) == 0){
            
            //replaces the underscore in $_array with the letter inputted
            $_array[$_count] = $_POST['Guess'];
            
            //setting $found to 1
            $found = 1;
            
            //adding 1 to the $Correct value
            $Correct ++;
        }
        //if the letter inputted by the user isn't in the word, then nothing will run
        else{
            
        }
                
        //adding 1 to $_count
        $_count += 1;
    }

    //if $Correct equals 0, then the following code will run
    if($Correct == 0){
        
		//adding 1 to $IncorrectC
		$IncorrectC ++;	
        
		//adding the wrong letter inputted with a comma to $Incorrect
		$Incorrect = $Incorrect . $_POST['Guess'] . ", ";
        
		//setting IncorrectCount cookie as $IncorrectC
		setcookie('IncorrectCount', $IncorrectC,time() + (84600 * 1), "/");
		$_COOKIE['IncorrectC'] = $IncorrectC;
        
        //setting Incorrect cookie as $Incorrect
		setcookie('Incorrect', $Incorrect,time() + (84600 * 1), "/");
		$_COOKIE['Incorrect'] = $Incorrect;
	}

    //if $found = 0, then the following code will run
    if($found == 0){
        
        //setting $Wrong as its self  + 1
        $Wrong = $Wrong+1;
    }
            
    //if 'New Word' is pressed, then the following code will run
    if($_POST['sub']){
        
        //$setting $Wrong to 0
        $Wrong = 0;
        
        //setting $_count to 0
        $_count = 0;
        
        //setting the 'Wrong' cookie to 0
        $_COOKIE['Wrong'] = 0;
    }
            
    //saving $Wrong as a cookie, so it can be accessed later
    setcookie("Wrong", $Wrong, time() + (86400 * 3), "/"); 
//end---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//creating arrays which store each letter of the alphabet $ the hangman images, start-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //storing each letter of the alphabet in an array
    $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    //creating an empty array called $Wrong_array
    $Wrong_array = array();
            
    //setting values 0-6 in $Wrong_array as consecutive hangman images  
    $Wrong_array[0] = '<img src="hang1.png" width="100px" height="100px">';
    $Wrong_array[1] = '<img src="hang2.png" width="100px" height="100px">';
    $Wrong_array[2] = '<img src="hang3.png" width="100px" height="100px">';
    $Wrong_array[3] = '<img src="hang4.png" width="100px" height="100px">';
    $Wrong_array[4] = '<img src="hang5.png" width="100px" height="100px">';
    $Wrong_array[5] = '<img src="hang6.png" width="100px" height="100px">';
    $Wrong_array[6] = '<img src="hang7.png" width="100px" height="100px">';
//end--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            
    //converting the values in $_array to one value 
    $_arrayTemp = implode($_array);
            
    //saving $_arrayTemp as a cookie, so it can be accessed later
    setcookie("_array", $_arrayTemp, time() + (86400 * 3), "/");   
?>
<html>

    <head>

        <!-----------------------------linking style sheets, start----------------------------------------------------------------->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="change.php" rel="stylesheet">
        <!-----------------------------linking style sheets, end------------------------------------------------------------------->

        <!-----------------------------Title with the players name, start---------------------------------------------------------->
        <title>
            <?php echo $_COOKIE['PlayerName1'] . " vs " . $_COOKIE['PlayerName2'] ; ?>
        </title>
        <!-----------------------------Title with the players name, end------------------------------------------------------------>

    </head>
    <body>

        <!-----------------------------Including Navigation Section, start-------------------------------------------------------->
        <?php include 'navbar.php'; ?>
        <!-----------------------------Including Navigation Section, end---------------------------------------------------------->

        <form action="game3.php" method="post">
        <center>
            
        <!-------------------------------------text input to enter word, start------------------------------------>
        <div id="cate">
            <h2>Choose a word!</h2>
            <input type="text" name="Word">
            <input type="submit" name="sub" value="Enter">
        </div>
        <!-------------------------------------buttons to select category, end-------------------------------------->
        
        <!-----------------------------Hiding the random word, start--------------------------------------------------------------------------------->
        <input type="hidden" name="Answer" Value="<?php echo $_COOKIE['An']; ?>">
        <!-----------------------------Hiding the random word, end----------------------------------------------------------------------------------->    
  
        <?php  
        //outputting images based on the number of wrong guesses, start------------------------------------------------------------------
            //if $Wrong is less than 6, then the following code will run
            if($Wrong < 6){
                
                //displays the $Wrong_array image that corresponds to the value of $Wrong
                echo $Wrong_array[$Wrong];
            } 
        //end-------------------------------------------------------------------------------------------------------------------------------------
        
        //ending the game if there has been 6 wrong guesses, start----------------------------------------------------------------------------------------    
            //if the user has 6 incorrect guesses, then the following code will run
            if($Wrong == 6){
                
                //displays the last hangman image
                echo $Wrong_array[6];
                
                //outputting "Better luck next time" & the players name & ", the word was" & the random word
                echo "<p2><br>Better luck next time, the word was " . $_POST['Answer'] . "</p2>";
                
            }  
        //end-------------------------------------------------------------------------------------------------------------------------------------    
            
        //if there's no "_" in $_array, then the user wins, start---------------------------------------------------------------------------------
            //if there's an "_", then nothing happens
            if(in_array("_", $_array)){
        
            }
            //if there isn't any "_", then the following code runs
            else{
                
                //displaying You win $ the players name
                echo "<p2><br> You win!</p2>"; 
            }
        //end-------------------------------------------------------------------------------------------------------------------------------------   
            
            echo "<br><br>";
             
        //displaying the values within the $_array, start-----------------------------------------------------------------------------------------
            //setting $arraylength to the number of values in $_array, so it can be used to run the for loop
            $arraylength = count($_array);
            
            //loops through the folloeing code until $n is greatter than $arraylength
            for($n = 0; $n < $arraylength; $n++){
                
                //displays the $_array value that corresponds to the $n value
                echo $_array[$n]; 
                
                //outputting a space inbetween each value
                echo " ";
            }
        //end-------------------------------------------------------------------------------------------------------------------------------------
        echo "<br><br>";   
        //ouputting buttons for each letter in the alphabet, start--------------------------------------------------------------------------------            
            
            //creating a count for the amount of buttons created
            $letter_count = 0;
            
            //while $letter_count is less than 26, then the following code will run
            while($letter_count < 26){
                
                //outputting a button with the letter from $letters that corresponds with the value of $letter_count 
                echo '<input type=submit value="'.$letters[$letter_count].'"  name="Guess">';
                
                //inserting a space inbetween each button
                echo " ";
                
                //adding 1 to $letter_count
                $letter_count ++;
            }
            echo "<br>";
        //end-------------------------------------------------------------------------------------------------------------------------------------        
            
            //displaying the wrong letters the player has guessed
            echo $_COOKIE['Incorrect'];    
            echo $_COOKIE['Save'];
        ?>
        </center>
        </form>     
    </body>

</html>
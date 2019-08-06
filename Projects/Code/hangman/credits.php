<html>
	<head>

		<!-------------------------linking style sheet start--------------------------------------------------->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="change.php" rel="stylesheet">
		<!-------------------------linking style sheet end----------------------------------------------------->

		<!-------------------------title including the players name start-------------------------------------->
		<title>Hangman with <?php echo $_COOKIE['PlayerName']; ?> </title>
		<!-------------------------title including the players name end---------------------------------------->
	</head>
	<body>
		<!-------------------------including the navigation page start----------------------------------------->
		<?php include 'navbar.php'; ?>
		<!-------------------------including the navigation page end------------------------------------------->
		<!--------game rules & credits------------------------------------------------------------------------->
		<center>
		<p>
			Hangman is a simple game, the objective is to guess a preset word within 7 guesses. 
		</p>    
		<br>
		<h2>How to play 1 player</h2><br>
		<p>    
			To play Hangman on this webpage you first need to enter your name in the homepage. Then on <i>Hangman-1 Player</i> you need to select the category you want to play, either <i>Movies</i>, <i>Countries</i> or <i>Names</i>. Next you need to press <i>Get Word</i>, now you just need to guess the correct. 
		<br>
		</p>    
		<h2>How to play 2 player</h2><br>
		<p>
			To play 2 player Hangman, you first need to enter both players names in the <i>Home Page</i>. Then the first player needs to enter a word in the text box for the second player to guess. The second player then has 7 tries to guess the word. Once plyer 2's attempt is done, the roles switch, so player 2 is entering the word and player 1 is guessing.
        <br><br><br><br>
			This webpage was developed by Jackson Doring using PHP, HTML, and CSS. 
		</p>  
		</center>    
	</body>
</html>
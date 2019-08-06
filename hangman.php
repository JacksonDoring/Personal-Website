<html>
	<head>
		<title>Jackson Doring</title>
		
		<!-------Linking the Style Sheet----------------------->
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	
	<body>
        
        <?php include "nav.php" ?>
        
        <div class="sliding_photos">
            <img class="photos" src="Images/Hangman/1.PNG">
            <img class="photos" src="Images/Hangman/2.PNG">
            <img class="photos" src="Images/Hangman/3.PNG">
            <img class="photos" src="Images/Hangman/4.PNG">
            <img class="photos" src="Images/Hangman/5.PNG">
            
            <button class="photo_button_left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="photo_button_right" onclick="plusDivs(-1)">&#10095;</button>
        </div>
        
        <script>
            var photoIndex = 1;
            showDivs(photoIndex);
            
            function plusDivs(n){
                showDivs(photoIndex += n);
            }
            
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("photos");
              if (n > x.length) {photoIndex = 1}
              if (n < 1) {photoIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[photoIndex-1].style.display = "block";  
            }
        </script>
        
        <div id="space">
            <a href="Projects/Documentation/hangman.docx" download id="resume"> Download Documentation</a>
        </div>
        
        <div id="space">
            <a href="Projects/Code/hangman.zip" download id="resume"> Download Source Code</a>
        </div>
        
        <table id="t02" align="center">
            <tr>
                <h2 align="center">Purpose of Project:</h2>
            </tr>
            <tr>
                <td>
                   The purpose of this project was to demonstrate and further expand my knowledge of PHP, HTML, CSS, and Javascript by designing and developing a web based hangmann game. 
                </td>
            </tr>
        </table>
        
        <table id="t02" align="center">
            <tr>
                <h2 align="center">What I Learnt:</h2>
            </tr>
            <tr>
                <td>
                   <ul id="experience">
                        <li>PHP, HTML, CSS, and Javascript</li>
                        <li>Web and game design </li>
                        <li>Project managment</li>
                        <li>How to effectively work in a team</li>
                        <li>How to effectively document and show development progession</li>
                    </ul>
                </td>
            </tr>
        </table>

	</body>
	
</html>
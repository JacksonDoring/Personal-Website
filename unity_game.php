<html>
	<head>
		<title>Jackson Doring</title>
		
		<!-------Linking the Style Sheet----------------------->
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	
	<body>
        
        <?php include "nav.php" ?>
        
        <div class="sliding_photos">
            <img class="photos" src="Images/Unity_Game/1.PNG">
            <img class="photos" src="Images/Unity_Game/2.PNG">
            <img class="photos" src="Images/Unity_Game/3.PNG">
            
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
            <a href="Projects/Documentation/unity_game.docx" download id="resume"> Download Documentation</a>
        </div>
        
        <table id="t02" align="center">
            <tr>
                <h2 align="center">About the Project:</h2>
            </tr>
            <tr>
                <td>
                   For a year 12 project, I was required to demonstrate my understanding of game design and development by creating a fully functioning 3D game using Unity. THe language i used to develop the game was C#, by the end of the project I had become familiar with the language ans how to design and develop a 3D game.
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
                        <li>How to code in C#</li>
                        <li>How to design and develop and 3D game</li>
                        <li>Modifying components based on user feedback</li>
                        <li>Effective time managment</li>
                    </ul>
                </td>
            </tr>
        </table>

	</body>
	
</html>
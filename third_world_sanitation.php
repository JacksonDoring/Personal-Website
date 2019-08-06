<html>
	<head>
		<title>Jackson Doring</title>
		
		<!-------Linking the Style Sheet----------------------->
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	
	<body>
        
        <?php include "nav.php" ?>
        
        <div class="sliding_photos">
            <img class="photos" src="Images/Third_World_Sanitation/4.jpg">
            <img class="photos" src="Images/Third_World_Sanitation/IMG_20170313_195853.jpg">
            <img class="photos" src="Images/Third_World_Sanitation/IMG_20170313_195928.jpg">
            <img class="photos" src="Images/Third_World_Sanitation/U1.jpg">
            <img class="photos" src="Images/Third_World_Sanitation/U3.jpg">
            
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
            <a href="Projects/Documentation/third_world_sanitation_documentation.docx" download id="resume"> Download Documentation</a>
        </div>
        
        <table id="t02" align="center">
            <tr>
                <h2 align="center">About the Project:</h2>
            </tr>
            <tr>
                <td>
                    For one of my year 12 projects, I was required to design, develop, and refine a solution that would help improve sanitation in developing countries. My solution for the problem was a bicycle powered washing machine, the solution was successful and achieved all of the set goals. 
                </td>
            </tr>
        </table>
        
        <table id="t02" align="center">
            <tr>
                <h2 align="center">What I Learnt:</h2>
            </tr>
            <tr>
                <td>
                   Some of the tings I learnt throughout this project was:
                    <ul id="experience">
                        <li>How to effectively plan a project and stick to the time line</li>
                        <li>Refining prototypes based on user feedback</li>
                        <li>How to effectively design and manufacture a solution</li>
                        <li>Design a prototype based on user needs and criteria</li>
                    </ul>
                </td>
            </tr>
        </table>

	</body>
	
</html>
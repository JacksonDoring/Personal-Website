<html>
	<head>
		<title>Jackson Doring</title>
		
		<!-------Linking the Style Sheet----------------------->
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	
	<body>
        
        <?php include "nav.php" ?>
        
            <h3 align="center">Highschool &amp University:</h3>
            <table align="center" id="t01" cellspacing="10">
                <tr>
                    <th onclick="open_project(this.id)" id="third_world_sanitation">Third World Sanitation</th>
                </tr>
                <tr>
                    <th onclick="open_project(this.id)" id="unity_game">3D Game with Unity</th>
                </tr>
                <tr>
                    <th onclick="open_project(this.id)" id="hangman">Hangman</th>
                </tr>
            </table>
        
            <h3 align="center">Self-Directed:</h3>
            <table align="center" id="t01" cellspacing="10">
                <tr>
                    <th onclick="open_project(this.id)" id="website">Webserver and Website</th>
                </tr>
                <tr>
                    <th onclick="open_project(this.id)" id="car_entertainment">Car entertainment system</th>
                </tr>
            </table>
        
        <script>
            function open_project(clicked_id)
            {
                var name = clicked_id + '.php';
                window.open(name);
            }
        </script>
        
	</body>
	
</html>
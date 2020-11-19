<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>IntelligentTrash</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="../CSS/headerfooter.css" type="text/css">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<img src="../images/logo.png" class="ibar" alt="" style="width: 80px";>
			</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
		   <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    	<ul class="navbar-nav"> 
		        	<li class="nav-item active">
		        		<a class="nav-link" href="../Views/homeView.php">Accueil <span class="sr-only">(current)</span></a>
		        	</li>
                    <li class="nav-item active">
		        		<a class="nav-link" href="../Views/team.php">Présentation <span class="sr-only">(current)</span></a>
		        	</li>
		        	<li class="nav-item active">
		        		<a class="nav-link" href="../Views/contact.php">Contact<span class="sr-only">(current)</span></a>
		        	</li>
					<li class="nav-item active">
            			<a class="nav-link" href="../Views/profilView.php">Profil<span class="sr-only">(current)</span></a>
					</li>
			      	<li class="dropdown">
					    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../images/logoLogIn.png" class="ibar" alt="" style="width: 20px";></a>
					    <div class="dropdown-menu dropColor" aria-labelledby="navbarDropdownMenuLink">
					        <a class="dropdown-item" href="../Views/index.php">Connexion</a>
					        <a class="dropdown-item" href="../Controllers/Registration.php">Inscription</a>
					    </div>
					</li>
		    	</ul>
		  	</div>
		</nav>
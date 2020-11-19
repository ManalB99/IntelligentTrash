


<?php 

	function sendErreur ($msg) {
		echo "<div class='alert alert-danger' role='alert'>$msg</div>" ;
	}
?>
<?php
	if (!empty($_POST)) {

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];


		if ($first_name == '') {
			sendErreur('Veuillez entrer un prenom');
		}

		if ($last_name == '') {
			sendErreur('Veuillez entrer un nom');
		}

		if ($email == '') {
			sendErreur('Veuillez entrer un email');
		}


		if ($city == '') {
			sendErreur('Veuillez entrer une ville');
		}

		if ($address == '') {
			sendErreur('Veuillez entrer une adresse');
		}


		if ($phone_number == '') {
			sendErreur('Veuillez entrer un telephone');
		}

		if ($mdp == '') {
			sendErreur('Veuillez entrer un mot de passe');
		}

		if ($mdp != $c_mdp) {
			sendErreur('Les mots de passe ne sont pas identiques');
		}
	}
?>

<head>
		<meta charset="utf-8">
		<title>IntelligentTrash</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="../CSS/headerfooter.css" type="text/css">
	</head>
<body>
<div class="row justify-content-md-center mx-auto">
    <div class="card col col-lg-2"  id="login" style=" margin-top: 50px;padding-top: 20px;padding-bottom: 50px; text-align:center;">
		<form action='/IntelligentTrash/Views/index.php' method='POST' class="boite" enctype="multipart/form-data">
			<h1>Inscription</h1>
			<style>
				h1 {
					color: black;
				}
			</style>


			<div class="form-group">
			    <label for="first_name"></label>
			    <input type="text" class="form-control" id="first_name" placeholder="Prénom" name='first_name'>
			</div>

			<div class="form-group">
			    <label for="last_name"></label>
			    <input type="text" class="form-control" id="last_name" placeholder="Nom" name='last_name'>
			</div>


			<div class="form-group">
			    <label for="email"></label>
			    <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name='email'>
			</div>

			<div class="form-group">
	            <label for="city"></label>
	            <input id="city" name="city" type="text" placeholder="Ville" class="form-control" />
	        </div> 

			<div class="form-group">
	            <label for="address"></label>
	            <input id="address" name="address" type="text" placeholder="Adresse" class="form-control" />
	        </div>    
	          

			<div class="form-group">
			    <label for="telephone"></label>
			    <input type="tel" class="form-control" id="telephone" placeholder="Téléphone" name='telephone'>
			</div>


			<div class="form-group">
			    <label for="password"></label>
			    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name='password'>
			</div>

			<div class="form-group">
			    <label for="c_password"></label>
			    <input type="password" class="form-control" id="c_password" placeholder="Confirmez votre mot de passe" name='c_password'>
			</div>
			<p>&nbsp; &nbsp; &nbsp;</p>

			<button>S'inscrire</button>
		</form>
	</div>
</div>
</body>
<?php include ('../Views/footer.php'); ?>

	
	
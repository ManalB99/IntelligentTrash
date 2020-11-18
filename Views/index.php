<?php 
    require('header.php');
    include('../Controllers/AuthentificationController.php');
?>

<body>
    <div class="row justify-content-md-center mx-auto">
            <div class="card col col-lg-2"  id="login" style=" margin-top: 200px;padding-top: 20px;padding-bottom: 50px; text-align:center;">
                <form method="POST" action="index.php" >

                        <div class="form-group">
                            <img src="../images/logo.png" id="logo" style="width: 150px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="login" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Entrer email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" name="password" class="form-control" id="Password" placeholder="Mot de passe" required>


                        </div>
                        <button type="submit" class="btn btn-primary">se connecter</button>
                </form>
            </div>
        </div>
    </div>

</body>
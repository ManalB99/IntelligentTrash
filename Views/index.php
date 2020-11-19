<?php 
    require('header.php');
    include('../Controllers/AuthentificationController.php');
?>

<body>
    <div class="row justify-content-md-center mx-auto">
            <div class="card col col-lg-2"  id="login" style=" margin-top: 50px;padding-top: 20px;padding-bottom: 50px; text-align:center;">
                <div class="col">
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
                            <button type="submit">Se connecter</button>
                            <style>
                                button{
                                    border:0;
                                    background : none;
                                    display: block;
                                    margin: 1px auto;
                                    text-align: center;
                                    border:1px solid #A8EDAA ;
                                    padding: 14px 20px;
                                    outline: none;
                                    color: #2F2E33;
                                    border-radius: 24px;
                                    transition:0.25s;
                                    cursor: pointer;
                                }
                            </style>
                    </form>
                </div>
                <div class="col mt-5">
                    <form action = "../Controllers/registration.php">
                        <button type = "submit">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include '../views/footer.php'; ?>
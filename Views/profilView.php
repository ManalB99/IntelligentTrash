<?php require('header.php'); 
include_once('../Controllers/index.php');?>
<!DOCTYPE html>
<link href="../Views/profilView.css" rel="stylesheet" /> 
<body>
    <div class="headerProfil">
        <h3>Mon profil</h3>
    </div>
    <div class="content">
        <div class="statusProfil">
            <div class="imgProfil">
            <?php
            if($profil->point >= 50 && $profil->point < 100)
            {
            ?>
                <img src ="../images/profil1.png"/>
                <h3>Première main ( <?= $profil->point ?> points )</h3>

                
            <?php   
            }
            ?>
            </div>
            <div class="row profilProgressBar">
                <img class="littleImg" src ="../images/profil1.png"/>
                <div class="progress">
                    
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?= $profil->point ?>%" aria-valuenow=<?= $profil->point ?> aria-valuemin="0" aria-valuemax="100"></div>
                    
                </div>
                <img class="littleImg" src ="../images/profil2.png"/>
            </div>
            <p class="align-middle">
            <?= 100 - $profil->point ?> points restant
            </p>
            <img id="qrCode" src="../images/qrcode.png" style="display:none; margin:0 auto;" />
            <button id="generateQRCODE" class="btn btn-dark generateQRCODE" type="button" onclick="displayQRCODE()" class="btn btn-dark">Générer QR Code Réduction</button>
            
        </div class="profil">    
            <div class="row justify-content-md-center mx-auto">
                <div class="card col col-lg-5"  id="login" style=" margin-top: 10px;padding-top: 20px; text-align:center;">
                    <div class="col">
                        <form method="POST" action="index.php" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="login" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Entrer email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="Password" placeholder="Mot de passe" required>
                                </div>
                                <button type="submit" class="btn btn-success">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    function displayQRCODE(){
        console.log("totototo")
        let elem = document.getElementById("qrCode");
        elem.style.display = "block";
        document.getElementById("generateQRCODE").disabled = true;
    }
</script>

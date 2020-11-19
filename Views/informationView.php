<?php require('header.php'); ?>
<!DOCTYPE html>
<link href="../CSS/informationView.css" rel="stylesheet" /> 
<body>
    <div class="description">
        <p>
            Chaque déchet mis dans une des poubelles TrashIntelligent vous permet de gagner un certain nombre de point.
        </p>
        <p> Ces points vous permmettent d'obtenir des badges.</p>
        <p>
            Chaque badge possède un pourcentage de réduction dans les infrastructures de la ville en question (Piscine, musée, zoo ect).</p>
        <p> Attention ! Lorsque vous utilisez votre réduction, l'intégralité de vos points disparaisse.</p>
        <p>   Voici les différents niveaux de badges :
        </p>
    </div>

    <div class="detailBadges">
            <div class="row rowBadges">
                <div class="row">
                    <img class="littleImg" src="../images/profil1.png"/>
                    <p>50 à 100 points</p>
                </div>
                <div class="reduction" >
                    <p>
                        3% réduction
                    </p>
                </div>
            </div>
            <hr>
            <div class="row rowBadges">
                <div class="row">
                    <img class="littleImg" src="../images/profil2.png"/>
                    <p>100 à 150 points</p>
                </div>
                <div class="reduction" >
                    <p>
                        5% réduction
                    </p>
                </div>
            </div>
            <hr>
            <div class="row rowBadges">
                <div class="row">
                    <img class="littleImg" src="../images/profil3.png"/>
                    <p>150 à 200 points</p>
                </div>
                <div class="reduction" >
                    <p>
                        7% réduction
                    </p>
                </div>
            </div>
            <hr>
            <div class="row rowBadges">
                <div class="row">
                    <img class="littleImg" src="../images/profil4.png"/>
                    <p>200 à 250 points</p>
                </div>
                <div class="reduction" >
                    <p>
                        10% réduction
                    </p>
                </div>
            </div>
            <hr>
            <div class="row rowBadges">
                <div class="row">
                    <img class="littleImg" src="../images/profil5.png"/>
                    <p>250 à 300 points</p>
                </div>
                <div class="reduction" >
                    <p>
                        12% réduction
                    </p>
                </div>
            </div>
    </div>
    
</body>

<?php include '../views/footer.php'; ?>

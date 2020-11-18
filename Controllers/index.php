<?php
require('../Models/profil.php');
//if (isset($_GET['id']) && $_GET['id'] > 0) {
    $profil = getProfil(3);
    require('../Views/profilView.php');
//}
//else {
  //  require('../Views/indexView.php');
//}



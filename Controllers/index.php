<?php
require('../Models/profil.php');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $profil = getProfil(random_int(1,4));
    require('../Views/profilView.php');
}
else {
  require('../Views/index.php');
}



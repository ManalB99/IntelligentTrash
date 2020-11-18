<?php
//require('model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getProfil($_GET['id']);
    require('../Views/profilView.php');
}
else {
    require('../Views/indexView.php');
}



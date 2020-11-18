<?php



function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
function getProfil($profilId)
{
    class Profil
    {
        public $id;
        public $point;
    }
    $profilGuillaume = new Profil();
    $profilGuillaume->id = 1;
    $profilGuillaume->point = 25;

    $profilLucas = new Profil();
    $profilLucas->id = 2;
    $profilLucas->point = 75;

    $profilManal = new Profil();
    $profilManal->id = 3;
    $profilManal->point = 55;

    $profilCharlotte = new Profil();
    $profilCharlotte->id = 4;
    $profilCharlotte->point = 90;

    $profils = array($profilGuillaume, $profilLucas,$profilManal,$profilCharlotte);
    
    foreach($profils as &$profil){
        if($profil->id == $profilId){
            console_log($profil);
            return $profil;
        }
    }
}


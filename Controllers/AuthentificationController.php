<?php
    include('../Views/header.php');

    if(isset($_POST['login']) and isset($_POST['password'])){
        if(isset($_POST['login'])) {
                    $login = htmlspecialchars($_POST['login']);
            }
        if(isset($_POST['password'])) {
                    $password = htmlspecialchars($_POST['password']);
            }

        if($login  == "Admin@gmail.com" && $password == "admin") {
                header('Location: /header.php'); 
            }
    }

?>
<?php include ('../Views/footer.php'); ?>
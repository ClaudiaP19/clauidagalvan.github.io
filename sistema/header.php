<?php 
    session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,
        initial-scale=1'>
        <link rel='stylesheet' href='css/bootstrap.css'>
        <link rel="stylesheet" href="Fondsmio/css/all.min.css">
        <link rel='stylesheet' href='miestiobot.css'>
        <script src="js/jquery-3.4.1.slim.min.js"></script>    
        <script src="js/popper.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>
        <script src='jquery.mobile-1.4.5.min.js'></script>
_INIT;
    require_once 'functions.php';
    $userstr = 'Bienvenido invitado';
    if (isset($_SESSION['user'])) {
        $user    = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr  = "Usuario: $user";
    }
    else $loggedin = FALSE;

echo <<<_MAIN
        <title> Mesadedulces: $userstr</title>
    </head> 
    <body >
    
             <div class='container-fluid'>
        
                    <div class='row'>
                    <div class='d-none col-sm-2 col-md-3 col-lg-3 col-xl-3  d-md-block d-lg-block d-xl-block center borde1'>
                    <center><img class="img" src='images/mesa.jpg' height="150px"></center>
                        </div>
                        <div class='col-12 col-sm-12 col-md- col-lg-6 col-xl-6 borde1'>
                       <center> <h1 class="display-4" id="estudios">Mesa de dulces</h1></center>
                        </div>
                        <div class='d-none col-sm-2 col-md-3 col-lg-3 col-xl-3  d-md-block d-lg-block d-xl-block  borde1'>
                        <center><img class="img" src='images/mesa2.jpg' height="150px"> </center>
                        </div>
                        
                
                    <div class='col-8 col-sm-8 col-md-8 col-lg-8 col-xl-3 borde2'> 
                    <div ><center>$userstr</center> </div></div>

                    
           
_MAIN;
    if ($loggedin) {
echo <<<_LOGGEDIN
      
                    <div class='col-4 col-sm-4 col-md-4 col-lg-4 col-xl-9 d-xl-none borde2'>
                    <div class="btn-group">
                        <div type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><span class="fas fa-layer-group"></span></div>
                        <div class="dropdown-menu">
                            <a class="btn btn-secondary dropdown-item" href='members.php?view=$user'><span class='fas fa-home'></span> Home</a>
                            <a class="btn btn-secondary dropdown-item"  href='friends.php'><span class='fas fa-user-friends'></span> Friends</a>
                            <a class="btn btn-secondary dropdown-item" href='messages.php'><span class='fas fa-comments'></span> Messages</a>
                            <a class="btn btn-secondary dropdown-item" href='profile.php'><span class='fas fa-user-edit'></span> Edit Profile</a>
                            <a class="btn btn-secondary dropdown-item" href='logout.php'><span  class='fas fa-sign-out-alt'></span> Log out</a>
                        </div>
                    </div></div>
                    <div class='d-none d-sm-none d-md-none d-lg-none col-xl-9 d-xl-block borde2'>
                        <div class='center  '><center>
                        <a type='button' href='members.php?view=$user' class='btn btn-outline-danger'><span class='fas fa-home'></span> Home</a>
                        <a type='button' href='members.php' class='btn btn-outline-danger'><span class='fas fa-address-book'></span> Members</a>
                        <a type='button' href='friends.php' class='btn btn-outline-danger'><span class='fas fa-user-friends'></span> Friends</a>
                        <a type='button' href='messages.php' class='btn btn-outline-danger'><span class='fas fa-comments'></span> Messages</a>
                        <a type='button' href='profile.php' class='btn btn-outline-danger'><span class='fas fa-user-edit'></span> Edit Profile</a>
                        <a type='button' href='logout.php' class='btn btn-outline-danger'><span  class='fas fa-sign-out-alt'></span> Log out</a>
                    </center></div></div>
                    </div>
        
_LOGGEDIN;
    }
    else {
echo <<<_GUEST
        <div class='col-4 col-sm-4 col-md-4 col-lg-4 col-xl-9 d-xl-none borde2'>
        <div class="btn-group">
            <div type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown"><span class="fas fa-layer-group"></span></div>
            <div class="dropdown-menu">
                <a class="btn btn-outline-danger dropdown-item" href='index.php'><span class='fas fa-home'></span> Home</a>
                <a class="btn btn-outline-danger dropdown-item"  href='signup.php'><span  class='fas fa-sign-in-alt'> Sign Up</a>
                <a class="btn btn-outline-danger dropdown-item" href='login.php'><span class='fas fa-caret-square-right'> Log In</a>
        
        </div>
        </div></div>
        <div class='d-none d-sm-none d-md-none d-lg-none col-xl-9 d-xl-block borde2'>
            <div class='center  '><center>
            <a type='button'href='index.php' class='btn btn-outline-danger'><span class='fas fa-home'></span> Home</a>
            <a type='button' href='signup.php' class='btn btn-outline-danger'><span  class='fas fa-sign-in-alt'> Sign Up</a>
            <a type='button'  href='login.php' class='btn btn-outline-danger'><span class='fas fa-caret-square-right'> Log In</a>
            </center></div></div>
            </div><div class'body'>
        <p > <center>(Debe iniciar sesión para usar esta aplicación) </center></p></div>
_GUEST;
    }
    ?>
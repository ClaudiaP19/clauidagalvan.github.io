<?php
    require_once 'header.php';
    $error = $user = $pass = '';

    if (isset($_POST['user']))
    {
        $user = sanitizeString ($_POST['user']);
        $pass = sanitizeString($_POST['pass']);

        if($user == "" || $pass == "")
            $error = "<span class='fas fa-exclamation'> No todos los campos fueron ingresados</span> ";
        else
        {
            $result = queryMySQL("SELECT user, pass From members
            WHERE user = '$user' AND pass = '$pass'");

            if ($result->num_rows == 0)
            {
                $error = "<span class='fas fa-exclamation'> Intento de inicio de sesión no válido</span>";
            }
            else
            {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                die("<div class='center'>you are now logged in. Please
                    <a data-transition-'slide' href='members.php?view=$
                    to continue.</div></div><body/></html>");
            }
        }
    }

    echo <<<_END
            <form method= 'post' action='login.php'>
                <div class='container-fluid'>
                
                    <div class='row'>
                <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 '>
                <center><span class='error'>$error</span></center>
                </div></div>
                <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 '>
                <center>Por favor ingrese sus datos para iniciar sesión</center>
                </div> </div>
                <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 '>
                <center> <label>Username</label>
                    <input type='text' maxlength='16' name='user' value='$user'></center>
                </div></div>
                <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 '>
                <center> <label>Password</label>
                    <input type='password' maxlength='16' name='pass' value='pass'</center>
                </div></div>
                <div class='col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 '>
              
                <center>
                    <input data-transition='slide' class='btn btn-outline-success' type='submit' value="Login"></center>
                    
                </div></div>
            </form>
        </div>
    </body>
</html>
_END;
?>


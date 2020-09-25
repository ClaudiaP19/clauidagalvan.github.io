<?php 
    session_start();
    require_once 'header.php';

    echo "<div><center><h1 class='display-4' id='estudios'>Bienvenido</h1></center>";

    if($loggedin) echo "<div><center>estás conectado</center></div>";
    else          echo "<div><center>Por favor registrate o inicia sesión</center></div>";

    echo <<<_END
        </div><br>
        </div>
        <div data-role="footer"><center>
            <h4>Web App from <i><a href='http:/localhost/socialred_v5'
            target='_blank'>Web Development </a><small> Modificado por Perez Galvan Claudia</small></i><h4>
            </center></div>
    </body>
</html>
_END;
?>

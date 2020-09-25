<?php
$operando1=$_GET['operando1'];
$operador=$_GET['operador'];

if($operador=="Kilometros"){
    $solucion=$operando1/100;
} else if($operador=="Centimetros"){
    $solucion=$operando1*100;
}else if($operador=="Milimetros"){
    $solucion=$operando1*1000;
}

echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Conversion de Pesos</title>
</head>
<body>";
if($operador=="Kilometros"){
echo"<h1>Son  ".$solucion." Kilometros</h1>";

}else if($operador=="Centimetros"){
    echo"<h1>Son ".$solucion." Centimetros</h1>";

}else if($operador=="Milimetros"){
    echo"<h1>Son ".$solucion." Milimetros</h1>";
}
"</body>";
?>
<?php

$usuario = 'Santiago';
$edad = 22;

if ( $edad >= 18 ) {
    echo $usuario . ' eres bienvenido a este sitio';
}
else {
    echo 'El acceso a este sitio es restringido para menores de edad';
}

$num = 5;
if ($num % 2 == 0){
    echo '<br> El número ' . $num . ' es par';
}
else {
    echo '<br>El número ' . $num . ' es impar';
}

?>
<?php
$servidor= 'sql311.infinityfree.com';
$usuarioDB='if0_38704733';
$passDB='t0cca03EO4nMFUp';
$nameDB='if0_38704733_formularioico';

$conexion = new mysqli($servidor,$usuarioDB,$passDB,$nameDB);

if($conexion->connect_error){
    echo "<h1>Sin conexion a la DB</h1>";

}else{
    echo "<h1> Conexion realizada</h1>";
}


?>
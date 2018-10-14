<?php
//conexion a la db
try{
    $conexion = new PDO('mysql:host=localhost;dbname=matematicas', 'root', '');
}catch(PDOException $e){
    echo   "Error:" . $e ->getMessage();
}

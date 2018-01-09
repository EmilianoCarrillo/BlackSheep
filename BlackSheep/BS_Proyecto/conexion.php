<?php
$host_name = 'db684748189.db.1and1.com';
$database = 'db684748189';
$user_name = 'dbo684748189';
$password = 'ovejanegra123';

$connect = mysqli_connect($host_name, $user_name, $password, $database);
if (mysql_errno()) {
    die('<p>Error al conectar con servidor MySQL: '.mysql_error().'</p>');
}
?>
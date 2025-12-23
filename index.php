<?php


require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap/database.php';

use Formacom\Agenda\Models\Usuario;

$usuario=new Usuario();
$usuario->nombre="Juan Perez";
$usuario->email="prueba@gmail.com";
$usuario->password=password_hash("123456",PASSWORD_BCRYPT);
$usuario->save();
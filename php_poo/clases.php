<?php
/**
 * Si no hay argumentos para pasar al constructor de la clase, se pueden omitir los paréntesis después del nombre de la clase. 
 */
include 'Person.php';
include 'User.php';
include 'Admin.php';

$user=new User(); // objeto $user
$user->type=new Admin;  // asigna a la variable de tipo Objeto User un objeto tipo Admin
echo $user->type->doGreet();    // 'Hola Administrador' accede al metodo doGreet() de la propiedad type del objeto user

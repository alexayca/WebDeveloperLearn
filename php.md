# php

## Sintaxis basica

### Comillas
```''```     Comillas simples
```""```     Comillas dobles
```\```     Caracter de escape backslash
```\'```    Comilla simple en string con caracter de escape 

```php
echo 'Un texto de una linea
varias lineas
comilla simple \' backslash\\ continuando con mas texto
$variable que se muestra tal cual <br>';

// observe la concatenacion de variables
$name='Lex';
echo "Mi nombre es $name <br>";
echo 'Mi nombre es' . $name;

// con arrays
$courses=[
    'backend'=>[
        'PHP',
        'Lavarel'
    ]
];
echo "{$courses['backend'][0]}"; // cuando una estructura es compleja necesitamos usar llaves

// Se pueden mostrar datos mas complejos 
class User{
    public $name='Lex';
}

$user=new User;     // objeto de User
// para ver el objeto;  Operador de Objetos, para acceder a elementos de objetos, excepto las constantes y estaticos
echo "$user->name quiere 馃挆"

// variables variables, se accede a los datos
$teacher='karen';
$karen='profesor de php';
echo "$teacher es ${$teacher}";

// en una funcion
function getTeacher()
{
    return 'teacher';
}
$teacher='Alex';
echo "${getTeacher()} ense帽a";
echo "{${getTeacher()}} ense帽a";
```

### Variables
```php
$mivariable='variable';
$variable='valor';
echo $mivariable;   // variable
echo $$mivariable;    // valor

# variable variable
$var="nombre";
$$var="Lala";   //$nombre="Lala"
echo $nombre;   // Lala

```
### 脕mbito de las variables (global y local)
[Scope](https://www.php.net/manual/es/language.variables.scope.php)
Es el contexto en donde una variable es definida. Usualmente tiene un ambito simple, es decir esta disponible en todo el archivo e incluso en otros archivos donde se haga require __谩mbito global__. 

Al interior de las funciones definidas por el usuario se introduce un 谩mbito local a la funci贸n. Cualquier variable usada dentro de una funci贸n est谩, por omisi贸n, limitada al __谩mbito local__ de la funci贸n. 

Las variables globales deben ser declaradas globales dentro de la funci贸n si van a ser utilizadas dentro de dicha funci贸n, con la palabra reservada __global__

Una variable est谩tica existe s贸lo en el 谩mbito local de la funci贸n, pero no pierde su valor cuando la ejecuci贸n del programa abandona este 谩mbito, con la palabra reservada __static__. 

La variable ```$GLOBALS``` es una variable predefinida de un arreglo que tiene todas las variables globales que existen. ```print_r($GLOBALS);```. Tambien se puede usar para definir variables globales dentro de una funcion.

[Superglobals](https://www.php.net/manual/es/language.variables.superglobals.php)

### Asignacion
```
=
=>  // functions arrow, permite escribir una sintaxis m谩s concisa para las funciones anonimas
```


### Comparacion
 comprobaci贸n de identidad ```===``` (valor y tipo)
 comprobaci贸n de igualdad d茅bil ```==``` (valor)
 ```<=>``` nave espacial
 ```??``` fusion de null (El primer operando de izquierda a derecha que exista y no sea null. null si no hay valores definidos y no son null.)


### Aritmetica
```+```
```-```
```*```
```/```
```%```
```**```

### Operadores

[operador splat en PHP (token ...)](https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list)
[operadores de comparacion](https://www.php.net/manual/es/language.operators.comparison.php)
Denota que la funci贸n acepta un n煤mero variable de argumentos.
Los argumentos ser谩n pasados a la variable dada como un array.
```
...
data(...$_POST)
```
```->``` operador de objetos
```:```
```::``` operador de control de ambito, accede a las propiedades y metodos de un objeto
```@``` operador de control de errores, suprime los mensajes de error, y no son mostrados


### Estructuras de control
el constructor foreach permite iterar arrays
```php
$array = [1,2,3,4,5];
foreach ($array as $valor)  
{
    echo "{$indice} => {$valor}";
}
foreach ($array as $indice => $valor) 
{
    echo "{$indice} => {$valor}";
}
```


## Mostrar errores
```php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
```


## Extraccion de datos
```php
$data='Estudio PHP';
echo $data[0];  // extraer un caracter
echo ($data[0]);    // ya no hay soporte para la otra sintaxis {}

$post='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam ducimus aut vel quasi magnam non aperiam. Maxime reiciendis fugit quisquam dolorem iure deserunt a voluptatem, ab aspernatur illum minima esse?';
$extract=substr($post,0,20);
echo "$extract... [ver mas]";

// El primer parametro define que esta separando los elementos
$dataa='javascript, php, lavarel';  // campo tags
$tags=explode(', ',$dataa); // crea un array de un string
var_dump($tags); // array

$courses=['javascript', 'php', 'lavarel'];
echo implode(', ',$courses); // crea un string de un arrray

// eliminar espacios iniciales y finales
$course="   Curso de PHP   ";
$course=trim($course);  // ltrim() y rtrim(), quita solo los espacios del lado indicado
echo "<pre>";
echo "Quiero aprender $course, y otro curso";
```


## Formato de datos
```php
// Alterar
$text="PHP eS UN LENGUAJE";
echo strtolower($text); // minusculas
echo strtoupper($text); //mayusculas
echo lcfirst($text);    // primera minuscula
echo ucfirst($text);    // primera mayuscula

// Remplazar
$slug=str_replace(' ','-',$text);   // texto a remplazar, texto a colocar
echo strtolower($slug);

// Modificar
$code=39;
echo str_pad($code,8,'#');
echo str_pad($code,8,'#',STR_PAD_BOTH);

// quitar codigo html
$text="<h1>PHP eS UN LENGUAJE<h1>";
echo strip_tags($text);

// elementos monobit y multibit
$multibit="PHP es un lenguaje, a帽o 2022, programaci贸n";
echo strtoupper($multibit);
echo mb_strtoupper($multibit);
```


## expresiones regulares
```php
/*
    /:  CONTENEDOR
    ^: INICIO
    $: FINAL
    -: RANGO
    []: PATR脫N 
    {}: CONDICI脫N
*/
$password = '12345';
$password1 = '123456a';
$password2 = '123456';
echo preg_match('/^[0-9]{6,9}$/', $password);
var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
```





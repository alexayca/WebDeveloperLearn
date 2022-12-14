<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparacion</title>
</head>
<!-- el css se puede guardar tambien en el archivo php, con sus respectivas etiquetas <style> -->
<style>
    h1{
        text-align:center;
    }
    table{
        background-color:#FFC;
        padding: 5px;
        border:#666 5px solid;
    }
    .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
    }
    .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
    }
</style>

<body>
    <h1>Usando operadores de comparacion</h1>
    <!--<form action="validacion.php"-->
    <form action="" method="post" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td><label for="nombre_usuario"></label>
                <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><label for="edad_usuario"></label>
                <input type="text" name="edad_usuario" id="edad_usuario"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
            </tr>
        </table>

    </form>

    <!--validacion.php-->
    <?php
        // comprueba se se ha pulsado el boton enviando
        if(isset($_POST["enviando"])){
            $usuario=$_POST["nombre_usuario"];
            $edad=$_POST["edad_usuario"];

            if($usuario=="Alex" && $edad>=18){
                echo "<p class=\"validado\">Acceso permitido</p>";
            }else{
                echo "<p class='no_validado'>No puedes entrar</p>";
            }

        }
    ?>
    
</body>
</html>
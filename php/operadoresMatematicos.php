<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>&nbsp;</p>
<form name="form1" action="calculadora.php" method="post">
<p>
    <label for="num1">numero 1</label>
    <input type="text" name="num1" id="num1">
    <label for="num2">numero 2</label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
        <option value="Suma">Sumar</option>
        <option value="Resta">Restar</option>
        <option value="Multiplicacion">Multiplicar</option>
        <option value="Division">Dividir</option>
        <option value="Modulo">Residuo</option>
    </select>

</p>
<p>
    <input type="submit" value="Enviar" name="button" id="button" onClick="prueba">
</p>
</form>
<p>&nbsp;</p>    

</body>
</html>
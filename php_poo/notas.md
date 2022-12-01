
## Inclusion de archivos

```include``` permite incluir un archivo dentro de otro. Genera un warning que permite continuar en caso de no encontrarlo.
```require``` incluye un archivo dentro de otro excepto que en caso de fallo producirá un error fatal, no permitirá continuar con el proceso.
```require_once``` idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye.
```include_once``` Tiene un comportamiento similar al de la sentencia include, siendo la única diferencia de que si el código del fichero ya ha sido incluido, no se volverá a incluir, e include_once devolverá TRUE. Como su nombre indica, el fichero será incluido solamente una vez.
Considere que debe tomarse en cuenta el orden de los archivos, llame primero a los archivos que no tienen dependencia de otros.
```use``` se usa para especificar que namespace usar. [link](https://stackoverflow.com/questions/10965454/how-does-the-keyword-use-work-in-php-and-can-i-import-classes-with-it#25138965)

## abstraccion y herencia
```extends``` hereda de una clase padre o una clase abstracta
```implements``` implementa interface. Una interface se desarrolla e implementa en una clase.
```$this``` hace referencia a diferentes elementos de la clase
 ```final``` se puede usar para evitar el polimorfismo o la herencia, evitando que se sobreescriban metodos o clases. Una clase abstracta no se puede instanciar, una clase final si se puede.

## alcance encapsulamiento (principio de ocultacion)
```public``` acceso desde cualquier parte del codigo
```protected``` solo pueden acceder a los elementos de clase, las clases que hereden de esta clase
```private``` solo puede acceder la misma clase



## operadores de objetos
```->``` object operator: se utiliza cuando se desea llamar a un método en una instancia o acceder a una propiedad de instancia.
```::```  [class operator](https://www.php.net/manual/es/language.oop5.paamayim-nekudotayim.php): se utiliza cuando se desea llamar a un método estático, acceder a una variable estática o llamar a la versión de una clase padre de un método dentro de una clase secundaria.

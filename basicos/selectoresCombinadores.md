# Selectores combinadores
Ayudan a ser más especificos.
 - __Descendientes__        div p
    padre _ hijo
 - __Hijo directo__         div > p
    padre >.hijoDirecto
 - __Elemento adyacente__   div + p
 - __General de hermanos__  div ~ p

Se pueden combinar los selectores, y se pueden leer mas facil de derecha a izquierda
```css
div .selectorA ~ .selectorB > p{}
```
# Tipos de selectores: pseudoclases y pseudoelementos

## [pseudoclases](https://developer.mozilla.org/es/docs/Web/CSS/Pseudo-classes#indice_de_las_pseudo-clases_est%C3%A1ndar)

Permite llegar a las acciones que hace el usuario, para estilizar algun estado en especial de ese elemento
 - :active
 - :focus
 - :hover
 - :nth-child(n)


 ## [pseudoelementos](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements)
 Permiten acceder a elementos de html que no son accesibles con los anteriores selectores.
   - ::after
   - ::before
   - ::first-letter
   - ::placeholder

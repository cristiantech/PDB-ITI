# Programación Base de Datos
Asignatura para la interactividad entre HTML, PHP, MYSQL

### ¿Que son las condicionales?
Muchas veces nos vemos en la necesidad de tomar una decisión u otra dependiendo de lo que el usuario elija. Las condicionales nos ayudan a elegir cuál bloque de código se debe ejecutar.

#### if-else
La sentencia if nos ayuda a declarar una condición. Si la condición se cumple entonces se ejecuta el código del if; si no se cumple, se ejecuta el código del else.

```php
if(condicion){
    //si la condición se cumple 
    ...codigo
}else{
    //si la condición no se cumple 
    ...codigo
}
```
Un if siempre requerirá de un valor booleano. Por eso es que podemos poner true o false directamente.
```php
if(True){
    //si la condición se cumple 
    ...codigo
}else{
    //si la condición no se cumple 
    ...codigo
}
```
**Vamos al codigo ....**
### ¿Qué es switch?
Switch es una estructura de control que nos ayuda a elegir qué bloque de código ejecutar según el valor de alguna variable. Es una forma más fácil de tomar decisiones.

| Úsalo cuando… |No lo uses cuando...|
|-------|---------|
|Necesites decidir entreun caso u otro.|Necesites hacer comparaciones complejas. |
|Quieras una forma fácil de plantear diversas situaciones.|Quieras verificar un rango de números.|
|Usarlo no signifique sacrificar la legibilidad de tu código.|Necesites poner grandes bloques de código y/o tu código se vuelva ilegible.|
```php
switch (/* variable a evaluar */) {
    case 1:
        # code...
        break;
    case 2:
        # code...
        break;
    case 3:
        # code...
        break;
    default:
        # code...
        break;
}
```
**Vamos al codigo ....**
### ¿Que es un bucle?
Un bucle es una estructura de control que nos ayuda a repetir un bloque de código las veces que lo necesitemos.
- Bucle
- Contador
- Iteración

#### ¿Cómo funciona el bucle while?
+ El bucle while, al igual que el if, recibe una condición booleana. Mientras que esa condición sea true, el ciclo se va a repetir.
+ Dentro del while nosotros podemos cambiar el valor de nuestra variable para detener el ciclo.
+ Por eso se dice que este es un ciclo indefinido.
 ```php
while ($a <= 10) {
    # code...
}
```
**Vamos al codigo ....**
### ¿Qué hace el ciclo Do… While?
+ Este ciclo es exactamente igual que el ciclo while, también recibe una condición y puedes cambiar el valor de tu variable desde dentro del ciclo.
+ La diferencia es que este ciclo se ejecuta al menos una vez, sin importar si la condición es verdadera o falsa.
+ También es un ciclo indefinido.
 ```php
do {
    # code...
} while ($a <= 10);
```
**Vamos al codigo ....**
### El ciclo for
Este ciclo nos permite definir una serie de condiciones, desde dónde queremos comenzar hasta dónde queremos terminar.
Nosotros le decimos explícitamente cuantas iteraciones hará, es por eso que decimos que este es un ciclo definido.
 ```php
for ($i=0; $i < ; $i++) { 
    # code...
}
```
### El ciclo foreach
La ventaja de este ciclo es que nos permite recorrer cualquier elemento que sea iterable sin tener que contar los elementos del mismo. Él por sí solo detecta cuántos elementos tiene dicho elemento.
 ```php
 foreach ($variable as $value) {
    # code...
}
foreach ($variable as $key => $value) {
    # code...
}
```
**Vamos al codigo ....**
### Break y continue
También somos capaces de detener un ciclo o de avanzar a la siguiente iteración. Con estas palabras reservadas podemos tener más control sobre la ejecución de un ciclo.
**Ejercicios**
**La sucesión de Fibonacci**
La sucesión de Fibonacci es una sucesión definida por recurrencia. Esto significa que para calcular el siguiente número de la sucesión se necesitan el número actual y el número anterior.
Es decir…
0 - 1 - 1 - 2 - 3 - 5 - 8 - 13 …
### ¿Qué es una función?
Podemos verlas como un chef mágico al cual tú le das los
ingredientes y te devuelve un pastel ya hecho.
Nos ayuda a tener código más ordenado,
reutilizable y fácil de entender.
Separar tu código en funciones para después
reutilizarlo **es buena práctica.** Copiar y pegar
código **no lo es.**

### Cómo interactúa PHP con HTML
PHP fue diseñado con el propósito de preprocesar HTML, es decir, de hacer operaciones como si fuera un lenguaje de programación.
Esto le permite imprimir páginas HTML dinámicas. Sí, PHP puede imprimir directamente HTML y podemos usar todas sus ventajas para generar documentos dinámicos.


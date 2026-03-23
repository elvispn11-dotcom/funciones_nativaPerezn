<?php
// Buscar funciones nativas de php
// Meter todas las funciones de php
// Buscar funciones
// LAS mas importantes
// 50

// manipulacion de arreglos son el corazon de php
count(); // contar elementos de un arreglo
is_array(); // verificar si es un arreglo
array_merge(); // fusionar arreglos
array_keys(); // obtener las claves de un arreglo
array_values(); // obtener los valores de un arreglo
array_push(); // agregar elementos al final de un arreglo
array_pop(); // eliminar el último elemento de un arreglo\
array_shift(); // eliminar el primer elemento de un arreglo
in_array(); // verificar si un valor existe en un arreglo
array_key_exists(); // verificar si una clave existe en un arreglo
array_map(); // aplicar una función a cada elemento de un arreglo
array_filter(); // filtrar elementos de un arreglo usando una función de devolución de llamada
sort(); // ordenar un arreglo
rsort(); // ordenar un arreglo en orden inverso

//manipulacion de cadenas
strlen(); // obtener la longitud de una cadena
str_replace(); // reemplazar texto dentro de una cadena
strpos(); // encontrar la posición de la primera aparición de una subcadena
substr(); // obtener una parte de una cadena
strtolower(); // convertir una cadena a minúsculas
trim(); // eliminar espacios en blanco al inicio y al final de una cadena
explode(); // dividir una cadena en un arreglo
sprintf(); // dar formato a una cadena
htmlspecialchars(); // convertir caracteres especiales a entidades HTML
ucfirst(); // convertir el primer carácter de una cadena a mayúscula

//manejo de variables y tipos
// para validar datos antes de procesarlos
isset(); // verificar si una variable está definida
empty(); // verificar si una variable está vacía
gettype(); // obtener el tipo de una variable
settype(); // establecer el tipo de una variable
var_dump(); // mostrar información sobre una variable
print_r(); // imprimir información legible sobre una variable
serialize(); // convertir una variable a una cadena para almacenamiento o transmisión
unserialize(); // convertir una cadena serializada de nuevo a una variables

//Funciones matematicas\
rand(); // generar un número aleatorio
round(); // redondear un número
ceil(); // redondear un número hacia arriba
floor(); // redondear un número hacia abajo
abs(); // obtener el valor absoluto de un número
date(); // obtener la fecha y hora actual
time(); // obtener la marca de tiempo actual
strtotime(); // convertir una cadena de fecha y hora a una marca de tiempo


//Sistemas de archivos y JSON
file_exists(); // verificar si un archivo o directorio existe
file_get_contents(); // leer el contenido de un archivo
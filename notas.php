<?php
$notas = [ 85,62,91,73,88];

//contar
echo count($notas);// 5

//ordenar
sort($notas); //[62,73,85,88,91]

// Agregar y quitar
array_push($notas, 95);
$ultimo = array_pop($notas);

// buscar
$idx = array_search(91, $notas);
if(in_array(91, $notas)){
    echo "nota 91 encontrada!";

}
?>

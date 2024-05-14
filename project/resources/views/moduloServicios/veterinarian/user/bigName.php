<?php
$nombre = $_GET['nombre']?? '';
// Divide el nombre del veterinario en dos partes basándose en el espacio como delimitador.
// El segundo argumento '2' indica que queremos dividir el nombre en un máximo de dos partes.
$parts = explode(' ', $$nombre->name, 2);

// Asigna la primera parte del nombre (la primera palabra) a la variable $firstPart.
$firstPart = $parts[0];

// Verifica si existe una segunda parte en el array $parts (es decir, si el nombre fue dividido en dos partes).
// Si existe, asigna la segunda parte del nombre a la variable $secondPart.
// Si no existe (por ejemplo, si el nombre no tenía espacios), asigna una cadena vacía a $secondPart.
$secondPart = isset($parts[1]) ? $parts[1] : '';

// Obtiene la primera letra de $secondPart (la segunda palabra del nombre, si existe).
// Luego, convierte esa letra a mayúsculas usando la función strtoupper().
$firstLetter = strtoupper(substr($secondPart, 0, 1));

// Concatena $firstPart (la primera palabra del nombre) con un espacio y la primera letra de la segunda palabra (convertida a mayúsculas).
// Esto forma la cadena $result, que representa el nombre modificado según las reglas especificadas.
$result = $firstPart . ' ' . $firstLetter;
?>
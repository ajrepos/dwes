<?php
$a = 10;
$b = 20;

// Comparación entre $a y $b
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a < $b) {
    echo "a es menor que b";
} else {
    echo "a es igual que b";
}
echo "<br>";

// Operador ternario
echo ($a > $b) ? "a es mayor que b" : "a es menor o igual que b";
echo "<br>";

// Operador ternario con múltiples condiciones
echo ($a > $b) ? "a es mayor que b" : (($a < $b) ? "a es menor que b" : "a es igual que b");
echo "<br>";

// Uso de 'match' para el tamaño del pie
$pie = 42;

$resultadoPie = match ($pie) {
    42 => "Tienes una medida estándar",
    43 => "Tienes un pie mediano",
    44 => "Tienes un pie grande",
    45 => "Tienes un pie muy grande",
    default => "Tienes una medida desconocida",
};

echo $resultadoPie;
echo "<br>";

// Uso de 'match' para la frutería
$fruteria = "Manzana";

$resultadoFruta = match ($fruteria) {
    "Manzana" => "1€",
    "Plátano" => "2€",
    "Naranja" => "3€",
    default => "0€",
};

echo $resultadoFruta;
echo "<br>";

// Ejemplo de bucle while
$contador = 0;
while ($contador < 10) {
    echo $contador;
    $contador++;
}
echo "<br>";

// Ejemplo de bucle do-while
$contador = 0;
do {
    echo $contador;
    $contador += 2;
} while ($contador < 10);
echo "<br>";

// Ejemplo de bucle for
for ($i = 0; $i < 10; $i++) {  
    echo $i;
}
echo "<br>";
?>
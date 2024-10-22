<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación PHP</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="icon" href="imagenes/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Documentación de PHP</h1>
        <img src="imagenes/logo.png" alt="Logo de PHP">
        <p>Introducción a PHP, sus conceptos y ejemplos.</p>
    </header>
    
    <main>
        <!-- Sección 1: Introducción a php -->
        <section>
            <h2>1. Comenzando con PHP</h2>
            <p>Para usar PHP, debes guardar tu código en un archivo con la extensión <code>.php</code>. El código PHP se encierra entre etiquetas especiales.</p>
        </section>

<!-- Sección 2: Comentarios -->
<section>
    <h2>2. Comentarios</h2>
    <p>PHP permite agregar comentarios para explicar el código. Son esenciales para mejorar la legibilidad y mantener el código entendible para otros desarrolladores. Hay tres tipos principales de comentarios:</p>
    <ul>
        <li>Comentarios de una línea con <code>//</code> o <code>#</code>.</li>
        <li>Comentarios de varias líneas con <code>/* ... */</code>.</li>
    </ul>
    <h3>Ejemplos de comentarios:</h3>
    <pre><code>
// Este es un comentario de una línea
# Este también es un comentario de una línea

/*
Este es un comentario
que ocupa varias líneas
*/
    </code></pre>
    
    <h3>Uso recomendado de los comentarios:</h3>
    <ul>
        <li>Comentar el propósito de funciones o secciones clave del código.</li>
        <li>Explicar la lógica compleja para facilitar el mantenimiento futuro.</li>
        <li>Evitar comentarios redundantes que describan lo obvio.</li>
    </ul>
    
    <h3>Buenas prácticas:</h3>
    <ul>
        <li>Mantener los comentarios actualizados para reflejar cambios en el código.</li>
        <li>Usar comentarios para documentar errores conocidos o áreas de mejora futura.</li>
    </ul>
</section>

    <!-- Sección 3: Tipos de Datos -->
<section>
    <h2>3. Tipos de Datos en PHP</h2>
    <p>PHP admite varios tipos de datos, que permiten manejar diferentes tipos de información en los programas. A continuación, se detallan los principales tipos de datos en PHP:</p>
    
    <ul>
        <li><strong>Enteros (int):</strong> Números enteros, positivos o negativos, sin parte decimal.</li>
        <li><strong>Flotantes (float):</strong> Números que incluyen una parte decimal.</li>
        <li><strong>Cadenas (string):</strong> Texto o secuencia de caracteres.</li>
        <li><strong>Booleanos (bool):</strong> Representan valores de verdadero (<code>true</code>) o falso (<code>false</code>).</li>
        <li><strong>Arrays:</strong> Conjuntos de valores que se pueden indexar. Pueden ser arrays numéricos o asociativos.</li>
        <li><strong>Objetos (object):</strong> Instancias de clases que permiten estructurar datos y comportamientos relacionados.</li>
        <li><strong>Nulos (null):</strong> Representa una variable sin valor asignado.</li>
    </ul>
    
    <h3>Ejemplos de uso de tipos de datos:</h3>
    <pre><code>$numero = 42; // Entero
$precio = 19.99; // Flotante
$saludo = "¡Hola, mundo!"; // Cadena
$esVerdad = true; // Booleano
$colores = array("rojo", "verde", "azul"); // Array simple
$persona = (object) ['nombre' => 'Antonio', 'edad' => 30]; // Objeto
$variableNula = null; // Nulo</code></pre>

    <h3>Arrays en PHP:</h3>
    <p>Los arrays pueden ser:</p>
    <ul>
        <li><strong>Numéricos:</strong> Los elementos se indexan usando números enteros, empezando desde 0.</li>
        <li><strong>Asociativos:</strong> Los elementos se indexan usando claves personalizadas.</li>
    </ul>
    <pre><code>$frutas = array("manzana", "plátano", "naranja"); // Array numérico
$precios = array("manzana" => 1.5, "plátano" => 0.9, "naranja" => 1.2); // Array asociativo</code></pre>

    <h3>Conversión de tipos:</h3>
    <p>PHP permite convertir valores de un tipo de dato a otro, como convertir una cadena a número entero o viceversa. Esto puede hacerse de forma explícita o implícita:</p>
    <pre><code>$cadena = "100";
$numero = (int) $cadena; // Conversión explícita de cadena a entero
$precioCadena = (string) $precio; // Conversión de flotante a cadena</code></pre>
</section>

<!-- Sección 4: Variables -->
<section>
    <h2>4. Variables</h2>
    <p>Las variables en PHP se representan con un <code>$</code> seguido del nombre de la variable. Son usadas para almacenar y manipular datos. En PHP, los nombres de las variables deben comenzar con una letra o guion bajo, seguido de letras, números o guiones bajos, y son sensibles a mayúsculas y minúsculas.</p>
    
    <h3>Reglas para nombrar variables:</h3>
    <ul>
        <li>Los nombres de variables deben empezar con un signo <code>$</code>.</li>
        <li>El primer carácter después del <code>$</code> debe ser una letra o guion bajo.</li>
        <li>No pueden contener espacios ni caracteres especiales (excepto guion bajo).</li>
        <li>Son sensibles a mayúsculas y minúsculas: <code>$edad</code> y <code>$Edad</code> son variables diferentes.</li>
    </ul>
    
    <h3>Ejemplos de variables:</h3>
    <pre><code>$miVariable = "Hola, mundo!"; // Cadena de texto
$edad = 25; // Número entero
$precio = 19.99; // Flotante
$esActivo = true; // Booleano</code></pre>
    
    <h3>Asignación de valores a variables:</h3>
    <p>En PHP, las variables se pueden inicializar y asignar valores dinámicamente, es decir, no es necesario declarar el tipo de variable previamente.</p>
    <pre><code>$nombre = "Antonio"; // Asigna un valor de cadena
$nombre = 42; // Ahora la misma variable es un entero</code></pre>
    
    <h3>Variables variables:</h3>
    <p>PHP permite el uso de "variables variables", es decir, una variable que puede contener el nombre de otra variable.</p>
    <pre><code>$a = "hola";
$$a = "mundo"; // Crea la variable $hola
echo $hola; // Imprime "mundo"</code></pre>
    
    <h3>Variables globales y locales:</h3>
    <p>Las variables pueden tener un ámbito local o global, dependiendo de dónde se definan. Las variables globales están disponibles en cualquier parte del script, mientras que las locales solo están disponibles dentro de las funciones o bloques donde se definen.</p>
    <pre><code>$globalVar = "Soy global";

function test() {
    $localVar = "Soy local";
    echo $localVar; // Accesible dentro de la función
}
echo $globalVar; // Accesible en cualquier parte</code></pre>

    <h3>Uso de variables superglobales:</h3>
    <p>PHP proporciona variables superglobales que están disponibles en todo el script, independientemente del ámbito. Ejemplos comunes incluyen <code>$_GET</code>, <code>$_POST</code>, <code>$_SESSION</code>, y <code>$_COOKIE</code>.</p>
</section>

 <!-- Sección 5: Ámbito de las Variables -->
<section>
    <h2>5. Ámbito de las Variables</h2>
    <p>El ámbito de una variable determina dónde puedes acceder a ella dentro de un programa. En PHP, existen tres tipos principales de ámbito: <strong>global</strong>, <strong>local</strong> y <strong>estático</strong>. Comprender el ámbito es crucial para manejar correctamente el flujo de datos entre diferentes partes del código.</p>

    <h3>1. Variables Globales:</h3>
    <p>Las variables globales se definen fuera de las funciones y están disponibles en cualquier parte del script, excepto dentro de las funciones, a menos que se utilice la palabra clave <code>global</code>.</p>
    <pre><code>$x = 10; // Variable global

function miFuncion() {
    global $x; // Permite acceder a la variable global $x
    echo $x; // Imprime: 10
}
miFuncion(); // Llamada a la función</code></pre>

    <h3>2. Variables Locales:</h3>
    <p>Las variables definidas dentro de una función tienen un ámbito local, lo que significa que solo pueden ser accedidas dentro de esa función y no fuera de ella.</p>
    <pre><code>function otraFuncion() {
    $y = 5; // Variable local
    echo $y; // Imprime: 5
}
otraFuncion();
echo $y; // Error: $y no está definida fuera de la función</code></pre>

    <h3>3. Variables Estáticas:</h3>
    <p>Las variables estáticas retienen su valor entre ejecuciones de una función. Esto significa que si una función se ejecuta múltiples veces, una variable estática no perderá su valor anterior.</p>
    <pre><code>function contador() {
    static $contador = 0; // Variable estática
    $contador++;
    echo $contador;
}
contador(); // Imprime: 1
contador(); // Imprime: 2
contador(); // Imprime: 3</code></pre>

    <h3>4. Uso de Variables Superglobales:</h3>
    <p>PHP proporciona varias <strong>variables superglobales</strong> que están disponibles en cualquier parte del script, sin importar el ámbito en el que se encuentren. Ejemplos de superglobales incluyen:</p>
    <ul>
        <li><code>$_GET</code> y <code>$_POST</code>: Para manejar datos enviados por formularios.</li>
        <li><code>$_SESSION</code>: Para manejar sesiones de usuario.</li>
        <li><code>$_COOKIE</code>: Para acceder a cookies.</li>
        <li><code>$_SERVER</code>: Contiene información sobre el entorno del servidor.</li>
    </ul>
    <pre><code>// Ejemplo con $_GET:
$nombre = $_GET['nombre']; // Accede a datos enviados en la URL
echo "Hola, " . $nombre;</code></pre>

    <h3>5. Variables Globales con <code>$GLOBALS</code>:</h3>
    <p>En PHP, también puedes acceder a cualquier variable global usando la superglobal <code>$GLOBALS</code>, que es un array asociativo que almacena todas las variables globales del script.</p>
    <pre><code>$a = 20;
function accederGlobal() {
    echo $GLOBALS['a']; // Accede a la variable global $a
}
accederGlobal(); // Imprime: 20</code></pre>

<!-- Sección 6: Funciones de Impresión -->
<section>
    <h2>6. Funciones de Impresión</h2>
    <p>En PHP, existen varias formas de mostrar datos en pantalla. Las funciones más comunes para la salida de datos son <code>echo</code>, <code>print</code>, <code>printf</code> y <code>sprintf</code>. Cada una tiene características específicas según la necesidad de formatear o manipular los datos.</p>

    <h3>1. <code>echo</code>:</h3>
    <p><code>echo</code> es una construcción de lenguaje en PHP (no una función) que se usa para imprimir una o más cadenas de texto. Es la manera más rápida de mostrar datos, y no devuelve ningún valor.</p>
    <pre><code>echo "Hola, mundo!"; // Imprime directamente una cadena de texto
$nombre = "Juan";
echo "Hola, " . $nombre . "!"; // Concatenación de cadenas</code></pre>

    <h3>2. <code>print</code>:</h3>
    <p>Al igual que <code>echo</code>, <code>print</code> también se utiliza para mostrar datos. La diferencia principal es que <code>print</code> siempre devuelve el valor <code>1</code>, lo que significa que puede ser usado en expresiones. Sin embargo, <code>print</code> es ligeramente más lento que <code>echo</code>.</p>
    <pre><code>print "Esto es un mensaje de prueba."; // Imprime el mensaje y devuelve 1</code></pre>

    <h3>3. <code>printf</code>:</h3>
    <p><code>printf</code> es una función más avanzada que permite formatear cadenas antes de imprimirlas. Utiliza especificadores de formato para insertar valores en una cadena de texto de forma estructurada.</p>
    <ul>
        <li><code>%s</code> para cadenas de texto.</li>
        <li><code>%d</code> para enteros.</li>
        <li><code>%f</code> para números de punto flotante.</li>
    </ul>
    <pre><code>$nombre = "Juan";
$edad = 30;
$altura = 1.75;
printf("Nombre: %s, Edad: %d años, Altura: %.2f metros.", $nombre, $edad, $altura);
// Imprime: Nombre: Juan, Edad: 30 años, Altura: 1.75 metros</code></pre>

    <h3>4. <code>sprintf</code>:</h3>
    <p>La función <code>sprintf</code> funciona de manera similar a <code>printf</code>, pero en lugar de imprimir la cadena directamente, la devuelve como un valor que puede ser almacenado en una variable o usado más tarde. Es útil cuando necesitas manipular o almacenar una cadena formateada.</p>
    <pre><code>$formato = sprintf("Nombre: %s, Edad: %d años.", $nombre, $edad);
echo $formato; // Imprime: Nombre: Juan, Edad: 30 años.</code></pre>

    <h3>5. Comparación entre <code>echo</code> y <code>print</code>:</h3>
    <ul>
        <li><code>echo</code> es más rápido y permite múltiples parámetros, separados por comas (aunque este uso es raro).</li>
        <li><code>print</code> es más lento y devuelve un valor, por lo que puede usarse en expresiones, aunque normalmente no es necesario.</li>
    </ul>
    <pre><code>echo "Hola, ", "mundo!"; // Imprime: Hola, mundo!
$resultado = print "Hola, mundo!"; // Imprime: Hola, mundo! y $resultado será 1</code></pre>
</section>

<!-- Sección 7: Manejo de Tipos de Datos -->
<section>
    <h2>7. Tipos de Datos y Funciones</h2>
    <p>En PHP, puedes manejar tipos de datos utilizando funciones como <code>gettype()</code> y <code>settype()</code>. Estas funciones son útiles para verificar y cambiar el tipo de una variable durante la ejecución de tu código.</p>

    <h3>1. <code>gettype()</code>:</h3>
    <p>La función <code>gettype()</code> se utiliza para obtener el tipo de una variable. Puede devolver uno de los siguientes tipos: <code>integer</code>, <code>double</code>, <code>string</code>, <code>boolean</code>, <code>array</code>, <code>object</code>, <code>resource</code>, o <code>NULL</code>.</p>
    <pre><code>$variable = 42;
echo gettype($variable); // Salida: integer

$variable = "Hola";
echo gettype($variable); // Salida: string

$variable = true;
echo gettype($variable); // Salida: boolean</code></pre>

    <h3>2. <code>settype()</code>:</h3>
    <p>La función <code>settype()</code> se usa para cambiar el tipo de una variable. Acepta dos argumentos: la variable a convertir y el nuevo tipo deseado. Los tipos aceptados son los mismos que los devueltos por <code>gettype()</code>.</p>
    <pre><code>$variable = "123";
settype($variable, "integer"); // Cambia el tipo a entero
echo gettype($variable); // Salida: integer
echo $variable + 1; // Salida: 124</code></pre>

    <h3>3. Conversión Automática de Tipos:</h3>
    <p>PHP realiza una conversión automática de tipos (también conocida como <strong>casting</strong>) en algunas situaciones. Por ejemplo, al realizar operaciones aritméticas, PHP convertirá automáticamente las cadenas que contienen números a enteros o flotantes.</p>
    <pre><code>$cadena = "100";
$suma = $cadena + 50; // PHP convierte automáticamente $cadena a un entero
echo $suma; // Salida: 150</code></pre>

    <h3>4. Casting Manual:</h3>
    <p>También puedes realizar un casting manual al especificar el tipo al que deseas convertir la variable. Esto se hace colocando el tipo deseado antes de la variable entre paréntesis.</p>
    <pre><code>$numero = 10.5;
$entero = (int)$numero; // Convierte a entero
echo $entero; // Salida: 10

$cadena = (string)$numero; // Convierte a cadena
echo $cadena; // Salida: "10.5"</code></pre>

    <h3>5. Comparación de Tipos:</h3>
    <p>Al comparar variables, PHP realiza una conversión de tipos si los tipos son diferentes. Por ejemplo:</p>
    <pre><code>$x = "5";
$y = 5;
if ($x == $y) {
    echo "Son iguales."; // Esto se imprimirá, porque PHP convierte $x a entero
} else {
    echo "No son iguales.";
}</code></pre>
</section>

<!-- Sección 8: Manejo de Advertencias -->
<section>
    <h2>8. Manejo de Advertencias</h2>
    <p>En PHP, las advertencias y errores son mensajes que indican problemas potenciales en tu código. Es importante saber cómo manejarlos para mantener un entorno de desarrollo limpio y eficiente.</p>

    <h3>1. ¿Qué son las Advertencias?</h3>
    <p>Las advertencias son mensajes generados por PHP que indican que algo no está funcionando como se esperaba, pero no impiden que el script continúe ejecutándose. Por ejemplo, intentar acceder a una variable no definida generará una advertencia, pero el script seguirá en ejecución.</p>

    <h3>2. Ajuste de Configuraciones en <code>php.ini</code>:</h3>
    <p>Puedes ajustar la configuración de error y advertencia en el archivo <code>php.ini</code>. Las siguientes directivas son útiles:</p>
    <ul>
        <li><code>error_reporting</code>: Esta directiva establece qué tipos de errores y advertencias serán reportados. Puedes configurarla para mostrar solo errores fatales o incluir advertencias.</li>
        <li><code>display_errors</code>: Esta opción determina si los errores deben ser mostrados en la salida del script. Puedes configurarla en <code>On</code> para mostrar errores o <code>Off</code> para ocultarlos.</li>
    </ul>
    <pre><code>error_reporting = E_ALL; // Reportar todos los errores y advertencias
display_errors = On; // Mostrar errores en la salida</code></pre>

    <h3>3. Control de Errores en Tiempo de Ejecución:</h3>
    <p>Puedes controlar el manejo de errores y advertencias en tiempo de ejecución utilizando funciones como <code>error_reporting()</code> y <code>ini_set()</code>.</p>
    <pre><code>ini_set('display_errors', 0); // Ocultar errores
error_reporting(E_WARNING); // Reportar solo advertencias</code></pre>

    <h3>4. Manejo de Errores Personalizado:</h3>
    <p>PHP permite crear manejadores de errores personalizados. Puedes definir una función que maneje los errores y las advertencias a tu manera.</p>
    <pre><code>function manejoErrores($errno, $errstr) {
        echo "Error: [$errno] $errstr<br>";
        // Puedes realizar más acciones aquí, como registrar el error en un archivo
    }

set_error_handler("manejoErrores"); // Establecer el manejador de errores personalizado</code></pre>

    <h3>5. Usar el Modo de Desarrollo:</h3>
    <p>En un entorno de desarrollo, es útil mostrar todos los errores y advertencias para facilitar la depuración. Asegúrate de que <code>display_errors</code> esté activado y que <code>error_reporting</code> esté configurado para reportar todos los errores.</p>
    <pre><code>error_reporting(E_ALL);
ini_set('display_errors', '1');</code></pre>

    <h3>6. Ocultar Errores en Producción:</h3>
    <p>En un entorno de producción, es recomendable ocultar los errores para no revelar información sensible a los usuarios. Configura <code>display_errors</code> en <code>Off</code> y registra los errores en un archivo de log utilizando <code>log_errors</code>.</p>
    <pre><code>ini_set('display_errors', '0'); // Ocultar errores
ini_set('log_errors', '1'); // Habilitar registro de errores
ini_set('error_log', '/ruta/al/archivo/de/log.txt'); // Especificar la ruta del archivo de log</code></pre>
</section>

<!-- Sección 9: Constantes -->
<section>
    <h2>9. Constantes</h2>
    <p>Las constantes en PHP son valores que no pueden ser cambiados una vez definidos durante la ejecución del script. Se utilizan para almacenar datos que se mantendrán constantes, lo que puede ayudar a mejorar la legibilidad y mantenimiento del código.</p>

    <h3>1. Definición de Constantes:</h3>
    <p>Las constantes se definen utilizando la función <code>define()</code>. Esta función toma dos parámetros: el nombre de la constante y su valor. Por convención, los nombres de las constantes suelen estar en mayúsculas.</p>
    <pre><code>define("MI_CONSTANTE", 100);
echo MI_CONSTANTE; // Salida: 100</code></pre>

    <h3>2. Uso de Constantes:</h3>
    <p>Las constantes se pueden utilizar en cualquier parte del script después de su definición. No requieren el símbolo <code>$</code> al ser llamadas, a diferencia de las variables.</p>
    <pre><code>define("PI", 3.14);
$area = PI * 5 * 5; // Calcula el área de un círculo de radio 5
echo "El área es: " . $area; // Salida: El área es: 78.5</code></pre>

    <h3>3. Constantes Predefinidas:</h3>
    <p>PHP también proporciona un conjunto de constantes predefinidas que pueden ser útiles. Algunas de las más comunes son:</p>
    <ul>
        <li><code>PHP_VERSION</code>: Devuelve la versión de PHP en uso.</li>
        <li><code>PHP_OS</code>: Devuelve el sistema operativo en el que se está ejecutando PHP.</li>
        <li><code>PHP_INT_MAX</code>: Devuelve el valor máximo que puede almacenar un entero.</li>
    </ul>
    <pre><code>echo "Versión de PHP: " . PHP_VERSION; // Muestra la versión de PHP
echo "Sistema operativo: " . PHP_OS; // Muestra el sistema operativo</code></pre>

    <h3>4. Constantes de Ámbito Global:</h3>
    <p>A diferencia de las variables, las constantes tienen un ámbito global, lo que significa que están disponibles en todo el script, incluidas las funciones. Puedes acceder a ellas directamente sin necesidad de utilizar la palabra clave <code>global</code>.</p>
    <pre><code>define("SALUDO", "¡Hola, mundo!");

function mostrarSaludo() {
    echo SALUDO; // Accede a la constante SALUDO
}

mostrarSaludo(); // Salida: ¡Hola, mundo!</code></pre>

    <h3>5. Definir Constantes de Arrays:</h3>
    <p>Desde PHP 7, puedes definir constantes que sean arrays utilizando <code>define()</code> con un tercer parámetro. Esto te permite agrupar varios valores bajo un mismo nombre constante.</p>
    <pre><code>define("COLORES", ["rojo", "verde", "azul"], true); // Constante de array
echo COLORES[0]; // Salida: rojo</code></pre>

    <h3>6. Limitaciones de las Constantes:</h3>
    <p>Las constantes no se pueden redefinir ni eliminar una vez que se han creado. Esto asegura que su valor permanezca constante durante la ejecución del script. Si intentas redefinir una constante, obtendrás un error.</p>
    <pre><code>define("NUMERO", 10);
// define("NUMERO", 20); // Esto causaría un error</code></pre>
</section>

<!-- Sección 10: Fechas y Horas -->
<section>
    <h2>10. Fechas y Horas</h2>
    <p>PHP permite trabajar con fechas usando la clase <code>DateTime</code>. Además, puedes formatear fechas de diferentes maneras.</p>
    
    <h3>Formatos de Fecha Comunes:</h3>
    <p>A continuación, se presentan algunos formatos de fecha que puedes utilizar:</p>
    <ul>
        <li><strong>Formato Completo:</strong> <code>Y-m-d H:i:s</code> (2024-10-21 14:00:00)</li>
        <li><strong>Fecha Corta:</strong> <code>d/m/Y</code> (21/10/2024)</li>
        <li><strong>Mes y Año:</strong> <code>F Y</code> (Octubre 2024)</li>
        <li><strong>Día de la Semana:</strong> <codel>l</code> (Lunes)</li>
        <li><strong>Hora en Formato 12 horas:</strong> <code>h:i A</code> (02:00 PM)</li>
        <li><strong>Fecha y Hora ISO 8601:</strong> <code>c</code> (2024-10-21T14:00:00+00:00)</li>
    </ul>
    
    <h3>Ejemplo de Formateo:</h3>
    <pre><code>$fecha = new DateTime();
echo $fecha->format('Y-m-d H:i:s'); // Salida: 2024-10-21 14:00:00
echo $fecha->format('d/m/Y'); // Salida: 21/10/2024
echo $fecha->format('F Y'); // Salida: Octubre 2024
echo $fecha->format('l'); // Salida: Lunes
echo $fecha->format('h:i A'); // Salida: 02:00 PM
echo $fecha->format('c'); // Salida: 2024-10-21T14:00:00+00:00</code></pre>

<!-- Sección 11: Variables Especiales -->
<section>
    <h2>11. Variables Especiales de PHP</h2>
    <p>PHP ofrece varias variables superglobales que permiten acceder a información sobre el entorno de ejecución y la interacción del usuario. Algunas de las más comunes son:</p>
    
    <h3>Variables Superglobales:</h3>
    <ul>
        <li><code>$_SERVER</code>: Contiene información sobre las cabeceras, rutas y ubicaciones de los scripts.</li>
        <li><code>$_GET</code>: Almacena datos enviados a través de la URL usando el método GET.</li>
        <li><code>$_POST</code>: Almacena datos enviados a través de un formulario usando el método POST.</li>
        <li><code>$_COOKIE</code>: Contiene los datos de las cookies enviadas por el navegador.</li>
        <li><code>$_SESSION</code>: Almacena información sobre la sesión del usuario a través de la variable de sesión.</li>
        <li><code>$_FILES</code>: Contiene información sobre los archivos subidos a través de un formulario.</li>
        <li><code>$_REQUEST</code>: Contiene los datos de <code>$_GET</code>, <code>$_POST</code> y <code>$_COOKIE</code> combinados.</li>
    </ul>
    
    <h3>Ejemplo de Uso:</h3>
    <pre><code>echo "&lt;pre&gt;";
print_r($_SERVER); // Muestra información del servidor
echo "&lt;/pre&gt;";</code></pre>

    <h3>Ejemplo de Acceso a Datos:</h3>
    <p>Para acceder a datos específicos, puedes hacerlo así:</p>
    <pre><code>if (isset($_GET['nombre'])) {
    echo "Hola, " . htmlspecialchars($_GET['nombre']);
}

if (isset($_POST['email'])) {
    echo "Tu email es: " . htmlspecialchars($_POST['email']);
}
</code></pre>

    <h3>Ejemplo de Uso de <code>unset()</code>:</h3>
    <p>La función <code>unset()</code> se utiliza para eliminar una variable y liberar la memoria ocupada por ella:</p>
    <pre><code>$nombre = "Juan";
echo $nombre; // Imprime: Juan

unset($nombre); // Elimina la variable $nombre

if (!isset($nombre)) {
    echo "La variable nombre ha sido eliminada.";
}
</code></pre>
</section>

    </main>

    <footer>
        <p>Documentación creada por Antonio Jesús Alguacil Espejo.</p>
    </footer>
</body>
</html>

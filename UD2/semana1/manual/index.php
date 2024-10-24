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
<!-- Sección 1: Introducción a PHP -->
<section>
    <h2>1. Comenzando con PHP</h2>
    <p>Para usar PHP, debes guardar tu código en un archivo con la extensión <code>.php</code>. El código PHP se encierra entre etiquetas especiales.</p>
    <h3>Ejemplo:</h3>
    <pre><code>&lt;?php
// Código PHP
echo "¡Bienvenido a PHP!";
?&gt;</code></pre>
    <h3>Resultado:</h3>
    <p><?php echo "¡Bienvenido a PHP!"; ?></p>
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
*/</code></pre>
    
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
    
    <h3>Resultado:</h3>
    <p><?php
        $numero = 42; // Entero
        $precio = 19.99; // Flotante
        $saludo = "¡Hola, mundo!"; // Cadena
        $esVerdad = true; // Booleano
        $colores = array("rojo", "verde", "azul"); // Array simple
        $persona = (object) ['nombre' => 'Antonio', 'edad' => 30]; // Objeto
        $variableNula = null; // Nulo
        echo "$saludo - Número: $numero, Precio: $precio, ¿Es verdad? $esVerdad";
    ?></p>

    <h3>Arrays en PHP:</h3>
    <p>Los arrays pueden ser:</p>
    <ul>
        <li><strong>Numéricos:</strong> Los elementos se indexan usando números enteros, empezando desde 0.</li>
        <li><strong>Asociativos:</strong> Los elementos se indexan usando claves personalizadas.</li>
    </ul>
    <pre><code>$frutas = array("manzana", "plátano", "naranja"); // Array numérico
$precios = array("manzana" => 1.5, "plátano" => 0.9, "naranja" => 1.2); // Array asociativo</code></pre>
    
    <h3>Resultado:</h3>
    <p><?php
        $frutas = array("manzana", "plátano", "naranja"); // Array numérico
        $precios = array("manzana" => 1.5, "plátano" => 0.9, "naranja" => 1.2); // Array asociativo
        echo "Frutas: " . implode(", ", $frutas) . " - Precios: " . implode(", ", $precios);
    ?></p>

    <h3>Conversión de tipos:</h3>
    <p>PHP permite convertir valores de un tipo de dato a otro, como convertir una cadena a número entero o viceversa. Esto puede hacerse de forma explícita o implícita:</p>
    <pre><code>$cadena = "100";
$numero = (int) $cadena; // Conversión explícita de cadena a entero
$precioCadena = (string) $precio; // Conversión de flotante a cadena</code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $cadena = "100";
        $numero = (int) $cadena; // Conversión explícita de cadena a entero
        $precio = 19.99;
        $precioCadena = (string) $precio; // Conversión de flotante a cadena
        echo "Cadena: $cadena - Número: $numero - Precio como cadena: $precioCadena";
    ?></p>
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
    
    <h3>Resultado:</h3>
    <p><?php
        $miVariable = "Hola, mundo!"; // Cadena de texto
        $edad = 25; // Número entero
        $precio = 19.99; // Flotante
        $esActivo = true; // Booleano
        echo "$miVariable - Edad: $edad, Precio: $precio, ¿Es activo? $esActivo";
    ?></p>
    
    <h3>Asignación de valores a variables:</h3>
    <p>En PHP, las variables se pueden inicializar y asignar valores dinámicamente, es decir, no es necesario declarar el tipo de variable previamente.</p>
    <pre><code>$nombre = "Antonio"; // Asigna un valor de cadena
$nombre = 42; // Ahora la misma variable es un entero</code></pre>
    
    <h3>Resultado:</h3>
    <p><?php
        $nombre = "Antonio"; // Asigna un valor de cadena
        $nombre = 42; // Ahora la misma variable es un entero
        echo "Nombre: $nombre";
    ?></p>
    
    <h3>Variables variables:</h3>
    <p>PHP permite el uso de "variables variables", es decir, una variable que puede contener el nombre de otra variable.</p>
    <pre><code>$a = "hola";
$$a = "mundo"; // Crea la variable $hola
echo $hola; // Imprime "mundo"</code></pre>
    
    <h3>Resultado:</h3>
    <p><?php
        $a = "hola";
        $$a = "mundo"; // Crea la variable $hola
        echo $hola; // Imprime "mundo"
    ?></p>
    
    <h3>Variables globales y locales:</h3>
    <p>Las variables pueden tener un ámbito local o global, dependiendo de dónde se definan. Las variables globales están disponibles en cualquier parte del script, mientras que las locales solo están disponibles dentro de las funciones o bloques donde se definen.</p>
    <pre><code>$globalVar = "Soy global";

function test() {
    $localVar = "Soy local";
    echo $localVar; // Accesible dentro de la función
}
echo $globalVar; // Accesible en cualquier parte</code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $globalVar = "Soy global";

        function test() {
            $localVar = "Soy local";
            echo $localVar; // Accesible dentro de la función
        }
        test();
        echo $globalVar; // Accesible en cualquier parte
    ?></p>

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

    <h3>Resultado:</h3>
    <p><?php
        $x = 10; // Variable global

        function miFuncion() {
            global $x; // Permite acceder a la variable global $x
            echo $x; // Imprime: 10
        }
        miFuncion(); // Llamada a la función
    ?></p>

    <h3>2. Variables Locales:</h3>
    <p>Las variables definidas dentro de una función tienen un ámbito local, lo que significa que solo pueden ser accedidas dentro de esa función y no fuera de ella.</p>
    <pre><code>function otraFuncion() {
    $y = 5; // Variable local
    echo $y; // Imprime: 5
}
otraFuncion();
echo $y; // Error: $y no está definida fuera de la función</code></pre>

    <h3>Resultado:</h3>
    <p><?php
        function otraFuncion() {
            $y = 5; // Variable local
            echo $y; // Imprime: 5
        }
        otraFuncion();
        // echo $y; // Error: $y no está definida fuera de la función
    ?></p>

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

    <h3>Resultado:</h3>
    <p><?php
        function contador() {
            static $contador = 0; // Variable estática
            $contador++;
            echo $contador;
        }
        contador(); // Imprime: 1
        contador(); // Imprime: 2
        contador(); // Imprime: 3
    ?></p>

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

    <h3>Resultado (simulación):</h3>
    <p><?php
        // Simulación de $_GET (usualmente no se puede mostrar directamente aquí sin un formulario)
        $nombre = "Antonio"; // Simulamos que este dato viene de $_GET
        echo "Hola, " . $nombre; // Imprime: Hola, Antonio
    ?></p>

    <h3>5. Variables Globales con <code>$GLOBALS</code>:</h3>
    <p>En PHP, también puedes acceder a cualquier variable global usando la superglobal <code>$GLOBALS</code>, que es un array asociativo que almacena todas las variables globales del script.</p>
    <pre><code>$a = 20;
function accederGlobal() {
    echo $GLOBALS['a']; // Accede a la variable global $a
}
accederGlobal(); // Imprime: 20</code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $a = 20;
        function accederGlobal() {
            echo $GLOBALS['a']; // Accede a la variable global $a
        }
        accederGlobal(); // Imprime: 20
    ?></p>
</section>

<!-- Sección 6: Funciones de Impresión -->
<section>
    <h2>6. Funciones de Impresión</h2>
    <p>Las funciones de impresión en PHP se utilizan para mostrar datos en la salida. Las más comunes son <code>echo</code>, <code>print</code>, <code>printf</code> y <code>sprintf</code>.</p>

    <h3>Uso de <code>echo</code>:</h3>
    <pre><code>
    // Ejemplo de uso de echo
    echo "Hola, mundo!"; // Salida: Hola, mundo!
    
    $nombre = "Juan";
    echo "Hola, " . $nombre . "!"; // Salida: Hola, Juan!
    </code></pre>
    
    <h3>Resultado:</h3>
    <p><?php
        $nombre = "Juan";
        echo "Hola, " . $nombre . "!"; // Salida: Hola, Juan!
    ?></p>

    <h3>Uso de <code>print</code>:</h3>
    <pre><code>
    // Ejemplo de uso de print
    print "Esto es un mensaje de prueba."; // Salida: Esto es un mensaje de prueba.
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        print "Esto es un mensaje de prueba."; // Salida: Esto es un mensaje de prueba.
    ?></p>

    <h3>Uso de <code>printf</code>:</h3>
    <pre><code>
    // Ejemplo de uso de printf
    $nombre = "Juan";
    $edad = 30;
    $altura = 1.75;
    printf("Nombre: %s, Edad: %d años, Altura: %.2f metros.", $nombre, $edad, $altura);
    // Salida: Nombre: Juan, Edad: 30 años, Altura: 1.75 metros.
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $nombre = "Juan";
        $edad = 30;
        $altura = 1.75;
        printf("Nombre: %s, Edad: %d años, Altura: %.2f metros.", $nombre, $edad, $altura);
    ?></p>

    <h3>Uso de <code>sprintf</code>:</h3>
    <pre><code>
    // Ejemplo de uso de sprintf
    $formato = sprintf("Nombre: %s, Edad: %d años.", $nombre, $edad);
    echo $formato; // Salida: Nombre: Juan, Edad: 30 años.
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $formato = sprintf("Nombre: %s, Edad: %d años.", $nombre, $edad);
        echo $formato; // Salida: Nombre: Juan, Edad: 30 años.
    ?></p>

    <h3>Comparación entre <code>echo</code> y <code>print</code>:</h3>
    <pre><code>
    // Ejemplo de comparación entre echo y print
    echo "Hola, ", "mundo!"; // Salida: Hola, mundo!
    $resultado = print "Hola, mundo!"; // Salida: Hola, mundo! y $resultado será 1
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        echo "Hola, ", "mundo!"; // Salida: Hola, mundo!
        $resultado = print "Hola, mundo!"; // Salida: Hola, mundo! y $resultado será 1
    ?></p>
</section>

<!-- Sección 7: Tipos de Datos y Funciones -->
<section>
    <h2>7. Tipos de Datos y Funciones</h2>
    <p>PHP permite trabajar con diferentes tipos de datos y proporciona funciones para manipularlos.</p>

    <h3>Uso de <code>gettype()</code>:</h3>
    <pre><code>
    // Ejemplo de uso de gettype
    $variable = 42;
    echo gettype($variable); // Salida: integer
    
    $variable = "Hola";
    echo gettype($variable); // Salida: string
    
    $variable = true;
    echo gettype($variable); // Salida: boolean
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $variable = true;
        echo gettype($variable); // Salida: boolean
    ?></p>

    <h3>Uso de <code>settype()</code>:</h3>
    <pre><code>
    // Ejemplo de uso de settype
    $variable = "123";
    settype($variable, "integer"); // Cambia el tipo a entero
    echo gettype($variable); // Salida: integer
    echo $variable + 1; // Salida: 124
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $variable = "123";
        settype($variable, "integer");
        echo $variable + 1; // Salida: 124
    ?></p>

    <h3>Conversión Automática de Tipos:</h3>
    <pre><code>
    // Ejemplo de conversión automática de tipos
    $cadena = "100";
    $suma = $cadena + 50; // PHP convierte automáticamente $cadena a un entero
    echo $suma; // Salida: 150
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $cadena = "100";
        $suma = $cadena + 50;
        echo $suma; // Salida: 150
    ?></p>

    <h3>Casting Manual:</h3>
    <pre><code>
    // Ejemplo de casting manual
    $numero = 10.5;
    $entero = (int)$numero; // Convierte a entero
    echo $entero; // Salida: 10

    $cadena = (string)$numero; // Convierte a cadena
    echo $cadena; // Salida: "10.5"
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $numero = 10.5;
        $entero = (int)$numero;
        echo $entero; // Salida: 10
    ?></p>

    <h3>Comparación de Tipos:</h3>
    <pre><code>
    // Ejemplo de comparación de tipos
    $x = "5";
    $y = 5;
    if ($x == $y) {
        echo "Son iguales."; // Esto se imprimirá, porque PHP convierte $x a entero
    } else {
        echo "No son iguales.";
    }
    </code></pre>

    <h3>Resultado:</h3>
    <p><?php
        $x = "5";
        $y = 5;
        if ($x == $y) {
            echo "Son iguales."; // Esto se imprimirá, porque PHP convierte $x a entero
        } else {
            echo "No son iguales.";
        }
    ?></p>
</section>

<!-- Sección 8: Manejo de Advertencias -->
<section>
    <h2>8. Manejo de Advertencias</h2>
    <p>El manejo de advertencias es importante para controlar el flujo de un script y evitar errores inesperados.</p>

    <h3>Ajuste de Configuraciones en <code>php.ini</code>:</h3>
    <pre><code>
    // Configuraciones de error y advertencia en php.ini
    error_reporting = E_ALL; // Reportar todos los errores y advertencias
    display_errors = On; // Mostrar errores en la salida
    </code></pre>

    <h3>Control de Errores en Tiempo de Ejecución:</h3>
    <pre><code>
    // Control de errores en tiempo de ejecución
    ini_set('display_errors', 0); // Ocultar errores
    error_reporting(E_WARNING); // Reportar solo advertencias
    </code></pre>

    <h3>Manejo de Errores Personalizado:</h3>
    <pre><code>
    // Ejemplo de manejo de errores personalizado
    function manejoErrores($errno, $errstr) {
        echo "Error: [$errno] $errstr<br>";
    }

    set_error_handler("manejoErrores"); // Establecer el manejador de errores personalizado
    </code></pre>
</section>
    </main>
<br>

    <footer>
        <p>Documentación creada por Antonio Jesús Alguacil Espejo.</p>
    </footer>
</body>
</html>

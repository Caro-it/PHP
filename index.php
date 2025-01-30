<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP activity </h1>
    
    
<!--Ex1. Usa la variable $link como texto y la variable $url como el atributo href en un elemento html 
//tipo <a> (enlace) que conecta con la documentación del PHP.
        $link = 'PHP Documentation';
        $url = "http://php.net/manual/en/language.variables.php"-->
     <p>Consultar la documentación de PHP aqui:</p>

    <?php
    
        $link = 'PHP Documentation'; 
        $url = "http://php.net/manual/en/language.variables.php"; 
        echo "<a href='$url'\>$link<a/>"
    ?>

<!--//Ex2. Mostrar la siguiente información (la puedes encontrar toda dentro de la superglobal $_SERVER,
 mira algunos ejemplos aqui: https://www.php.net/manual/en/reserved.variables.server.php):    
    /*  Nombre e IP del Servidor
        Directorio Raíz
        Fichero php actualmente ejecutandose
    */-->
 <p>Aqui puedes encontrar la informacion basica de tu servidor: </p>

 <?php
     echo $_SERVER['SERVER_NAME'] . "<br>";
     echo $_SERVER['SERVER_ADDR'] . "<br>";
     echo $_SERVER['SCRIPT_NAME'] . "<br>";
     echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
     ?><br>

 <!--//Ex3. Crea una constante llamada PI con valor igual a 3.14. Luego usala para 
 calcular la area de un circulo con radio igual a un numero aleatorio, elegido entre 1 y 10./-->   

 <?php

    define("PI", 3.14); // Definir la constante PI
    $radio = rand(0, 10); // Generar un número aleatorio entre 1 y 10 para el radio

    $area = PI*$radio*$radio; // Calcula el área del círculo (fórmula: A = PI * radio^2) 
    $area = PI * pow($radio, 2);// Calcula el area usando otra notación

    // Mostrar los resultados

    echo "El radio de un circulo es: $radio<br>";
    echo " el area de un circulo es: $area";
    
 ?> 

 <p>Un círculo con radio igual a <?=$radio; ?> tiene un área de <?= $area; ?></p>
 
 <?php
    echo "<p> Un círculo con radio igual a $radio tiene una area de $area </p>";
?>

<form method="post" action="">
    <label>First name:<input type="text" name"fname"></label><br>
    <label>Last name:<input type="text" name"lname"></label><br>
    <label>Age:<input type="number" name"age"></label><br>
    <label>Favorite pet:
        <input type="radio" name"pet" value="dog">Dog
        <input type="radio" name"pet" value="cat">Cat
        <input type="radio" name"pet" value="other">Other
    </label>
    <input type="submit" name="submit" value="Submit">
<!--//if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $firstname = $_POST["fname"];   //variable donde se guarda el nombre//
    $lastname = $_POST["lname"]; //variable donde guardar el apellido//
    $age = $_POST["age"]; //variable donde guardar la edad//
    $pet = $_POST["pet"];//variable donde guardar la mascota//
}-->

<!--Ex4 Crea la variable que falta para que el siguiente mensaje este completo.-->
      
<?php   $currentLocation = "casa";
        $firstname = "Juan";
        echo "<h3> $firstname actualmente estas en $currentLocation </h3>";
    ?>

<!--Ex5. Suma los dos strings firstname y lastname y guarda el resultado en una variable
nueva llamada "fullname" y transforma el nombre a todo minuscula y luego imprime un mensaje con el nombre 
completo del usuario dentro de un tag h2 en tu HTML.-->

<?php
    $firstname = "Maria";// Definir las variables de nombre.//
    $lastname = "Smoly";// Definir las variables de apellido.//
    $fullnametolower = $firstname." ".$lastname;
    echo "<h2> Hola $fullnametolower </h2>"
?>
<!--Ex6. usa las variables "firstname" y "pet"  de arriba en un saludo 
(por ejemplo: "Bienvenida Anna! Tu animal favorito es un gato!"). 
Crea primero una nueva variable con ese texto y usa esa variable en el codigo HTML, dentro de un <h3>.-->

<?php
     $name = "Anna";
     $pet = "gato";
     $saludo =  "Bienvenida $name!! tu animal favorito es un $pet!";
     echo "<h3>$saludo</h3>"
?>
<!--Ex7. Crea tres variables que representen los siguientes datos: num de gatos, num de perros, 
num de otros animales (puedes usar numeros aleatorios generados por el metodo rand()). 
Despues crea los siguientes mensajes haciendo las operaciones matematicas necesarias.
 Transforma los numeros en strings antes de ponerlos en el mensaje, usando casting.
          /* ejemplo:
          Tu total de mascotas es: 18
          El ratio de gatos contra perros es: 2.33  
          */-->
<?php
    $numGatos = rand(0, 10);
    $numPerros = rand(0, 10);
    $numOtros = rand(0, 10);

    $totAnimales = $numGatos + $numPerros + $numOtros;
    $ratioGatosyPerros = $numGatos / $numPerros;

    echo "<h4>
            El número de gatos es $numGatos <br> 
            El número de perros es $numPerros <br>
            El número de otras mascotas es $numOtros <br>  
            El total de mascotas es: $totAnimales <br>
            El ratio de gatos contra perros es: $ratioGatosyPerros
    </h4>";
?>

<!--//Ex8. Incrementa la edad tres veces, usando las diferentes maneras que hemos visto de aumentar una variable. 
Luego escriba la edad final en un mensaje ej: "Tu edad ahora es $age, que rapido que pasa el tiempo!";/-->
<?php 

    $age = 40;
    $age = $age +1;
    $age++;
    $age +=1;
    echo "Tu edad ahora es $age!!!";
?>
</form>
</body>
</html>
#Configuración mínima de Silex

```php
<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app){
    
    //A la variable $respuesta se le asigna un arreglo asociativo. 
    //Ver http://php.net/manual/es/language.types.array.php
    $respuesta = array("hola" => "mundo");

    //Se indica que la respuesta es de tipo JSON
    return $app->json($respuesta);
});

$app->run();
```
La mayoría de las aplicaciones móviles en Android y iOS utilizan JSON para comunicarse del servidor web
al dispositivo móvil. 

En su navegador debería ver algo similar a:

![Configuración mínima de Silex en el navegador](https://raw.githubusercontent.com/tiempor3al/Silex/master/docs/images/ejercicio2.png)

En Chrome, Firefox, o Edge si están en Windows 10, pueden ver en la herramientas de desarrollo que el contenido de la ruta ha cambiado al tipo application/json

![Contenido de la ruta](https://raw.githubusercontent.com/tiempor3al/Silex/master/docs/images/ejercicio2_herramientas_desarrollo.png)

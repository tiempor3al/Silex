#Configuración mínima de Silex

'''php
<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//Se define una sola ruta, que no tiene parámetros
$app->get('/', function(){
    return 'Hola';
});

$app->run();
'''


En su navegador debería ver algo similar a:

![Configuración mínima de Silex en el navegador](https://raw.githubusercontent.com/tiempor3al/Silex/master/docs/images/ejercicio1.png)

En Chrome, Firefox, o Edge si están en Windows 10, pueden ver en la herramientas de desarrollo que el contenido de la ruta es de tipo text/html

![Contenido de la ruta](https://raw.githubusercontent.com/tiempor3al/Silex/master/docs/images/ejercicio1_herramientas_desarrollo.png)

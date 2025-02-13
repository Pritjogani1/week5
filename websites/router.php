<?php
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];



$routers = [
'/'=>'controller/index.php',
'/about'=>'./controller/about.php',
'/contact'=>'./controller/contact.php',
'/notes'=>'./controller/notes.php',
'/note'=>'./controller/note.php'
];


function routetocontroller($uri,$routers)
{
    if(array_key_exists($uri,$routers))
    {
        require $routers[$uri];
    }
    else{
   aboart(404);
    }
}

function aboart($code)
{
    http_response_code($code);
    require "./view/{$code}.php";
}

routetocontroller($uri,$routers);



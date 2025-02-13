<?php

// require "./functions.php";
 
// require "./router.php";

//connect with mysql datbase

//class Person{
//     public $name;
//     public $age;
    
//     public function berath()
//     {
//         echo "breathing";
//     }
// }

// $person = new Person();
//     $person->name = "prit";
//     $person->age = 25;
//     echo($person->name);
//}

// $dsn = 
// new PDO($dsn)


require "Database.php";

$config = require "config.php";
// $config = [
//     'host'=>'localhost',
//     'port'=>'3306',
//     'dbname'=>'dairy',
//     'user'=>'root'
// ];
$db = new Database($config);
$data = $db->query('select * from notes');
// var_dump($data);

foreach($data as $d)
{
    echo "<li>". $d['name']."</li>";
}

// $data1 =  implode(",", $data);
// foreach($data as $dd1)
// {
//     echo $dd1;
// }


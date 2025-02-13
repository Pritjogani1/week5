<?php

$heading = 'note';
$config = require "config.php";
$db = new Database($config);

$id = ($_GET['id']);
$note = $db->query("SELECT * FROM notes where id = :id" ,['id'=>$id]);
// var_dum

// require ("../functions.php");
require ("./view/note.view.php");

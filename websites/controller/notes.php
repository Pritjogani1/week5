<?php

$heading = 'My notes';

$config = require "config.php";
$db = new Database($config);
$notes = $db->query("SELECT * FROM notes");

// require ("../functions.php");
require ("./view/notes.view.php");

<?php

define('HOST', 'localhost');
define('SIBEUX', 'root');
define('pass', '');
define('DB', 'sakila');
$db = new mysqli(HOST, SIBEUX, pass, DB);

if($db->connect_errno){
    die('Tidak dapat terhubung ke database');
}
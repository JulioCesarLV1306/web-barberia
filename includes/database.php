<?php

$db = mysqli_connect('gtizpe105piw2gfq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
 'na7g0o2zjyl36kwl',
  'ul80mh6jbkfxgoht',
   'a6e1lef9kta8vo3l');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

<?php

$db = mysqli_connect('nj5rh9gto1v5n05t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	', 'db1d7pw1njw7eaeg', 'ul80mh6jbkfxgoht', 'v4kcbbu7d2kjatdm');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

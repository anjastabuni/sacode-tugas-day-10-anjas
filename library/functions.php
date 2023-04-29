<?php
function pdo_connect_mysql(){
    $localhost = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'phpcrud';
    try {
        return new PDO()
    } catch (\Throwable $th) {
        //throw $th;
    }
}

?>
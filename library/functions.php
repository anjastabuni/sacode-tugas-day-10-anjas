<?php
function pdo_connect_mysql()
{
    $localhost = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'phpcrud';
    try {
        return new PDO('mysql:host=' . $localhost . ';dbnama=' . $user . ';charset=utf8',  $user, $password);
    } catch (PDOException $excaption) {
        exit('Failed to connect to database!');
    }
}
function template_header($title)
{
    echo <<<EDT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
    <nav class="nanvtop">
    <div>
        <h1>Website Title</h1>
        <a href="index.php">Home</a>
        <a href="./content/read.php">Contacts</a>
    </div>
</nav>
EDT;
}
function template_footer()
{
    echo <<<EDT
    </body>
    </html>
    EDT;
}

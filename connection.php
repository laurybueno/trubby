<?php


    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = "54.94.128.189";
    $login = "trubby";
    $senha = "raiztrubby";
    $database = "trubby";
    $dbport = 3306;

    $con = mysql_connect($servername, $login, $senha) or
        die('Não foi possível conectar');
    mysql_select_db($database, $con);
    /*$con = mysql_connect(getenv('IP'), getenv('C9_USER'), 'trubby') or
                        die('Não foi possível conectar');
   mysql_select_db("trubby", $con);
   */
?>


<?php

/*
* Database connections
*/

function acmeConnect(){
  if (stripos($_SERVER["HTTP_HOST"], "localhost") === 0
      || stripos($_SERVER["HTTP_HOST"], "127.0.0.1") === 0) {
    // Running on local server
    $server = "localhost";
    $database = "cs313";
    $user = "iClient";
    $password = "l8n6kgKgpHjPbcue";
  } else {
    // Running on remote server
    $server = "localhost";
    $username = "iClient";
    $password = "IT7qy7{snbLr";
    $database = "stevenm6_acme";
  }
    $dsn = 'mysql:host='.$server.';dbname='.$database;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $acmeLink = new PDO($dsn, $user, $password, $options);
        return $acmeLink;
    } catch(PDOException $exc) {
        header('location: /acme/view/500.php');
        exit;
    }
}
?>

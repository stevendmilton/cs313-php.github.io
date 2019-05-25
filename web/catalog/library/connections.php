<?php

/*
* Database connections
*/


function abConnect(){
  $db = NULL;
  try
  {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }
  return $db;
}


function dbConnect(){
  if (stripos($_SERVER["HTTP_HOST"], "localhost") === 0
      || stripos($_SERVER["HTTP_HOST"], "127.0.0.1") === 0) {
    // Running on local server
    $server = "localhost";
    $database = "catalog";
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
        header('location: view/500.php');
        exit;
    }
}
?>

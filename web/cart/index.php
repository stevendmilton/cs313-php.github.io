<?php

/*
 * CS313 Main Controller
 */

 // Create or access a Session
 session_start();

 // Set the loggedin session variable to false
 if (!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = FALSE;
 }

// Get the database connection file
require_once 'library/connections.php';

// Get the miscellaneous functions file
require_once 'library/functions.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case 'checkout':
        include "view/checkout.php";
        break;
    case 'viewcart':
        include "view/viewcart.php";
        break;
    case 'confirmation':
        include "view/confirmation";
        break;
    default:
        include 'view/browse.php';
}
?>


<?php

/*
 * CS313 TA05 Main Controller
 */

// Get the database connection file
require_once 'library/connections.php';

// Get the miscellaneous functions file
require_once 'library/functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case 'list':
        $results = buildScripturesTable(getScriptures());
        include "view/list.php";
        break;
    default:
        include 'view/list.php';
}
?>


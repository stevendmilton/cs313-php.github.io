<?php

/*
 * CS313 TA05 Main Controller
 */

// Get the database connection file
require_once 'library/connections.php';

// Get the miscellaneous functions file
require_once 'library/functions.php';

// Get the miscellaneous functions file
require_once 'model/model.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
}
var_dump($action);
switch ($action){
    case 'list':
        $scriptures = getScriptures();
        $results = buildScripturesTable($scriptures);
        include "view/list.php";
        break;
    case 'find':
        //var_dump('Find');
        //$searchscript = filter_input(INPUT_POST, 'searchscript', FILTER_SANITIZE_STRING);
        //var_dump($searchscript);
        //$scriptures = findScriptures($searchscript);
        //$results = buildScriptureRefs($scriptures);
        include 'view/find.php';
        break;
    case 'detail':
        $sid = filter_input(INPUT_GET, 'id');
        $content = GetScriptureById($sid);
        $results = DisplayContent($content);
        include 'view/view.php';
        break;
    case 'home':
        include 'view/list.php';
        break;
    default:
        include 'view/list.php';
}
?>


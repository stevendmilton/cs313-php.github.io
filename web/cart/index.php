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

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    for ($row=0; $row < 10;$row++) {
        $cart[$row][0] = $row;
        $cart[$row][1] = 0;
    }
}

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
    case 'addcart':
        $qty0 = filter_input(INPUT_POST, 'qty0', FILTER_SANITIZE_NUMBER_INT);
        $qty1 = filter_input(INPUT_POST, 'qty1', FILTER_SANITIZE_NUMBER_INT);
        $qty2 = filter_input(INPUT_POST, 'qty2', FILTER_SANITIZE_NUMBER_INT);
        $qty3 = filter_input(INPUT_POST, 'qty3', FILTER_SANITIZE_NUMBER_INT);
        $qty4 = filter_input(INPUT_POST, 'qty4', FILTER_SANITIZE_NUMBER_INT);
        $qty5 = filter_input(INPUT_POST, 'qty5', FILTER_SANITIZE_NUMBER_INT);
        $qty6 = filter_input(INPUT_POST, 'qty6', FILTER_SANITIZE_NUMBER_INT);
        $qty7 = filter_input(INPUT_POST, 'qty7', FILTER_SANITIZE_NUMBER_INT);
        $qty8 = filter_input(INPUT_POST, 'qty8', FILTER_SANITIZE_NUMBER_INT);
        $qty9 = filter_input(INPUT_POST, 'qty9', FILTER_SANITIZE_NUMBER_INT);
        
        if (!empty($qty0)) {
            $cart[0][1] += $qty0;
        }
        if (!empty($qty1)) {
            $cart[1][1] += $qty1;
        }
        if (!empty($qty2)) {
            $cart[2][1] += $qty2;
        }
        if (!empty($qty3)) {
            $cart[3][1] += $qty3;
        }
        if (!empty($qty4)) {
            $cart[4][1] += $qty4;
        }
        if (!empty($qty5)) {
            $cart[5][1] += $qty5;
        }
        if (!empty($qty6)) {
            $cart[6][1] += $qty6;
        }
        if (!empty($qty7)) {
            $cart[7][1] += $qty7;
        }
        if (!empty($qty8)) {
            $cart[8][1] += $qty8;
        }
        if (!empty($qty9)) {
            $cart[9][1] += $qty9;
        }
        $_SESSION['cart'] = $cart;
        
    default:
        include 'view/browse.php';
}
?>


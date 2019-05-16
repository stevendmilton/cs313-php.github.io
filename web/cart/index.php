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
        switch ($row) {
            case "0":
                $cart[$row][2] = "Stapler";
                break;
            case "1":
                $cart[$row][2] = "Printer";
                break;
            case "2":
                $cart[$row][2] = "Tape Dispenser";
                break;
            case "3":
                $cart[$row][2] = "Scotch Tape";
                break;            
            case "4":
                $cart[$row][2] = "Printer Ink";
                break;            
            case "5":
                $cart[$row][2] = "Ream of Paper";
                break;            
            case "6":
                $cart[$row][2] = "Pack of Pens";
                break;            
            case "7":
                $cart[$row][2] = "Markers";
                break;            
            case "8":
                $cart[$row][2] = "Push Pins";
                break;            
            case "9":
                $cart[$row][2] = "Erasers";
                break;    
            default:        
        }
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
    case 'placeorder':
        $conflist = buildConfirmationPage($cart);
        $_SESSION['clientFirstname'] = filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_STRING);
        $_SESSION['clientLastname'] = filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_STRING);
        $_SESSION['clientStreet'] = filter_input(INPUT_POST, 'clientStreet', FILTER_SANITIZE_STRING);
        $_SESSION['clientCity'] = filter_input(INPUT_POST, 'clientCity', FILTER_SANITIZE_STRING);
        $_SESSION['clientState'] = filter_input(INPUT_POST, 'clientState', FILTER_SANITIZE_STRING);
        $_SESSION['clientZip'] = filter_input(INPUT_POST, 'clientZip', FILTER_SANITIZE_STRING);
        $_SESSION['clientEmail'] = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_STRING);
        include "view/confirmation.php";
        $_SESSION = array();
        session_destroy();
        break;
    case 'viewcart':
        var_dump('clientFirstname');
        $prodlist = buildProductsTable($cart);
        include "view/viewcart.php";
        break;
    case 'qty0':
        $qty0 = filter_input(INPUT_POST, 'qty0', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty0)) {
            $cart[0][1] += $qty0;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty1':
        $qty1 = filter_input(INPUT_POST, 'qty1', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty1)) {
            $cart[1][1] += $qty1;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty2':
        $qty2 = filter_input(INPUT_POST, 'qty2', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty2)) {
            $cart[2][1] += $qty2;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty3':
        $qty3 = filter_input(INPUT_POST, 'qty3', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty3)) {
            $cart[3][1] += $qty3;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty4':
        $qty4 = filter_input(INPUT_POST, 'qty4', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty4)) {
            $cart[4][1] += $qty4;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty5':
        $qty5 = filter_input(INPUT_POST, 'qty5', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty5)) {
            $cart[5][1] += $qty5;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty6':
        $qty6 = filter_input(INPUT_POST, 'qty6', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty6)) {
            $cart[6][1] += $qty6;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty7':
        $qty7 = filter_input(INPUT_POST, 'qty7', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty7)) {
            $cart[7][1] += $qty7;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty8':
        $qty8 = filter_input(INPUT_POST, 'qty8', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty8)) {
            $cart[8][1] += $qty8;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'qty9':
        $qty9 = filter_input(INPUT_POST, 'qty9', FILTER_SANITIZE_NUMBER_INT);
        if (!empty($qty9)) {
            $cart[9][1] += $qty9;
        }
        $_SESSION['cart'] = $cart;
        include "view/browse.php";
        break;
    case 'del':
        var_dump($action);
        $row = filter_input(INPUT_GET, 'delid', FILTER_SANITIZE_NUMBER_INT);
        var_dump($row);
        $cart[$row][1]=0;
        $cart[$row][2]="";
        $prodlist = buildProductsTable($cart);
        $_SESSION['cart'] = $cart;
        include "view/viewcart.php";
        break;
    default:
        include 'view/browse.php';
}
?>


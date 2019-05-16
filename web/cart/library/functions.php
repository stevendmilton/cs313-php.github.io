<?php

//common functions

function buildProductsTable($cart) {
    $prodList = '<table>';
    $prodList .= '<thead>';
    $prodList .= '<tr class="tblTitle"><th>Product Name</th><th>&nbsp;Qty</th><th>&nbsp;</th></tr>';
    $prodList .= '</thead>';
    $prodList .= '<tbody>';
    foreach ($cart as $row) {
        if ($row['1']>'0'){
            $prodList .= "<tr class='tblRow'><td>" . $row['2'] . "</td>";
            $prodList .= "<td>" . $row['1'] . "</td>";
            $cartid = $row['0'];
            $prodList .= "<td><a href='index.php?action=del&delid=" . $cartid . " name='delid' title='Click to delete'>Delete</a></td></tr>";
        }
    }
    $prodList .= '</tbody></table>';
    return $prodList;
}

function buildConfirmationPage($cart) {
    $confitems = '<table>';
    $confitems .= '<thead>';
    $confitems .= '<tr class="tblTitle"><th>Product Name</th><th>&nbsp;Qty</th></tr>';
    $confitems .= '</thead>';
    $confitems .= '<tbody>';
    foreach ($_SESSION['cart'] as $row) {
        if ($row['1']>'0'){
            $confitems .= "<tr class='tblRow'><td>" . $row['2'] . "</td>";
            $confitems .= "<td>" . $row['1'] . "</td></tr>";
        }
    }
    $confitems .= '</tbody></table>'; 
    return $confitems;
}


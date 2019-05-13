<?php

//common functions

function buildProductsTable($cart) {
    $prodList = '<table>';
    $prodList .= '<thead>';
    $prodList .= '<tr class="tblTitle"><th>Product Name</th><td>&nbsp;</td><td>&nbsp;</td></tr>';
    $prodList .= '</thead>';
    $prodList .= '<tbody>';
    for ($row=0;$row<10;row++) {
        if ($item[$row][1]>0){
        $prodList .= "<tr class='tblRow'><td>$cart[$row][2]</td>";
        $prodList .= "<tr class='tblRow'><td>$cart[$row][1]</td>";
        $prodList .= "<td><a href='index.php?action=del&id=$cart[$row][0]' title='Click to delete'>Delete</a></td></tr>";
        }
    }
    $prodList .= '</tbody></table>';
    return $prodList;
}



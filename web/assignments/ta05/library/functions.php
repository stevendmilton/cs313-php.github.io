<?php

//common functions

function buildScripturesTable($list) {
    $slist = '<table><tbody>';
    foreach ($list as $row) {
        $slist .= "<tr class='tblRow'><td><span class='bold'>" . $row['book'] . " " . $row['chapter'];
        $slist .= ":" . $row['verse'] . "</span> - " . "&quot;" . $row['content'] . "&quot;</td>";
    }
    $slist .= '</tbody></table>';
    return $slist;
}
?>
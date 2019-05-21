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

function buildScriptureRefs($list) {
    $slist = '<table><tbody>';
    foreach ($list as $row) {
        $slist .= "<tr class='tblRow'><td><a href='index.php?action=detail&id=" . $row['id'];
        $slist .= "' class='bold'>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</a>" . "</td>";
    }
    $slist .= '</tbody></table>';
    return $slist;
}

function DisplayContent($content) {

    $slist = '<table><th>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</th><tbody>';
    foreach ($content as $row) {
        $slist .= "<tr class='tblRow'><td>" . $row['content'] . "</td>";
    }
    $slist .= '</tbody></table>';
    return $slist;
}
?>
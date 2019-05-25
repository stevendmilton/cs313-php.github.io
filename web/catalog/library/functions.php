<?php

//common functions

function buildResultsTable($list) {
    $slist = '<table><th>Author</th><th>Title</th><th>Description</th><tbody>';
    foreach ($list as $row) {
        $slist .= "<tr class='tblRow'>";
        $slist .= "<td>" . $row['name'] . "</td>";
        $slist .= "<td>" . $row['title'] . "</td>";
        $slist .= "<td>" . $row['description'] . "</td>";
    }
    $slist .= '</tbody></table>';
    return $slist;
}

function buildAuthorDropDown($list) {
    $slist = '<select id = "bookAuthor" required><option value="" disabled selected>Select Author</option>';
    foreach ($list as $row) {
        $slist .= "<option value = '" . $row['authorId'];
        $slist .= "'>" . $row['name'] . "</option>";
    }
    $slist .= "</select>";
    return $slist;
}
?>

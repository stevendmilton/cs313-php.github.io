<?php

//common functions

function buildResultsTable($list) {
    $slist = '<div id="atable"><div id="atable-scroll"><table><thead><tr>';
    $slist .= '<th><span class="thtext">Author</span></th>';
    $slist .= '<th><span class="thtext">Title</span></th>';
    $slist .= '<th><span class="thtext">Description</span></th>';
    $slist .= '</tr></thead><tbody>';
    foreach ($list as $row) {
        $slist .= "<tr class='tblRow'>";
        $slist .= "<td>" . $row['name'] . "</td>";
        $slist .= "<td>" . $row['title'] . "</td>";
        $slist .= "<td>" . $row['description'] . "</td></tr>";
    }
    $slist .= '</tbody></table></div></div>';
    return $slist;
}

function buildAuthorTable($list) {
    $slist = '<div id="atable"><div id="atable-scroll"><table><thead><tr><th>';
    $slist .= '<span class="thtext">Author</span></th></tr></thead><tbody>';
    foreach ($list as $row) {
        $slist .= "<tr><td>" . $row['name'] . "</td></tr>";
    }
    $slist .= '</tbody></table></div></div>';
    return $slist;
}

function buildAuthorDropDown($list) {
    $slist = '<select name="bookAuthor" required><option value="" disabled selected>Select Author</option>';
    foreach ($list as $row) {
        $slist .= "<option value = '" . $row['authorid'];
        $slist .= "'>" . $row['name'] . "</option>";
    }
    $slist .= "</select>";
    return $slist;
}
?>

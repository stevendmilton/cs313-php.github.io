<?php
    // Data access model

 function getScriptures() {
    // Create a connection object from the main connection function
    $db = dbConnect();
    // The SQL statement to be used with the database
    $sql = 'SELECT book,chapter,verse,content FROM scriptures order by book,chapter,verse';
    // The next line creates the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next line runs the prepared statement
    $stmt->execute();
    // The next line gets the data from the database and 
    // stores it as an array in the $products variable
    $results = $stmt->fetchAll();
    // The next line closes the interaction with the database
    $stmt->closeCursor();
    // The next line sends the array of data back to where the function
    // was called (this should be the controller)
    return $results;
 }

 function findScriptures($sqlbook) {
    // Create a connection object from the main connection function
    $db = dbConnect();
    // The SQL statement to be used with the database
    $sql = 'SELECT id,book,chapter,verse,content FROM scriptures where book=:sqlbook order by chapter,verse';
    // The next line creates the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // Replace the variable with the actual value in the select statement
    $stmt->bindValue(':sqlbook', $sqlbook, PDO::PARAM_STR);
    // The next line runs the prepared statement
    $stmt->execute();
    // The next line gets the data from the database and 
    // stores it as an array in the $products variable
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // The next line closes the interaction with the database
    $stmt->closeCursor();
    // The next line sends the array of data back to where the function
    // was called (this should be the controller)
    return $results;
 }

 function GetScriptureById($sqlid) {
    // Create a connection object from the main connection function
    $db = dbConnect();
    // The SQL statement to be used with the database
    $sql = 'SELECT book,chapter,verse,content FROM scriptures where id=:sqlid';
    // The next line creates the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // Replace the variable with the actual value in the select statement
    $stmt->bindValue(':sqlid', $sqlid, PDO::PARAM_INT);
    // The next line runs the prepared statement
    $stmt->execute();
    // The next line gets the data from the database and 
    // stores it as an array in the $products variable
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // The next line closes the interaction with the database
    $stmt->closeCursor();
    // The next line sends the array of data back to where the function
    // was called (this should be the controller)
    return $results;
 }
 ?>

<?php
    // Data access model

function listAllBooks() {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT title,name,description FROM books,authors where ';
   $sql .= 'books.authorId=authors.authorId order by title';
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
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
   
function findAuthorTitle($author,$title) {
    // Create a connection object from the main connection function
    $db = dbConnect();
    // The SQL statement to be used with the database
    $sql = 'SELECT title,name,description FROM books,authors where ';
    $sql .= 'books.authorId=authors.authorId and title like ? and name like ? order by title';
    // The next line creates the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // Replace the variable with the actual value in the select statement
    $params = array("%$title%","%$author%");
    // The next line runs the prepared statement
    $stmt->execute($params);
    // The next line gets the data from the database and 
    // stores it as an array in the $products variable
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // The next line closes the interaction with the database
    $stmt->closeCursor();
    // The next line sends the array of data back to where the function
    // was called (this should be the controller)
    return $results;
}

function findAuthor($author) {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT title,name,description FROM books,authors where ';
   $sql .= 'books.authorId=authors.authorId and name like ? order by title';
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // Replace the variable with the actual value in the select statement
   $params = array("%$author%");
   // The next line runs the prepared statement
   $stmt->execute($params);
   // The next line gets the data from the database and 
   // stores it as an array in the $products variable
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // The next line closes the interaction with the database
   $stmt->closeCursor();
   // The next line sends the array of data back to where the function
   // was called (this should be the controller)
   return $results;
}

function getAuthor($author) {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT authorid,name FROM authors where name = :author';
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // Replace the variable with the actual value in the select statement
   $stmt->bindValue(':author', $author, PDO::PARAM_STR);
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

function getAuthorTitle($author,$title) {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT books.title FROM books,authors where authors.name = :author and books.title = :title';
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // Replace the variable with the actual value in the select statement
   $stmt->bindValue(':author', $author, PDO::PARAM_STR);
   $stmt->bindValue(':title', $title, PDO::PARAM_STR);
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

function listAuthors() {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT authorId,name FROM authors order by name';
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
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

function findTitle($title) {
   // Create a connection object from the main connection function
   $db = dbConnect();
   // The SQL statement to be used with the database
   $sql = 'SELECT title,name,description FROM books,authors where ';
   $sql .= 'books.authorId=authors.authorId and title like ? order by title';
   $params = array("%$title%");
   // The next line creates the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next line runs the prepared statement
   $stmt->execute($params);
   // The next line gets the data from the database and 
   // stores it as an array in the $products variable
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // The next line closes the interaction with the database
   $stmt->closeCursor();
   // The next line sends the array of data back to where the function
   // was called (this should be the controller)
   return $results;
}

function insertBook($title,$desc,$authorId) {
    // Create a connection object using the acme connection function
    $db = dbConnect();
    // The SQL statement
    $comments = ' ';
    $sql = 'INSERT INTO books (authorId, title, description, dateAdded, dateModified)
        VALUES (:authorId,:title,:desc,:dateAdded,:dateModified)';
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':authorId', $authorId, PDO::PARAM_INT);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':desc', $desc, PDO::PARAM_STR);
    $stmt->bindValue(':dateAdded', date('Y-m-d'));
    $stmt->bindValue(':dateModified', date('Y-m-d'));
    // Insert the date
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

function insertAuthor($authorName) {
   // Create a connection object using the acme connection function
   $db = dbConnect();
   // The SQL statement
   $comments = ' ';
   $sql = 'INSERT INTO authors (name, dateAdded, dateModified)
       VALUES (:authorName,:dateAdded,:dateModified)';
   // Create the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next four lines replace the placeholders in the SQL
   // statement with the actual values in the variables
   // and tells the database the type of data it is
   $stmt->bindValue(':authorName', $authorName, PDO::PARAM_STR);
   $stmt->bindValue(':dateAdded', date('Y-m-d'));
   $stmt->bindValue(':dateModified', date('Y-m-d'));
   // Insert the data
   $stmt->execute();
   // Ask how many rows changed as a result of our insert
   $rowsChanged = $stmt->rowCount();
   // Close the database interaction
   $stmt->closeCursor();
   // Return the indication of success (rows changed)
   return $rowsChanged;
}

function insertUser($userName,$userDisplayName,$userPassword) {
   // Create a connection object using the acme connection function
   $db = dbConnect();
   // The SQL statement
   $comments = ' ';
   $sql = 'INSERT INTO users (userName, displayName, password, userAccessRights, dateAdded, dateModified)
       VALUES (:userName,:userDisplayName,:userPassword,:userAccessRights,:dateAdded,:dateModified)';
   // Create the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next four lines replace the placeholders in the SQL
   // statement with the actual values in the variables
   // and tells the database the type of data it is
   $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
   $stmt->bindValue(':userDisplayName', $userDisplayName, PDO::PARAM_STR);
   $stmt->bindValue(':userPassword', $userPassword, PDO::PARAM_STR);
   $stmt->bindValue(':userAccessRights', 'Admin');
   $stmt->bindValue(':dateAdded', date('Y-m-d'));
   $stmt->bindValue(':dateModified', date('Y-m-d'));
   // Insert the data
   $stmt->execute();
   // Ask how many rows changed as a result of our insert
   $rowsChanged = $stmt->rowCount();
   // Close the database interaction
   $stmt->closeCursor();
   // Return the indication of success (rows changed)
   return $rowsChanged;
}

function deleteAuthor($authorId) {
   // Create a connection object using the acme connection function
   $db = dbConnect();
   // The SQL statement
   $sql = 'delete from authors where authorId = :authorId';
   // Create the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next four lines replace the placeholders in the SQL
   // statement with the actual values in the variables
   // and tells the database the type of data it is
   $stmt->bindValue(':authorId', $authorId, PDO::PARAM_INT);
   // Delete the data
   $stmt->execute();
   // Ask how many rows changed as a result of our delete
   $rowsChanged = $stmt->rowCount();
   // Close the database interaction
   $stmt->closeCursor();
   // Return the indication of success (rows changed)
   return $rowsChanged;
}

function deleteUser($userId) {
   // Create a connection object using the acme connection function
   $db = dbConnect();
   // The SQL statement
   $sql = 'delete from users where userId = :userId';
   // Create the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next four lines replace the placeholders in the SQL
   // statement with the actual values in the variables
   // and tells the database the type of data it is
   $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
   // Delete the data
   $stmt->execute();
   // Ask how many rows changed as a result of our delete
   $rowsChanged = $stmt->rowCount();
   // Close the database interaction
   $stmt->closeCursor();
   // Return the indication of success (rows changed)
   return $rowsChanged;
}

function deleteBook($bookId) {
   // Create a connection object using the acme connection function
   $db = dbConnect();
   // The SQL statement
   $sql = 'delete from books where bookId = :bookId';
   // Create the prepared statement using the acme connection
   $stmt = $db->prepare($sql);
   // The next four lines replace the placeholders in the SQL
   // statement with the actual values in the variables
   // and tells the database the type of data it is
   $stmt->bindValue(':bookId', $bookId, PDO::PARAM_INT);
   // Delete the data
   $stmt->execute();
   // Ask how many rows changed as a result of our delete
   $rowsChanged = $stmt->rowCount();
   // Close the database interaction
   $stmt->closeCursor();
   // Return the indication of success (rows changed)
   return $rowsChanged;
}
?>

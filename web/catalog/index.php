<?php

/*
 * CS313 TA05 Main Controller
 */

// Create or access a Session
session_start();

// Set the loggedin session variable to false
//if (!isset($_SESSION['loggedin'])) {
 $_SESSION['loggedin'] = FALSE;
//}

// Get the database connection file
require_once 'library/connections.php';

// Get the miscellaneous functions file
require_once 'library/functions.php';

// Get the miscellaneous functions file
require_once 'model/model.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case 'find':
        $author = filter_input(INPUT_POST, 'srcAuthor', FILTER_SANITIZE_STRING);
        $title = filter_input(INPUT_POST, 'srcTitle', FILTER_SANITIZE_STRING);
        if(empty($author) && empty($title)){
            $_SESSION['message'] = 'Must include one search field';
            include '../view/main.php';
            exit; 
        }
        if(!empty($author) && !empty($title)) {
            $searchresults = findAuthorTitle($author,$title);
        } else {
            if(!empty($author)){
                $searchresults = findAuthor($author);
            } else {
                $searchresults = findTitle($title);
            }
        }
        $results = buildResultsTable($searchresults);
        include 'view/main.php';
        break;
    case 'home':
        include 'view/main.php';
        break;
    case 'authors':
        include 'view/authors.php';
        break;
    case 'addauthor':
        $authorName = filter_input(INPUT_POST, 'authorName', FILTER_SANITIZE_STRING);
        if(!empty($authorName)) {
        $insOutcome = insertAuthor($authorName);
            if($insOutcome === 1){
                $_SESSION['message'] = "$authorName has successfully been added";        
            } else {
                $_SESSION['message'] = "$authorName could not be added.  Please try again.";
            }
        } else {
            $_SESSION['message'] = 'Please provide author name.';
            header('location: index.php?action=authors');
            exit; 
        }
        include 'view/authors.php';
        break;
    case 'deleteauthor':
        $authorId = filter_input(INPUT_POST, 'authorId', FILTER_SANITIZE_INT);
        $authorName = filter_input(INPUT_POST, 'authorName', FILTER_SANITIZE_STRING);
        $delOutcome = deleteAuthor($authorId);
        if($delOutcome === 1){
            $_SESSION['message'] = "$authorName has successfully been deleted";        
        } else {
            $_SESSION['message'] = "$authorName could not be deleted.  Please try again.";
        }
        include 'view/authors.php';
        break;
    case 'books':
        $authors = listAuthors();
        $authorList = buildAuthorDropDown($authors);
        include 'view/books.php';
        break;
    case 'addbook':
        $bookTitle = filter_input(INPUT_POST, 'bookTitle', FILTER_SANITIZE_STRING);
        $bookDesc = filter_input(INPUT_POST, 'bookDesc', FILTER_SANITIZE_STRING);
        $authorId = filter_input(INPUT_POST,'bookAuthor', FILTER_SANITIZE_STRING);
        var_dump($bookTitle);
        var_dump($bookDesc);
        var_dump(authorId);
        if(empty($bookTitle) || empty($bookDesc) || empty($authorId)){
            $_SESSION['message'] = 'Please provide information for all empty form fields.';
            header('location: index.php?action=books');
            exit; 
        }
        $insOutcome = insertBook($bookTitle,$bookDesc,$authorId);
        if($insOutcome === 1){
            $_SESSION['message'] = "$bookTitle has successfully been added";        
        } else {
            $_SESSION['message'] = "$bookTitle could not be added.  Please try again.";
        }
        include 'view/books.php';
        break;
    case 'deletebook':
        $bookId = filter_input(INPUT_POST, 'bookId', FILTER_SANITIZE_INT);
        $bookName = filter_input(INPUT_POST, 'bookName', FILTER_SANITIZE_STRING);
        $delOutcome = deletebook($bookId);
        if($delOutcome === 1){
            $_SESSION['message'] = "$bookName has successfully been deleted";        
        } else {
            $_SESSION['message'] = "$bookName could not be deleted.  Please try again.";
        }
        include 'view/books.php';
        break;
    default:
            include 'view/main.php';
}
?>


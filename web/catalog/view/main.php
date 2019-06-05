<!DOCTYPE html>
<html lang='en-us'>
<head>
    <meta charset="utf-8">
    <title>Main | Library</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Main Library Page">
</head>

 <body>
     <div id="mainContent">
    <header>
        <h1>Library Resources</h1>
    </header>
    <nav>
        <?php include "common/nav.php";?>  
    </nav>
    <main> 
        <h2>Find Books</h2>
        <?php
            if (isset($_SESSION['message'])) {
                echo "<h2 class='results'>" . $_SESSION['message'] . "</h2>";
                unset($_SESSION['message']);
            }
        ?>
        <form action="index.php" method="post">
            <legend>Enter Search Criteria (partial matches allowed/case sensitive)</legend>
            <ol>
                <li>
                    <label for="srcTitle">Title:</label>
                    <input type="text" name="srcTitle" id="srcTitle">
                </li>
                <li>
                    <label for="srcAuthor">Author:&#9;</label>
                    <input type="text" name="srcAuthor" id="srcAuthor">
                </li>
            <?php if (isset($results)){ echo $results; } ?>
            <button type="submit" name='action' class='registerbtn' value="find">Search</button>
        </form>
    </main>
    <footer>
        <?php include "common/footer.php";?>  
    </footer>
    </div>
 </body>
</html>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Library | Authors</title>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Steven Milton">
        <meta name="description" content="The Library Author Maintenance Screen">
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
                <h2>Author Maintenance</h2>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<h2 class='results'>" . $_SESSION['message'] . "</h2>";
                    unset($_SESSION['message']);
                }
                ?>
                <form id="authorentry" method="post" action="/web/catalog/index.php">
                    <legend>Enter Author Information</legend>
                    <ol>
                        <li>
                            <label for="authorName" class="invlabel" >Author name</label>
                            <input type="text" id="authorName" name="authorName" <?php if(isset($authorName)){echo "value='$authorName'";}  ?> required>
                        </li>
                    </ol>
                    <input type="submit" name="submit" class="registerbtn" value="Add Author">
                    <input type="hidden" name="action" value="addauthor">
                </form>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT']."/web/catalog/common/footer.php";?>  
            </footer>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Library | Books</title>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Steven Milton">
        <meta name="description" content="The Library Book Maintenance Screen">
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
                <h2>Book Maintenance</h2>
                <p>All fields are required.</p>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<h2 class='results'>" . $_SESSION['message'] . "</h2>";
                    unset($_SESSION['message']);
                }
                ?>
                <form id="bookentry" method="post" action="index.php">
                    <legend>Enter Book Information</legend>
                    <ol>
                        <li>
                            <label for="bookTitle" class="invlabel" >Title:</label>
                            <input type="text" id="bookTitle" name="bookTitle" <?php if(isset($bookTitle)){echo "value='$bookTitle'";}  ?>>
                        </li>
                        <li>
                            <label for="bookAuthor" class="invlabel">Author:</label>
                            <?php echo $authorList; ?>
                            <!--<input type="text" id="bookAuthor" name="bookAuthor" <?php if(isset($bookAuthor)){echo "value='$bookAuthor'";}  ?>>-->
                        </li>
                        <li>
                            <label for="bookDesc" class="invlabel">Description:</label>
                            <textarea id="bookDesc" name="bookDesc" rows = "4" cols = "40"><?php if(isset($bookDesc)){echo $bookDesc;}?></textarea>
                        </li>
                    </ol>
                    <button type="submit" name="action" class="registerbtn" value="addbook">Add Book</button>
                    <button type="submit" name="action" class="registerbtn" value="updbook">Modify Information</button>
                    <button type="submit" name="action" class="registerbtn" value="delbook">Delete Book</button>
                </form>
            </main>
            <footer>
                <?php include "common/footer.php";?>
            </footer>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang='en-us'>
<head>
    <meta charset="utf-8">
    <title>Scriptures Details</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Scripture Detail Page">
</head>

 <body>
    <header>
        <h1>Scripture Resources</h1>
    </header>
    <main> 
        <h2>Scripture Detail</h2>
        <form action="index.php" method="post">
            <?php echo $results ?>
            <button type="submit" name='action' value="home">Home Page</button>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Team 1 &#9733; Idaho &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
 </body>
</html>

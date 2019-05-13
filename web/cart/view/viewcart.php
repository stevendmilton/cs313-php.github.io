<!DOCTYPE html>
<html lang='en-us'>
<head>
    <meta charset="utf-8">
    <title>View Cart</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="View Cart Page">
</head>

 <body>
    <header>
        <h1>Milton's Office Emporium</h1>
        <h2>Only The Best!</h2>
        <?php 
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        } else {
            for ($row=0; $row < 10;$row++) {
                $cart[$row][0] = $row;
                $cart[$row][1] = 0;
                $cart[$row][2] = "";
            }
        } ?>
    </header>
    <main> 
        <h2>Shopping Cart</h2>
        <form action="index.php" method="post">
            <?php echo $prodlist ?>
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Steven D. Milton &#9733; Florida &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
 </body>
</html>

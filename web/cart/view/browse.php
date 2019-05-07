<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Browse Items</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Steven Milton's Browse Item Page">
<head>
<body>
    <header>
        <h1>Browse Items</h1>
    </header>
    <main>
        <form action="index.php" method="post">
            "Stapler" <input type="number" name='qty1' value='Qty'/>
            "Printer" <input type="number" name='qty2' value='Qty'/>
            "Tape Dispenser" <input type="number" name='qty3' value='Qty'/>
            "Scotch Tape" <input type="number" name='qty4' value='Qty'/>
            "Printer Ink" <input type="number" name='qty5' value='Qty'/>
            "Ream of Paper" <input type="number" name='qty6' value='Qty'/>
            "Pack of Pens" <input type="number" name='qty7' value='Qty'/>
            "Markers" <input type="number" name='qty8' value='Qty'/>
            "Push Pins" <input type="number" name='qty9' value='Qty'/>
            "Erasers" <input type="number" name='qty10' value='Qty'/>
            <input type="submit" name="submit" value="Submit"/>
            <input type="hidden" name="action" value="addcart">
        </form> 
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Steven D. Milton &#9733; Florida &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
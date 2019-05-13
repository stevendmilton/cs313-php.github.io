<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Browse Items</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Steven Milton's Browse Item Page">
<head>
<body id="browsepage">
    <header>
        <h1>Milton's Office Emporium</h1>
        <h2>Only The Best!</h2>
        <h3>Select Item Quantities</h3>
    </header>
    <main>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Qty in Cart</th>
                </tr>
                <tr>
                    <td>Stapler</td>
                    <td><input type="number" name='qty0' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][0][1]; ?></td>
                </tr>
                <tr>
                    <td>Printer</td>
                    <td><input type="number" name='qty1' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][1][1]; ?></td>
                </tr>
                <tr>
                    <td>Tape Dispenser</td>
                    <td><input type="number" name='qty2' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][2][1]; ?></td>
                </tr>
                <tr>
                    <td>Scotch Tape</td>
                    <td><input type="number" name='qty3' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][3][1]; ?></td>
                </tr>
                <tr>
                    <td>Printer Ink</td>
                    <td><input type="number" name='qty4' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][4][1]; ?></td>
                </tr>
                <tr>
                    <td>Ream of Paper</td>
                    <td><input type="number" name='qty5' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][5][1]; ?></td>
                </tr>
                <tr>
                    <td>Pack of Pens</td>
                    <td><input type="number" name='qty6' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][6][1]; ?></td>
                </tr>
                <tr>
                    <td>Markers</td>
                    <td><input type="number" name='qty7' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][7][1]; ?></td>
                </tr>
                <tr>
                    <td>Push Pins</td>
                    <td><input type="number" name='qty8' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][8][1]; ?></td>
                </tr>
                <tr>
                    <td>Erasers</td>
                    <td><input type="number" name='qty9' min = 0 max = 9999></td>
                    <td><?php echo $_SESSION['cart'][9][1]; ?></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="button1" value="Add to Order"/>
            <input type="hidden" name="action" value="addcart">
            <input type="submit" name="viewcart" class="button2" value="View Cart"/>
            <input type="hidden" name="action" value="viewcart">
        </form> 
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Steven D. Milton &#9733; Florida &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Order confirmation page">
<head>
<body id="ambody">
    <header>
        <h1>Order Confirmation</h1>
    </header>
    <main id="confitem">
        <h3>Items Ordered</h3>
        <?php echo $conflist;?>
        <hr>
        <h3 id="shipto">Ship To:</h3>
        <div id="container">
            <p class="confirm"><?php echo $_SESSION['clientFirstname'] . ' ' . $_SESSION['clientLastname'];?></p>
            <p class="confirm"><?php echo $_SESSION['clientStreet'];?></p>
            <p class="confirm"><?php echo $_SESSION['clientCity'] . ', ' . $_SESSION['clientState'] . ' ' . $_SESSION['clientZip'];?></p>
            <p class="confirm"><?php echo $_SESSION['clientEmail'];?></p>
        </div>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Steven D. Milton &#9733; Florida &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
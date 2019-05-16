<!DOCTYPE html>
<html lang="en-us">

  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Checkout Page">
  </head>

  <body>

    <div id="mainContent">
      <header>
        <?php $cart = $_SESSION['cart']?>
        <h1>Milton's Office Emporium</h1>
        <h2>Only The Best!</h2>
      </header>
      <main>
        <h3>Address Information</h3>
        <form id="shipinfo" action="index.php" method="post">
          <fieldset>
            <label for="clientFirstname" class="invlabel" >First Name:</label>
            <input type="text" name="clientFirstname" id="clientFirstname" required><br/>
            <label for="clientLastname" class="invlabel">Last Name:</label>
            <input type="text" name="clientLastname" id="clientLastname" required><br/>
            <label for="clientStreet" class="invlabel">Street:</label>
            <input type="text" name="clientStreet" id="clientStreet" required><br/>
            <label for="clientCity" class="invlabel">City:</label>
            <input type="text" name="clientCity" id="clientCity" required><br/>
            <label for="clientState" class="invlabel">State:</label>
            <input type="text" name="clientState" id="clientState" required><br/>
            <label for="clientZip" class="invlabel">Zip:</label>
            <input type="text" name="clientZip" id="clientZip" required><br/>
            <label for="clientEmail" class="invlabel">Email Address:</label>
            <input type="email" id="clientEmail" name="clientEmail" required><br/>
            <button type="submit" name='action' value="placeorder">Complete Order</button>
            <button type="submit" name='action' value="viewcart">View Cart</button>
          </fieldset>
        </form>
      </main>
      <footer>
        <? include $_SERVER['DOCUMENT_ROOT']."/acme/common/footer.php";?>
      </footer>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en-us">

  <head>
    <meta charset="utf-8">
    <title>ACME | Home</title>
    <link rel="stylesheet" media="screen" href="/acme/css/screen2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="The ACME Company website template">
  </head>

  <body>

    <div id="mainContent">
      <header>
        <? include $_SERVER['DOCUMENT_ROOT']."/acme/common/header.php";?>
      </header>
      <nav>
        <? include $_SERVER['DOCUMENT_ROOT']."/acme/common/nav.php";?>
      </nav>
      <main>
        <h1 id="pg505h1">Server Error</h1>
        <p id="pg505p">Sorry, the server experienced a problem</p>
      </main>
      <footer>
        <? include $_SERVER['DOCUMENT_ROOT']."/acme/common/footer.php";?>
      </footer>
    </div>
</body>

</html>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>BYUI | CS 313 | Steven D. Milton | About Me</title>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steven Milton">
    <meta name="description" content="Steven Milton's About Me Page">
<head>
<body id="ambody">
    <header>
        <h1>About Me</h1>
        <img src="images/family.png" alt="Steven Milton's family">
    </header>
    <main id="ammain">
        <form action="index.php" method="get">
            <input type="submit" name="home" value="Home"/>
            <input type="hidden" name="action" value="home">
        </form> 
        <h2>Who I Am</h2>
        <p>I am currently a student at BYUI.  As you can see, I enjoy 
        golf and love living in Boynton Beach, Florida where I can 
        golf all year round if I choose. I decided to go back to school
        after being let go from my last job. I chose to go into 
        web development as I am enamored with the internet in general
        and wanted to understand more about working with it.</p>
        <p>I married when I was 44 to my wife with three children.  
        Our children now have all left the nest and my wife and I 
        are enjoying the grandchild.  We hope to serve missions as a 
        couple when we both retire.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> &#9733; Steven D. Milton &#9733; Florida &#9733; <a href="http://www.byui.edu/online">BYU-Idaho Online Learning</a></p>
    </footer>
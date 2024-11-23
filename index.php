<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My PHP Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h2>About This Website</h2>
        <p>This is a simple website created using PHP and styled with CSS. The goal is to demonstrate basic web development concepts.</p>
        <p>Today's date is: <strong><?php echo date('l, F j, Y'); ?></strong></p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Simple Website</p>
    </footer>
</body>
</html>

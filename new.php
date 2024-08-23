<?php
// index.php

// Set the page title
$pageTitle = "Home Page";

// Include the header file
include('header.php');
?>

<!-- Main Content -->
<div class="container">
    <h1>Welcome to the Home Page!</h1>
    <p>This is a simple home page created using PHP.</p>
    
    <p>Click the button below to learn more:</p>
    <a href="about.php" class="btn">Learn More</a>
</div>

<?php
// Include the footer file
include('footer.php');
?>

<!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>


<!-- footer -->
<footer>
        <p>&copy; 2024 Your Website. All Rights Reserved.</p>
    </footer>
</body>
</html>



body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    text-align: center;
}

header nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin-right: 15px;
}

header nav ul li a {
    color: white;
    text-decoration: none;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}



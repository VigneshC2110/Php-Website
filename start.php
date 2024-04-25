<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<style>
    /*--------------- CSS for Navbar ---------------------------*/
body {
    margin: 0;
}

.navbar {
    background-color: black;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    height: 60px;
    align-items: center;
}

.menu {
    color: white;
    text-align: center;
    padding: 20px;
    text-decoration: none;
}

.menu:hover {
    background-color: #ddd;
    color: black;
}

.signup-btn:hover {
    background-color: #ddd;
    color: black;
}

.right-corner {
    margin-right: 20px;
}

.signup-btn {
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    width: 2px;
    background-color: #007bff; 
    border: none;
    height: 20px;
    border-radius: 5px;
    cursor: pointer;
}

.signup-btn:hover {
    background-color: #0056b3;
}


</style>

<!--------------------- Navbar ---------------------->

<div class="navbar">
    <div class="nav-menus">
        <a class="menu" href="dashboard.php">Dashboard</a>
        <a class="menu" href="about.php">About</a>
        <a class="menu" href="contact.php">Contact Us</a>
        <a class="menu" href="terms.php">Terms and Conditions</a>
        <a class="menu" href="blog.php">Blog</a>
    </div>
    <div class="right-corner">
        <a class="signup-btn" href="#">Sign Up</a>
    </div>
</div>

</body>
</html>

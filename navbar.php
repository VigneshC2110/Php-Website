
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
</head>
<body>
<style>

    body {
        margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    height: 60px;
    align-items: center;
    box-shadow: 0px -1px 15px -1px black;
}

.menu {
    text-align: center;
    padding: 20px;
    text-decoration: none;
}


.menu:hover {
    background-color: #ddd;
    color: black;
}

.signup-btn:hover {
    background-color: #482869;
}

.right-corner {
    margin-right: 20px;
}

.signup-btn {
    text-align: center;
    padding: 14px 20px;
    color: white;
    text-decoration: none;
    width: 2px;
    background-color: #7F00FF; 
    border: none;
    height: 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}


#signup-form {
    display: none;
    margin-top: 20px;
}

#signup-form input {
    display: block;
    margin-bottom: 10px;
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

#signup-form button {
    background-color: #007bff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#signup-form button:hover {
    background-color: #0056b3;
}
a{
    color: black;
}
img{
    width: 40px;
    height: 40px;
    margin-top: 9px;
    border-radius: 20px;
}
span{
    width: 10%;
    display: flex;
}

</style>


<div class="navbar">
    <div class="nav-menus">
        <a class="menu" href="index.php">Dashboard</a>
        <a class="menu" href="about.php">About</a>
        <a class="menu" href="contact.php">Contact Us</a>
        <a class="menu" href="terms.php">Terms and Conditions</a>
        <a class="menu" href="blog.php">Blog</a>
    </div>

    <div class="right-corner">

    <?php 
        if($_SESSION['name']){
            echo (" <span> <a href='logout.php' class='menu'>Logout</a>  <img src='pro.webp' ></span>");
        }else{
      echo("<a class='signup-btn' href='signup.php' id='signup-toggle'>Sign Up</a>");

        }
    ?>
    </div>
</div>


</body>
</html>
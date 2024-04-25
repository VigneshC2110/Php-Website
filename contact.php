<?php 

require("navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <style>

body, h1, h2, p, ul, li, form, label, input, textarea, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

header {
    margin-top: 5px;
    color: black;
    text-align: center;
    padding: 20px 0;
}

main {
    padding: 20px;
}
form {
    display: flex;
    justify-content: center;
}
.center {
    width: 43%;
}
h3 {
    margin-left: 49px;
    color: #454545;
}
    </style>
    <header>
        <h1>Contact Us</h1>
    </header>
    
    <main>
        <section class="contact-form">
            <form >
                <div class="center">
                <label for="name">My Name:</label>
                <h3>Vignesh</h3>

                <label for="email">My Email:</label>
                <h3>vigneshcdckap@gmail.com</h3>

                <label for="message">My Goal:</label>
                <h3>"Setting sail on a journey of discovery, with every step unveiling new wonders, embracing the beauty of wanderlust."</h3>
                </div>
            </form>
        </section>
    </main>


</body>
</html>

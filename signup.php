    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<style>
body {
    font-family: "Montserrat", sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

#signup-form {
    width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

#signup-form h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

#signup-form input[type="text"],
#signup-form input[type="email"],
#signup-form input[type="password"] {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

#signup-form span.error {
    display: block;
    height: 20px;
    color: red;
    margin-top: 5px;
}

#signup-form button[type="submit"] {
    width: 100%;
    padding: 15px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#signup-form button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
<?php

$username = $email = $password = $confirm_password = '';
$userNameError = $emailError = $passwordError = $confirmPasswordError = '';

function validateRequired($value)
{
    if (trim($value) == '') {
        return 'This is required';
    }
    return false;
}

function validateEmail($value)
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return 'Enter valid email';
    }
    return false;
}

function validatePasswordLength($value, $minLength = 6) {
    if (strlen($value) < $minLength) {
        return 'Password must be at least ' . $minLength . ' characters';
    }
    return false;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $userNameError = validateRequired($username);

    $email = $_POST['email'];
    $emailError = validateEmail($email);

    $password = $_POST['password'];
    $passwordError = validateRequired($password);
    $passwordError = validatePasswordLength($password);

    $confirm_password = $_POST['confirm_password'];
    $confirmPasswordError = validateRequired($password);
    $confirmPasswordError = validatePasswordLength($password);

    if ($confirm_password != $password) {
        $confirmPasswordError = 'Passwords do not match';
    }

    if ($userNameError || $emailError || $passwordError || $confirmPasswordError) {
        echo "<script>alert('Error')</script>";
    } 
    else {
        $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "Php task");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
 
        $password=md5($password);
        $sql_insert = "INSERT INTO Signup (Username,Mailid, Password)
                VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "<script>alert('New record created successfully')</script>";
            $username = $email = $password = $confirm_password = '' ;
            header("location: login.php");
        } else {
            echo "<span class='error'>Error: " . $sql_insert . "<br>" . $conn->error . "</span>";
        }

        $conn->close();
    }
}
?>


<div id="signup-form">
    <h2>Sign Up</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"><br>
        <span class="error"><?php echo $userNameError; ?></span><br>

        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"><br>
        <span class="error"><?php echo $emailError; ?></span><br>

        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"><br>
        <span class="error"><?php echo $passwordError; ?></span><br>

        <input type="password" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>"><br>
        <span class="error"><?php echo $confirmPasswordError; ?></span><br>

        <button type="submit">Sign Up</button>
    </form>
</div>


<script>
document.getElementById("signup-toggle").addEventListener("click", function() {
    var signupForm = document.getElementById("signup-form");
    if (signupForm.style.display === "none") {
        signupForm.style.display = "block";
    } else {
        signupForm.style.display = "none";
    }
});
</script>

</body>
</html>
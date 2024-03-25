<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Input Form</title>
</head>
<body>

<h2>Input Form</h2>
<form method="post" action="">
    <label for="input">Input:</label><br>
    <input type="text" id="input" name="input"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Display sanitized input
    echo "<h2>Sanitized Input:</h2>";
    echo "<p>$input</p>";

    // Check if email field exists and is not empty
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        
        // Check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Continue with safe email processing
            echo "<p>Email is valid: $email</p>";
        } else {
            // Handle invalid email input
            echo "<p>Invalid email: $email</p>";
        }
    }
}
?>

</body>
</html>

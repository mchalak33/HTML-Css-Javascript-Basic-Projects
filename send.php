<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted email from the form
    $email = $_POST["email"];

    // Validate the email (you can add more robust validation here)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Perform additional actions, such as saving to a database or sending an email
        // For this example, let's assume we just print a success message
        echo "Thank you for registering for our newsletter!";
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request method.";
}
?>

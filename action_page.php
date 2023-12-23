<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $username = $_POST["USERNAME"];
    $password = $_POST["password"];

    // Process the form data as needed
    // For example, you can store it in a database, send an email, etc.

    // Here's a simple example of storing the data in a text file
    $data = "USERNAME: $username\npassword: $email\nMessage: ";

    // Append the data to a file called "form_submissions.txt"
    file_put_contents("form_submissions.txt", $data, FILE_APPEND | LOCK_EX);

    // Redirect the user back to the previous page or a thank you page
    header("Location: /thankyou.php");
    exit();
}
?>
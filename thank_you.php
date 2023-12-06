<?php
session_start();

// Check if user data is available in the session
if (isset($_SESSION["user_data"])) {
    $userData = $_SESSION["user_data"];

    // Display a thank-you message with user data
    echo "<h2>Thank You, {$userData['name']}!</h2>";
    echo "<p>Your message has been received. We appreciate your contact.</p>";

    // Display additional information if needed
    echo "<h3>Contact Details:</h3>";
    echo "<p>Email: {$userData['email']}</p>";
    echo "<p>Phone: {$userData['phone']}</p>";
    echo "<p>Subject: {$userData['subject']}</p>";
    echo "<p>Message: {$userData['message']}</p>";

    // Clear the session data to avoid displaying it again on a new visit
    unset($_SESSION["user_data"]);
} else {
    // If no user data is found, display a generic thank-you message
    echo "<h2>Thank You!</h2>";
    echo "<p>Your message has been received. We appreciate your contact.</p>";
}

// You can customize the content and styling based on your requirements
?>

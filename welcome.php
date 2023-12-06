<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $name = isset($_GET["name"]) ? $_GET["name"] : "";
    $email = isset($_GET["email_address"]) ? $_GET["email_address"] : "";
    $subject = isset($_GET["subject"]) ? $_GET["subject"] : "";
    $phone = isset($_GET["phone"]) ? $_GET["phone"] : "";
    $message = isset($_GET["message"]) ? $_GET["message"] : "";
    $termsAccepted = isset($_GET["terms_and_policy"]);

    // Process and store the data (you can customize this part based on your needs)
    // For example, you might store it in a database or a file.
    // For demonstration purposes, let's just store it in a session variable.
    session_start();
    $_SESSION["user_data"] = compact("name", "email", "subject", "phone", "message", "termsAccepted");

    // Redirect to the thank-you page
    header("Location: thank_you.php");
    exit();
}
?>

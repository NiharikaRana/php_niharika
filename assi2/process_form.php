

<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data
    $content = mysqli_real_escape_string($conn, $_POST["content"]);

    // SQL query to insert data into the 'content' table
    $sql = "INSERT INTO content (content) VALUES ('$content')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully, you can redirect to a success page or display a success message
        header("Location: success.php"); // Redirect to a success page
        exit();
    } else {
        // Error occurred during insertion, you can redirect to an error page or display an error message
        header("Location: error.php"); // Redirect to an error page
        exit();
    }
} else {
    // If the request method is not POST, redirect to an error page or display an error message
    header("Location: error.php"); // Redirect to an error page
    exit();
}
?>


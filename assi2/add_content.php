<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and insert into the database using $conn connection object.
    // Rest of your code...
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Content</title>
    <linl rel="stylesheet" href="styles.css">
    <!-- Include your CSS link or styles here -->
</head>

<body>
    <main>
        <div class="container">
            <h1>Add Content</h1>
            <form action="process_form.php" method="post">
                <label for="content">Content:</label>
                <input type="text" id="content" name="content" required><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </main>

    <!-- Include your footer content or structure here -->
</body>

</html>

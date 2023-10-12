

<?php

include("db_connection.php");

// SQL query to retrieve all content from the database
$sql = "SELECT * FROM content";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Content</title>
    <linl rel="stylesheet" href="styles.css">
    <!-- Include your CSS link or styles here -->
</head>

<body>
    <main>
        <div class="container">
            <h1>View Content</h1>
            <ul>
                <?php
                // Assuming $result contains the fetched data from the database
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . $row['content'] . "</li>"; 
                }
                ?>
            </ul>
        </div>
    </main>

    <!-- Include your footer content or structure here -->
</body>

</html>


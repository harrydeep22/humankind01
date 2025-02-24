<!DOCTYPE html>
<html>
<head>
    <title>Sample PHP Website</title>
</head>
<body>
    <h1>Welcome to My Sample PHP Website</h1>
    <?php
        // Sample PHP code
        echo "<p>This is a simple PHP script embedded in HTML.</p>";

        // Display the current date and time
        echo "<p>Current Date and Time: " . date("Y-m-d H:i:s") . "</p>";

        // Sample function
        function greet($name) {
            return "Hello, " . htmlspecialchars($name) . "!";
        }

        // Call the function and display the greeting
        $name = "Visitor";
        echo "<p>" . greet($name) . "</p>";
    ?>
</body>
</html>

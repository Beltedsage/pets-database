<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    
    <?php

        // Login gubbins
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, "pets");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); // Error message
        }
        echo "Connected successfully<br>";

        $query = "INSERT INTO pets (name, age, type) VALUES (?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sis", $_POST['name'], $_POST['age'], $_POST['type']);
        $stmt->execute();

        echo "<br>You have successfully added <strong>" . $_POST['name'] . "</strong> to the database."
        ?>
        
        <br>
        <button type="button"><a href="http://localhost/github/College-DSD/John-work/pets-database/pets/">Return</a></button> 

</body>
</html>
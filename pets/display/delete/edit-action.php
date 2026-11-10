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
    $query = "UPDATE pets SET name=?, age=?, type=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("siss", $_POST['name'], $_POST['age'], $_POST['type'], $_POST['id'],);
    $stmt->execute();
    // echo "<br>You have successfully added <strong>" . $_POST['name'] . "</strong> to the database."

    //echo $_POST["id"];

    header("Location: http://localhost/Programming/gubbins/pets/edit.php?id={$_POST["id"]}&msg=success");
?>
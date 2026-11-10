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

    $sql = "SELECT * FROM pets WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET['id']);
    $row = $stmt->execute();
    $result = $stmt->get_result();
    $pet = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="display-all-pets-style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        .success {
            margin-top: 18px;
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style> -->

</head>
<body>

    <h1>Edit <?= $pet['name'] ?></h1>

    <form action="edit-action.php" method="POST">
        <p>
            Name:
            <input type="text" name="name" value="<?= $pet['name'] ?>">
        </p>
        <p>
            Age:
            <input type="text" name="age" value="<?= $pet['age'] ?>">
        </p>
        <p>
            Type:
            <input type="text" name="type" value="<?= $pet['type'] ?>">
        </p>
        <p>
            <input type="submit" value="Update">
        </p>
        <input type="hidden" name="id" value="<?= $pet['id'] ?>">
    </form>

    <?php if(isset($_GET["msg"]) && $_GET["msg"]=="success"): ?>
        <div class="success">
            Updated successfully.
        </div>
    <?php endif ?>
</body>
</html>

<?php
    //
    $result->free_result();
    $conn->close();
    //
?>
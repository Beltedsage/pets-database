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
    // echo "Connected successfully<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Pets Stored in the Pets MySQL Table</title>

    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="display-all-pets-style.css">
    <link rel="stylesheet" type="text/css" href="../style.css">

    <style>
        /* body {background-image: url("niche_4k_enhanced.jpg"); } */
    </style>

</head>
<body>

    <?php
        include "../partials/menu.php";
    ?>
    
    <h1>Registered Pets</h1>
    <button type="button"><a href="http://localhost/github/College-DSD/John-work/pets-database/pets/">Return</a></button> 

<?php if(isset($_GET["msg"]) && $_GET["msg"]=="delete-success"): ?>
    <div class="success">
        Delete successful.
    </div>
<?php endif ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Type</th>
            <th>#</th>
            <th>#</th>
        </tr>

    

    <?php

    $sql = "SELECT * FROM pets";
    $result = $conn->query($sql);

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

// ONE WAY TO DO THIS - BOTH DO THE SAME THING (I got lazy, check worksheet 7 for the other way)
        echo "<tr>";
        echo "<td>{$row["id"]}</td>";
        echo "<td>{$row["name"]}</td>";
        echo "<td>{$row["age"]}</td>";
        echo "<td>{$row["type"]}</td>";
        echo "<td><button onclick='confirmationEdit({$row["id"]})' id='editButton'>Edit</button></td>";
        // echo "<td><a href='edit.php?id={$row["id"]}'>Edit</a></td>";
        echo "<td><button onclick='confirmationDelete({$row["id"]})' id='deleteButton'>Delete</button></td>";
        // echo "<td><a href='delete-action.php?id={$row["id"]}'>Delete</a></td>";
        echo "</tr>";

    }
    
    // Free result set
    $result->free_result();

    $conn->close();

    ?>

    <script>
        function confirmationEdit(id) {
            window.location.href = "edit/edit.php?id=" + id;
        }

        function confirmationDelete(id) {
            if(confirm("Confirm delete?")) {
                window.location.href = "delete/delete-action.php?id=" + id;
            }
        }

        
        // document.getElementById("deleteButton").addEventListener("click", header(delete-action.php?id={$row["id"]}));
    </script>

    </table>

</body>
</html>
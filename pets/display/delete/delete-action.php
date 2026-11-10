<?php

include "library/db.php";

$conn = connect();

$query = "DELETE FROM pets WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();

header('Location: http://localhost/github/College-DSD/John-work/pets-database/pets/display-all-pets.php?msg=delete-success');

?>
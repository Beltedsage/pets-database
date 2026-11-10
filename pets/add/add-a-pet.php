<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../style.css">


    <style>
        body {
            background-image: url("../img-assets/niche_4k_enhanced.jpg");
            background-size: cover;
            background-attachment: fixed;    
        }
    </style>
</head>

<body>
    
    <?php
        include "../partials/menu.php";
    ?>
    
    <form action="add-a-pet-action.php" method="post">

        <button type="button"><a href="http://localhost/github/College-DSD/John-work/pets-database/pets/">Return</a></button> 

        <p> Enter Pet Name: <input type="text" name="name" /> </p>
        <p> Enter Pet Age: <input type="number" name="age" /> </p>
        <p> Enter Pet Type: <input type="text" name="type" /> </p>
        <p> <input type="submit" value="Add Pet Details" /></p>

    </form>

</body>
</html>
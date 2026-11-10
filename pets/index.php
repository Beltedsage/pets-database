<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style.css">


    <style>

        body {
            background-image: url("img-assets/niche_4k_enhanced.jpg");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-size: cover;
            background-attachment: fixed;  
            /* font-family: "Times New Roman", Times, serif;; */
        }

        .centrebox {
            border: 1px solid #000000;
        
        }

        .container {
            display: grid; 
            grid-auto-columns: 1fr; 
            grid-template-columns: 1fr 1fr 1fr; 
            grid-template-rows: 1fr 1fr 1fr; 
            gap: 0px 0px; 
            grid-template-areas: 
                ". . ."
                ". temp ."
                ". . ."; 
            height: 750px;
            }
        .temp { 
            grid-area: temp;
            display: inline-block;
            position: center;
            margin-left: auto;
            margin-right: auto;
        }

        .textual {
            padding: 20px;
            font-size: 60px;
            margin-top: 18px;
            /* color: #3c763d; */
            background-color: #84B535;
            /* border-color: #d6e9c6; */
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #000000;
            border-radius: 4px;
            font-family: "Times New Roman", Times, serif;
        }

    </style>
</head>
<body>

    <?php
        include "partials/menu.php";
    ?>

    <!-- Works Deliciously -->

    <div class="container">
        <div class="temp">
        <div class="textual"><a href="add/add-a-pet.php"><strong>Add a pet</strong></a></div>
        <div class="textual"><a href="display/display-all-pets.php"><strong>Display all pets</strong><br></a></div>
        </div>
        <!-- <a href="edit-action.php">EDIT TABLE<br></a> -->
    </div>
</body>
</html>
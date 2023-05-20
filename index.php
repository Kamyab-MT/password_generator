<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "password_generator";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM users WHERE ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div>
        <form>
            <center>
                
                
            <div id="password-container" class="box">Click on the Generate Password</div>
            <button type="button" id="generate-password">Generate Password</button>
                
                <div class="box">
                <label for="password-length">Password Length:</label>
                <input type="number" id="password-length" name="password-length" min="1" max="100" value="8">
                <br>
                <br>
                <label for="include-uppercase">Include Uppercase Letters:</label>
                <input type="checkbox" id="include-uppercase" name="include-uppercase" checked>
                <br>
                <br>
                <label for="include-numbers">Include Numbers:</label>
                <input type="checkbox" id="include-numbers" name="include-numbers" checked>
                <br>
                <br>
                <label for="include-symbols">Include Symbols:</label>
                <input type="checkbox" id="include-symbols" name="include-symbols" checked>
                <br>
                

            </div>

            </center>
        </form>
    </div>
        <script src="script.js"></script>
    </div>
      
</body>
</html>
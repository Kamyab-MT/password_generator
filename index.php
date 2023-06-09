<?php
    
    $loggedIn = false;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "password_generator";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($_POST != null) {

        $query = "SELECT * FROM users WHERE username = " . $_POST["username"];
        $result = $mysqli_query($conn, $query);


    }
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

    <div id="header">
        <button id="open_login">
            <img id="open_btn" style="width:100%;" src="resources/person.png" alt="login">
        </button>
        
        <button id="passwords">
            <img id="" style="width:100%;" src="resources/save.png" alt="passwords">
        </button>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <form>
                
                
            <div id="password-container" class="box">Click on the Generate Password</div>
            <center> 
                <button type="button" id= "generate-password" class="btn">Generate Password</button>
            </center>
                
                <div class="box">
                    
                
                <div class="slidecontainer">
                    <br>
                    <span style="color:white;">Password Length: <span id="len"></span></span>
                    &nbsp&nbsp
                    <input type="range" min="1" max="100" value="50" class="slider" id="password-length">
                </div>

                <script>
                    var slider = document.getElementById("password-length");
                    var output = document.getElementById("len");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = slider.value;
                    }
                </script>


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

        </form>

        <div id="snackbar">The Password has been Copied to Clipboard</div>
    
    </div>

    <div>

    <center>
    <form action="">
        <input type="text" id="pass_label" placeholder="Label your Password to Save : "> 
        <button type="button" class="btn " disabled>Save</button>

    </form>
    
    </center>
    </div>
    
    <br>

    
    <div id="login_page">

        <center>
            <button id="close_btn">Dismiss</button>
            <br>
            <br>
            <br>
            <br>
            <br>    
            <br>
        
            <h2 style="margin-top:4%; color:white;">Login Page</h2> 
            <br>
            <br>
            <br>
            <form action="" method="post">
                <label for="username">Username : </label>
                <input class="field" type="text" name="username" required>
                <br>
                <br>
                <label for="password">Password : </label>
                <input class="field" type="password" name="password" required>
                
                <button id="login_btn">Submit</button>

            </form>

        </center>
    </div>

    <footer id="footer">
        <center>
            <p id="footer-txt">® 2023 - 1402</p>
            <p id="footer-txt">FrontEnd : Ehsan Nasrollahi &nbsp&nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp&nbsp BackEnd : Kamyab Mohammadi Tabar</p>
        </center>
    </footer> 

    <script src="script.js"></script>

</body>
</html>
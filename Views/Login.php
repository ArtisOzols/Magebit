<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>
    <div class="bg-img">
        <div class="dark-box" >
            <div class="info-text">
                <h2 class="text-h">Don't have an account? <br></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button class="btn blue-btn" onclick="transformLeft()">SIGN UP</button>
            </div>
            <div class="info-text">
                <h2 class="text-h">Have an account? <br></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <button class="btn blue-btn" onclick="transformRight()">LOGIN</button>
            </div>
        
            
            <div class="blue-shadow" id="shadow"></div>
            <div class="white-box" id="whiteBox">
                <div class="p-relative">
                    <h1 class="text-h" id="title">Login <br></h1>
                    <img src="./public/images/Logo.svg" alt="MAGEBIT" class="logo">
                </div>
                
                <!-- login form -->
                <form action="test" method="post" id="logForm">
                    <p class="loginError">
                        <?php
                            if(isset($_SESSION["loginError"])){
                            echo "Wrong email or password";
                            unset($_SESSION["loginError"]);
                            }
                        ?>      
                    </p>
                    <label for="email" class="placeholder"> 
                        <input id="mail" type="email" required="required" name="Logemail" value="<?php if(isset($_SESSION["email"])) {echo $_SESSION["email"];} ?>" > <br>
                        <p id="placeholder">Email</p>
                        <p class="red">*</p>
                        <img src="./public/images/mail.svg" alt="email" class="p-absolute">
                    </label>
                    <label for="password" class="placeholder">
                        <input id="password" type="password" required="required" name="Logpassword" value="<?php if(isset($_SESSION["password"])) {echo $_SESSION["password"];} ?>"><br><br>
                        <p id="placeholder">Password</p>
                        <p class="red">*</p>
                        <img src="./public/images/lock.svg" alt="password" class="p-absolute">
                    </label>
                    <div class="p-relative">
                        <a href="#" class="p-absolute">Forgot?</a>
                        <input type="submit" value="LOGIN" class="btn orange-btn">
                    </div>
                </form>
            

                <!-- registration form -->
                <form action="registration" method="post" id="regForm">
                        <?php
                            if(isset($_SESSION["RegError"])){
                            echo "Email address is already registered";
                            unset($_SESSION["RegError"]);
                            }
                        ?>
                    
                    <label for="RegName" class="placeholder">
                        <input type="text" id="name" required="required" name="RegName" value="<?php if(isset($_SESSION["RegName"])) {echo $_SESSION["RegName"];} ?>"> <br>
                        <p id="placeholder">Name</p>
                        <p class="red">*</p>
                        <img src="./public/images/user.svg" alt="name" class="p-absolute">
                    </label>
                    <label for="RegEmail" class="placeholder">
                        <input type="email" id="mail" required="required" name="RegEmail" value="<?php if(isset($_SESSION["RegEmail"])) {echo $_SESSION["RegEmail"];} ?>"> <br>
                        <p id="placeholder">Email</p>
                        <p class="red">*</p>
                        <img src="./public/images/mail.svg" alt="email" class="p-absolute">
                    </label>
                    <label for="RegPassword" class="placeholder">
                        <input type="password" id="password" name="RegPassword" value="<?php if(isset($_SESSION["RegPassword"])) {echo $_SESSION["RegPassword"];} ?>"> <br>
                        <p id="placeholder">Password</p>
                        <p class="red">*</p>
                        <img src="./public/images/lock.svg" alt="password" class="p-absolute">
                    </label>
                    <div class="p-relative">
                        <input type="submit" value="SIGN UP" class="btn orange-btn">
                    </div>
                </form> 
            </div>
        </div>
        <p class="copyr">ALL RIGHT RESERVED "MAGEBIT" 2016.</p>
    </div>

    <script src="./public/js/transform.js"></script>
</body>
</html>


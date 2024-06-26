<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/Register.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Notable&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <a href="Home.html">
        <div class="logo">
            <h1>ARTEM</h1>
    </div></a>
    <div class="wrapping">
        <div class="background-regis">
            <div class="Register">
                <h1>Register</h1>

                <form action="">
                    <div class="register-input">
                        <input type="text" name="" id="name" placeholder="Username">
                        <p id="error-name" class="error-message"></p>
                    </div>
                    <div class="register-input">
                        <input type="email" name="" id="email" placeholder="Email">
                        <p id="error-email" class="error-message"></p>
                    </div>
                    <div class="register-input">
                        <input type="password" name="" id="pass" placeholder="Password">
                        <p id="error-pass" class="error-message"></p>
                    </div>
                    
                    
                    

                    <div class="remember">
                        <input type="checkbox" name="" id="">
        
                        <h2>Remember Me</h2>
                    </div>

                    <button type="submit" class="log-but" id="req">Register</button>
                </form>
                

                <div class="or">
                    <ul></ul>
                    <h3>Or</h3>
                    <ul></ul>
                </div>

                <button class="google">
                    <img src="images/google.png" alt="">
                    <h4>Login with Google</h4>
                </button>
            </div>
        </div>
        

        <div class="picture">
            <!-- <img src="images/Register-pic.png" alt=""> -->
        </div>
    </div>
    
<script src="JS/Register.js"></script>
</body>
</html>
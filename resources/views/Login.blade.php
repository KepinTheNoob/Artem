<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/Login.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <a href="Home.html"><div class="logo">
        <img src="images/Logo.png" alt="logo">
        <h1>Artem</h1>
    </div></a>

    <div class="login">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" id="email" placeholder="Username/Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>

            <div class="remember">
                <div class="kotak"></div>

                <h2>Remember Me</h2>
            </div>

            <button type="submit" class="log-but">Login</button>
        </form>
        

        <div class="or">
            <ul></ul>
            <h3>Or</h3>
            <ul></ul>
        </div>

        <button class="google">
            <img src="images/google-exe.png" alt="">
            <h4>Login with Google</h4>
        </button>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/Editor.css">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uprak</title>
    <link rel="stylesheet" href="uprak.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Template.html">Library</a></li>
        </ul>

        <ul>
            <li><a href="Dashboard.html">Settings</a></li>
        </ul>
    </div>

    <div class="tengah">
        <li class="tengah_kiri">

            <label for="arrow"><img src="images/arrow-edit.png" alt=""></label>
            <input type="checkbox" name="" id="arrow" class="button-slide">

            <div class="control">
                <div class="search">
                    <h1>Components</h1>
                    <input type="text" placeholder="Search">
                </div>
                
                <div class="component">
                    <div class="components">
                        <h1>Login button</h1>
                        <div class="login-button" id="drag1" draggable="true" ondragstart="drag(event)"><h2>Login</h2></div>
                    </div>
                    <div class="components">
                        <h1>Sign up button</h1>
                        <div class="sign-button" id="drag2" draggable="true" ondragstart="drag(event)"><h2>Sign</h2></div>
                    </div>
                    <div class="components">
                        <h1>Text bar</h1>
                        <div class="text-bar" id="drag3" draggable="true" ondragstart="drag(event)"></div>
                    </div>
                </div>
            </div>
        </li>
        

        <div class="isi">
            <div class="canva" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </div>


    <script src="JS/Editor.Js"></script>
</body>
</html>
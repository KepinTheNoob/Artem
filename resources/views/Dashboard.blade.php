<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/Dashboard.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="base">
        <div class="left">
            <div class="grey">
                <button>New Design</button>
                <div class="recent"><img src="images/recent.png" alt=""><h1>Recents</h1></div>
                <div class="favorite"><img src="images/favorite.png" alt=""><h1>Favorite</h1></div>
            </div>

            <div class="greyer">
                <ul>
                    <li><div class="file size"><img src="images/ph_file.png" alt=""><h1>Your files</h1></div></li>
                    <li>
                        <label class="category size" for="category"><img src="images/segitiga.png" alt=""><h1>Category</h1></label>
                        
                        <input type="checkbox" name="cat" id="category">

                        <div class="in-category">
                            <button>Lelas</button>
                            <button>Lemas</button>
                            <button>Lesu</button>
                            <button>Help</button>
                        </div>
                    </li>
                    
                    <li><div class="template size"><h1>Template</h1></div></li>
                    <li><div class="community size"><h1>Community</h1></div></li>
                </ul>
                
                <a class="setting" href="Editor.html">Settings</a>
            </div>
        </div>

        <div class="right">
            <div class="yellow">
                <div class="account">
                    <img src="images/Account-dash.png" alt="gambar">
                    <h1>Account</h1>
                </div>
            </div>

            <div class="white">
                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"></div>

                    <h1>Lorem ipsum</h1>
                </div>

                <div class="design">
                    <div class="picture"><img src="images/add.png" alt=""></div>

                    <h1>Lorem ipsum</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="JS/Dashboard.js"></script>
</body>
</html>
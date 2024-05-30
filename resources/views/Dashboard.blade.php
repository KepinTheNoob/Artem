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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Notable&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="navbar">
        <a href="Home.html"><h1>ARTEM</h1></a>

        <a href="Login.html"><img src="images/Profile-Icon.png" alt=""></a>
    </div>

    <div class="base">
        <div class="left">
            <div class="grey">
                <button id="button_new">Create new project</button>
                <div class="recent"><img src="images/white-recents_.png" alt=""><h1>Recents</h1></div>
                <div class="favorite"><img src="images/white-star.png" alt=""><h1>Favorite</h1></div>
            </div>

            <div class="greyer">
                <ul>
                    <li><div class="file size"><img src="images/white_file.png" alt=""><h1>Your files</h1></div></li>
                    
                    <li><div class="file size"><img src="images/Template-Icon.png" alt=""><h1>Template</h1></div></li>
                    <li><div class="file size community"><img src="images/Community-Icon.png" alt=""><h1>Community</h1></div></li>
                </ul>
                
                <a href="Editor.html"><div class="setting"><img src="images/settings_.png" alt=""><h1>Settings</h1></div></a>
            </div>
        </div>

        <div class="right" id="right">
            <div class="upper-white">

                <h6>Your Projects</h6>

                <div class="white">
                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-31.png" alt="" class="imgs">

                            <h1>Project 1</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-32.png" alt="" class="imgs">

                            <h1>Project 2</h1>
                        </div>
                    </a>
                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-33.png" alt="" class="imgs">

                            <h1>Project 3</h1>
                        </div>
                    </a>
                    
                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-34.png" alt="" class="imgs">

                            <h1>Project 4</h1>
                        </div>
                    </a>
                    

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-35.png" alt="" class="imgs">

                            <h1>Project 5</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-36.png" alt="" class="imgs">

                            <h1>Project 6</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <div class="picture"><img src="images/add.png" alt=""></div>

                            <h1>Create new project</h1>
                        </div>
                    </a>
                </div>
            </div>
            

            <div class="upper-white">

                <h6>Templates</h6>

                <div class="white">
                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-38.png" alt="" class="imgs">

                            <h1>IT Solution</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-50.png" alt="" class="imgs">

                            <h1>HvaCompany</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-40.png" alt="" class="imgs">

                            <h1>Counselor</h1>
                        </div>
                    </a>

                    <a href="Editor.html">
                        <div class="design">
                            <img src="images/Rectangle-41.png" alt="" class="imgs">

                            <h1>Solicitor</h1>
                        </div>
                    </a>
                </div>

                <div class="load-more">
                    <button>Load more</button>
                </div>
            </div>
        </div>
    </div>

    <script src="JS/Dashboard.js"></script>
</body>
</html>
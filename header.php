<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <style>

        .menu-container {
            display: flex;
            background-color: #2f5f49;
            border-radius: 7%;
            float: right;
            vertical-align: center;
            }

            .dropdown-btn {
                background: none;
                border: none;
                color: #fff;
                cursor: pointer;
                font-size: 20px;
                font-family:"Arial";
                padding: 15px;
                text-align: center;
            }

            .dropdown-menu {
                display: none;
                position: absolute;
                background-color: #2f5f49;
                list-style: none;
                float: right;
                margin: 0;
                padding: 0;
            }

            .dropdown-menu li {
                padding: 10px;
            }

            .dropdown-menu a {
                color: #fff;
                text-decoration: none;
            }

            .dropdown-menu a:hover {
                text-decoration: none;
            }

            .dropdown-btn:hover + .dropdown-menu,
            .dropdown-menu:hover {
                display: block;
            }

            header {
                background-color: #3ba576;
                color: #fff;
                padding: 35px;
            }

            header img {
                width: 130px;
                height: auto;
                position: absolute;
                top: 70px;
                left: 50px;
                border-radius: 50%;
            }
                
            .logout-button {
                color: #ffffff;
                text-decoration: none;
                padding: 8px;
                border-radius: 4px;
                background-color: #3ba576;
            }

            .logout-button:hover {
                background-color: #8bff87;
                color: #fff;
                cursor: pointer;
            }

            .username-text {
                color: #3ba576; 
                margin-right: 12px      
            }

            h1 {
            color: #f3f2f2;
            margin-left: 170px;
            font-family: "Times New Roman", Times, serif;
            }

            h2 {
                color: #3ba576;
            }

            h3 {
                color: #f3f2f2;
                margin-left: 170px
            }

            </style>

    <div style="text-align: right; padding: 10px;">
            <?php

            if (isset($_SESSION['username'])) {
                echo '<span class="username-text"> welcome ' . $_SESSION['username'] . '</span> ';
                echo '<a class="logout-button" href="index.php">Logout</a>';
            }
            ?>
        </div>
    </head>

    <body>
        <header>
            <img src="images/cat_image.jpg" alt="Reem Marji's Photo">
            <nav>
                <div class="menu-container">
                    <button class="dropdown-btn">Menu</button>
                    <ul class="dropdown-menu">
                        <li><a href="MainPage.php">Home</a></li>
                        <li><a href="CV.php">CV</a></li>
                        <li><a href="Gallery.php">Gallery</a></li>
                        <li><a href="contactme.php">Contact Me</a></li>
                    </ul>
                </div>
            </nav>
            <h1><strong>Reem Marji</strong></h1>
            <h3>Undergraduate Student</h3>
        </header>
    </body>


</html>

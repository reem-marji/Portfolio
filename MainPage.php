<?php include('header.php'); 

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.html');
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body{
        background-color: #f8fbf9;
        margin: 0%;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        background-color: #f0fbf4;
    }

    .container {
        display: flex;
        align: center;
        margin: auto;
        width: 50%;
        padding: 10px;
        }

    .box {
        margin: 25px;
        margin-top: 40px;
        padding: 20px;
        text-align: center;
        background-color: #3ba576;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 2%;
    }


    p {
        line-height: 1.5;
    }

    .middle-container{
        margin: 100px 0px;
        margin-left: 500px;
    }

    .contact-message{
        width: 40%;
        margin: 40px auto 60px;
    }

    .btn {
        background: #40a474;
        -webkit-border-radius: 8;
        -moz-border-radius: 8;
        border-radius: 8px;
        font-family: Arial;
        color: #ffffff;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
    }
    
    .btn:hover {
        background: #8bff87;
        text-decoration: none;
    }

    .block-container {
        display: flex;
        justify-content: center; 
        align: center;
        align-items: center;
        margin-top: 30px; 
        width: 600px; 
        height: 70px;
    }

    .block {
        width: 50px; 
        flex: 1;
        margin-left: 140px;
        padding: 20px;
        background-color: #40a474;
        border-radius: 8px;
        color: #ffffff;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
    }

    .block:hover {
        background-color: #8bff87;
    }

    .welcome h1, h4{
        color: #3ba576;
        margin-top: 40px;
        margin-left: 60px;
    }

    .welcome p{
        color: #3ba576;
        margin-top: 40px;
        margin-left: 60px;
        font-family: "Times New Roman", Times, serif;
    }


    .left-div {
            display: inline-block;
            padding: 0px;
            float: left;
            width: 50%;
            border: 0;
        }

    .right-div {
            display: inline-block;
            padding: 0px;
            float: right;
            width: 50%;
            border: 0;
        }

    .right-div .box ul li{
        color: white;
        margin-left: 20px;
        text-align: left;
        margin-bottom: 10px;
        font-family: "Times New Roman", Times, serif;

    }

    .right-div .box h2{
        color: white;
        text-align: left;
        margin-bottom: 10px;
    }

    .right-div .box span{
            color: white;
            text-align: left;
            margin-bottom: 10px;
            display: block; 
            font-family: "Times New Roman", Times, serif;
        }


    </style>  

</head>

<body>
    <div class="left-div">
        <div class="welcome">
            <h1>Welcome to my Portfolio! <h1>
            <h4>A Bit About Me:</h4>
            <p>I am avid reader of literature of a variety of genres. I also have deep interest<br>in astronomy in addition to exploring Lebanese culture and architecture. I am <br>currently studying computer science at the Lebanese American University, to <br> expand my knowledge of the technological field and industry. </p>
        </div>
    </div>

    <div class="right-div">
        <div class="box">
            <h2>Overview</h2>
            <br></br>
            <span>In this website you can find the following pages:<span>
            <ul>
                <li> <strong>CV</strong>: my education, experience, and overall skills </li>
                <li> <strong>Gallery</strong>: pictures of some of my favorite lebanese architecture </li>
                <li> <strong>Contact Me</strong>: easy access to my personal email</li>
            </ul>
        </div>
    </div>

</body>

</html>
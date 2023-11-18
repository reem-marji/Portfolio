<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0fbf4;
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

        .container {
            display: flex;
            flex-direction: row;
        }

        .box {
            margin: 25px; 
            margin-top: 40px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 2%;
        }

        h1 {
            color: #f3f2f2;
            margin-left: 170px
        }

        h2 {
            color: #3ba576;
        }

        h3 {
            color: #f3f2f2;
            margin-left: 170px
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        .container .left-div .box ul li {
            margin-bottom: 10px;
        }

        .container .right-div .box ul li {
            margin-bottom: 10px;
        }
        
        .box2 {
            margin-top: 20px;
            margin-left: 25px;
            margin-right: 755px;
            margin-bottom: 30px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 2%;   
        }

        table {
            border-collapse: collapse;
            width: 60%;
            border: 2px dashed #3ba576; 
        }

        .skill {
            background-color: #3ba576;
            color: #fff;
            padding: 9px;
            border-radius: 12px;
        }

        .skill:hover {
            background-color: #8bff87;
            color: #fff;
            cursor: pointer;
        }

        .skill-row {
            line-height: 50px;
        }

        .icon {
            display: inline-block;
            margin-right: 5px;
            margin-left: 5px;
            background-size: cover;
            width: 20px;
            height: 20px;
            vertical-align: middle;
            
        }

        .email-icon {
            background-image: url("icons/mail_icon.png");
        }

        .location-icon {
            background-image: url("icons/location_icon.png");
        }
        .phone-icon {
            background-image: url("icons/phone.png");
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reem Marji - CV</title>
</head>
<body>

<div class="container">
    <div class="left-div">
        <div class="box"> 
            <section>
                <ul>
                    <li>
                        <i class="icon location-icon"></i>
                        Beirut, Lebanon
                    </li>
                    <li>
                        <i class="icon phone-icon"></i>
                        961+ | 71 368 318
                    </li>
                    <li> 
                        <i class="icon email-icon"></i>
                        reem.marji2112@gmail.com
                    </li>
                </ul>
            </section>
            <section>
                <h2>General</h2>
                <ul>
                    <li>Enrolled in the Honors Program - CGPA: 3.76</li>
                    <li>Diplomacy award-winning MUN delegate - 2018</li>
                    <li>Trainer and Volunteer with Donner Sang Compter - 2022</li>
                </ul>
            </section>

            <section>
                <h2>Education</h2>
                <ul>
                    <li>BS in Computer Science (2024)</li> 
                    <li>Institution: Lebanese American University</li>
                </ul>
            </section>
        </div>
    </div>

    <div class="right-div">
        <div class="box">
            <section>
                <h2>Work Experience</h2>
                <ul>
                    <li>Previous private math and physics tutor</li>
                    <li> Software Engineer Intern at CME - 2023 </li>
                    <li> Part time Software Engineer at CME - 2023</li>
                </ul>
            </section>
            <br>
            <section>
                <h2>Soft Skills</h2>
                <ul>
                    <li>Excellent communication skills </li>
                    <li>Creative problem-solving and critical thinking</li>
                    <li>Comfortable with individual and coopretaive work</li>
                    <li>Adaptable to new work and environment</li>
                </ul>
            </section>
        </div>
    </div>
</div>

<div class="box2">
    <h2>Technical Skills</h2>
    <div class="skill-row">
        <span class="skill">Python</span>
        <span class="skill">Java</span>
        <span class="skill">C</span>
        <span class="skill">HTML</span>
        <span class="skill">CSS</span>
    </div>
    <div class="skill-row">
        <span class="skill">NLP</span>
        <span class="skill">AI</span>
        <span class="skill">OOP</span>
        <span class="skill">Algorithms</span>
    </div>
</div>

</body>
</html>

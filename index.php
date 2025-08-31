<?php

$name = "John Louie Corong";
$title = "Information Technology";
$phone = "09123211377";
$email = "jcorong_20ur0844@psu.edu.ph";
$address = "Ventinilla, Sta Barbara, Pangasinan";
$dob = "June 23 2002";
$nationality = "Philippines";
$linkedin = "https://www.linkedin.com/in/john-louie-corong-67a04a294/";
$github = "https://github.com/kingtzy23l";
$highSchool = "Daniel Maramba National High School";
$highSchoolGrade = "85%";
$bachelor = "Pangasinan States University";
$cgpa = "2.50";
$workExperience = "Worked on backend development for e-commerce platforms, integrating APIs and optimizing performance<br>Developed and maintained multiple web applications for clients across various industries";
$skills = "Visual Basic, C, C++, Java, HTML, MS Access, Flutter";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study 1</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fb;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #ddd;
        }
        .header div {
            margin-left: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #333;
            font-weight: bold;
        }
        .header h3 {
            margin: 5px 0;
            color: #777;
            font-size: 20px;
        }
        .header p {
            margin: 5px 0;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 30px;
            color: #444;
        }
        .section-content {
            margin-top: 10px;
        }
        .section-content p {
            margin: 8px 0;
            font-size: 16px;
            line-height: 1.6;
        }
        .skills ul {
            list-style-type: none;
            padding: 0;
        }
        .skills li {
            background-color: #e4f0f7;
            color: #0077b5;
            display: inline-block;
            padding: 8px 15px;
            border-radius: 20px;
            margin: 5px 8px 5px 0;
            font-size: 16px;
        }
        .contact-info p {
            margin: 5px 0;
            font-size: 16px;
        }
        .contact-info a {
            color: #0077b5;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
  
    <div class="header">
       
        <img src="profile.jpg" alt="Profile Picture"> 
        <div>
            <h1><?php echo $name; ?></h1>
            <h3><?php echo $title; ?></h3>
            <div class="contact-info">
                <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <p><strong>LinkedIn:</strong> <a href="https://<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin; ?></a></p>
                <p><strong>GitHub:</strong> <a href="https://<?php echo $github; ?>" target="_blank"><?php echo $github; ?></a></p>
                <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
                <p><strong>Nationality:</strong> <?php echo $nationality; ?></p>
            </div>
        </div>
    </div>


    <div class="section-title">Education</div>
    <div class="section-content">
        <p><strong>2013–2018:</strong> <?php echo $highSchool; ?><br>Grade: <?php echo $highSchoolGrade; ?></p>
        <p><strong>2020–2025:</strong> <?php echo $bachelor; ?><br>CGPA: <?php echo $cgpa; ?></p>
    </div>

    
    <div class="section-title">Experience</div>
    <div class="section-content">
        <p><?php echo $workExperience; ?></p>
        <p><strong>2025–2029:</strong> <?php echo $workExperience; ?>
        
    </div>

   
    <div class="section-title">Skills</div>
    <div class="section-content skills">
        <?php
        $skillsList = explode(", ", $skills);
        foreach ($skillsList as $skill) {
            echo "<li>$skill</li>";
        }
        ?>
    </div>

 

</body>
</html>
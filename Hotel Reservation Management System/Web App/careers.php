<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/careers.css">
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <title>The Grand Royale Hotel</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <script src="js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/7c40190028.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="container">
    <div class="careers">
        <div class="careers-div1">
            <img class="career-img" src="img/fromeimg.jpg" alt="carres-img">
        </div>
        <div class="careers-div2">
            <div class="careers-div2-box">
                <h3>CARERS</h3>
                <div class="careers-box-underline"></div>
            </div>
            <h1>Rewarding Careers</h1>
            <div class="careers-underline"></div>
            <p class="career-para">Impressive career vacancies await you at The Grand Royale Hotel. A Challenging and exciting work opportunity is what we offer.</p>
            <div class="careers-jobs">
                <h2>JOBS</h2>
                <div class="careers-jobs-underline"></div>
                <a href="#"><p class="job-p">HOUSEMAN/ROOM MAID</p></a>
                <a href="#"><p class="job-p">WAITERS</p></a>
                <a href="#"><p class="job-p">COMMIS - (INDIAN KITCHEN)</p></a>
                <a href="#"><p class="job-p">ENGINEERING STOREKEEPER / STORES ASSISTANT</p></a>
                <a href="#"><p class="job-p">KTCHEN STEWARD</p></a>
                <a href="#"><p class="job-p">ELECTRICIANS</p></a>
                <a href="#"><p class="job-p">AV TECHNICIANS</p></a>
                <a href="#"><p class="job-p">REF TECHNICIANS</p></a>
                <a href="#"><p class="job-p">GENERAL MECHANICS</p></a>
                <div class="form-class">
                    <form action="#" method="POST" class="job-form">
                        <i class="fa-solid fa-xmark close-btn"></i>
                        <div class="back">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <select name="jobs" id="form-job">
                                <option>Houseman/Room Maid</option>
                                <option>Waiters</option>
                                <option>Commis - (indian Kitchen)</option>
                                <option>Engineering Storekeeper / Store Assistant</option>
                                <option>Kitchen Steward</option>
                                <option>Electricians</option>
                                <option>AV Technicians</option>
                                <option>Ref Technicians</option>
                                <option>General Mechanics</option>
                            </select>
                            <div class="mb-3 form-file">
                            <input class="form-control" type="file" id="formFileMultiple" multiple value="#563d7c">
                        </div>
                        <textarea name="text" id="txt" cols="30" rows="5"></textarea>
                        <input type="button" id="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
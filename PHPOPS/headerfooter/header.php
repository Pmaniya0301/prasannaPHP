<?php 

const SITE_URL = "http://prasann.localhost/3000-Prasann.M-24-PHPOPS";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Team OPS</title>
    <link rel="stylesheet" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/style.css">
</head>

<body class="">
    <div class="py-5"></div>
    <div id="header" class="navbar navbar-expand-sm fixed-top shadow">
        <div class="container-fluid">
            <div class="d-inline-block"><button id="sidebar_toggle_button" class="btn btn-primary fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">☰
                </button>
                <span>Welcome, PHP Team</span>
            </div>
            <span class="navbar-brand my-auto mx-auto">
                <img src="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/logos/Logo_200x150(transparent).png" alt="Radix Logo" id="id_radix_logo" class="d-inline-block">
                <h2 id="brand_name" class="ps-2 d-inline-block my-auto">RadixWeb</h2>
            </span>
            <h6 id="id_name" class="navbar-text my-auto">By:- Prasanna&nbsp; Maniya</h6>
        </div>
    </div>


    <div class="offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Exercises</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">


            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day1" aria-expanded="false" aria-controls="collapseExample">
                    Day 1
                </button>
            </p>
            <div class="collapse" id="day1">
                <div class="card card-body">
                    <ol class="list-group list-group-numbered">
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment1/practice1.php'; ?>">Basic Calculator</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment2/practice2.php'; ?>">Greetings</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment3/currency.php'; ?>">Currency Converter</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment4/bmi_html.php'; ?>">BMI</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment5/bmi_practice5_html.php'; ?>">BMI (Modified)</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="<?php echo SITE_URL.'/PHPOPS/Day1/Assignment6/practice6.php'; ?>">Captcha Checker</a></li>
                    </ol>
                </div>
            </div>
            

            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day2" aria-expanded="false" aria-controls="collapseExample">
                    Day 2
                </button>
            </p>
            <div class="collapse" id="day2">
                <div class="card card-body">
                    <ol class="list-group list-group-numbered">
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/SessionPractice/session_practice1.php">Variable Check</a></li>                    
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment1/practice1.php">Various Date Formate</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment2/practice2.php">Age Calculator</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment3/practice3.php">Date Difference</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment4/practice4.php">Validation of Date</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment5/practice5.php">Month Number to Name</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment6/practice6.php">Is Number Power of 2</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment7/practice7.php">Square Root</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/Assignment8/practice8.php">Reverse A Number</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day2/SessionPractice/error_practice2.php">Error Reporting</a></li>
                </ol>
                </div>
            </div>
            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day3" aria-expanded="false" aria-controls="collapseExample">
                    Day 3
                </button>
            </p>
            <div class="collapse" id="day3">
                <div class="card card-body">
                    <ol class="list-group list-group-numbered">
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment1/practice1.php">User Form</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment2/practice2.php">Get Server IP</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment3/practice3.php">Get Browser Description</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment4/practice4.php">Get Current File Name</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment5/practice5.php">Check Current Port</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment6/practice6.php">Check String Contains another String</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment7/practice7.php">Remove Last Word</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment8/practice8.php">Remove White Space</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment9/practice9.php">Remove Non-numeric Characters</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment10/practice10.php">Remove new Line Characters</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day3/Assignment11/practice11.php">Form Validation</a></li>
                </ol>
                </div>
            </div>
            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day4" aria-expanded="false" aria-controls="collapseExample">
                    Day 4
                </button>
            </p>
            <div class="collapse" id="day4">
                <div class="card card-body">
                    <ol class="list-group list-group-numbered">
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment1/practice1.php">Array Methods</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment2/practice2.php">Country and Capitals</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment3/practice3.php">Temprature Average, Min and Max</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment4/practice4.php">Sorting in serialize string</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment5/practice5.php">Insert Item at Position</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment6/practice6.php">Lower and Upper Case</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment7/practice7.php">Merge Array</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment8/practice8.php">Access Element In Array</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day4/Assignment9/practice9.php">Sort Assosiative Array</a></li>
                </ol>
                </div>
            </div>
            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day5" aria-expanded="false" aria-controls="collapseExample">
                    Day 5
                </button>
            </p>
            <div class="collapse" id="day5">
                <div class="card card-body">
                    <ol class="list-group list-group-numbered">
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment1/practice1.php">Remove Comma(s)</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment2/practice2.php">Replace Multiple Characters</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment3/practice3.php">Get Characters after Last '/'</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment4/practice4.php">Insert a string at the specified position</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment5/practice5.php">Remove Beginning Part</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment6/practice6.php">Print Next Character</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment7/practice7.php">Filename From Path</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment8/practice8.php">String In to Array</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment9/practice9.php">First Different character in strings</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment10/practice10.php">Replace Word</a></li>
                    <li class="list-group-item m-0 p-0 border-0"><a class="card-item" href="../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/Day5/Assignment11/practice11.php">Reverse a String</a></li>
                </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-4">
    <!-- <script>
    </script>

</body>



</html> -->
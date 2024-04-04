<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Team OPS</title>
    <link rel="stylesheet" href="../../../3000-Prasann.M-24-PHPOPS//PHP_projects//headerfooter//style.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="py-5"></div>
    <div id="header" class="navbar navbar-expand-sm fixed-top shadow">
        <div class="container-fluid">
            <div class="d-inline-block"><button id="sidebar_toggle_button" class="btn btn-primary fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">☰
                </button>
                <span>Welcome, PHP Team</span>
            </div>
            <span class="navbar-brand my-auto mx-auto">
                <img src="../../../3000-Prasann.M-24-PHPOPS/PHP_projects/headerfooter/logos/Logo_200x150(transparent).png" alt="Radix Logo" id="id_radix_logo" class="d-inline-block">
                <h2 id="brand_name" class="ps-2 d-inline-block my-auto">RadixWeb</h2>
            </span>
            <h6 id="id_name" class="navbar-text my-auto">Prasanna<br>&nbsp;&nbsp;Maniya</h6>
        </div>
    </div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Exercises</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">


            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Day 1
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul>
                    <li><a class="card-item" href="../../../3000-Prasann.M-24-PHPOPS/PHP_projects/phpinfo.php">Display PHP info</a></li>
                    </ul>
                </div>
            </div>
            <p>
                <button class="btn btn-primary bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#day2" aria-expanded="false" aria-controls="collapseExample">
                    Day 2
                </button>
            </p>
            <div class="collapse" id="day2">
                <div class="card card-body">
                    <ul>
                    <li><a class="card-item" href="../../../3000-Prasann.M-24-PHPOPS/PHP_projects/test.php">Testing File</a></li>
                    <li><a class="card-item" href="#">Another action</a></li>
                    <li><a class="card-item" href="#">Something else </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-4"   >

    <!-- <script>
    </script>

</body>



</html> -->
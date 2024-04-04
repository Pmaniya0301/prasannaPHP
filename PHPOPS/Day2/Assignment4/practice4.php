<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: PHP script to check whether a given date is valid or not?</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <p class="text-danger mb-3">Enter Date in DD/MM/YYYY formate and use only '/' delimiter <br></p>

            <label for="year">Enter Date: </label>
            <input type="text" name="date" id="date" placeholder="DD/MM/YYYY"><br>

            <input type="submit" value="Submit" class="mt-4">
        </form>


        <div class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userDate = $_POST["date"];

                $datePattern = "/^(0[1-9]|[12][\d]|3[1])[\/](0[1-9]|1[0-2])[\/]\d\d\d\d$/";
                // $datePattern = "/^\d\d[\/]\d\d[\/]\d\d\d\d$/";

                if (preg_match($datePattern, $userDate)) {
                    $dateParts = explode("/", $userDate);
                    if (checkdate($dateParts[0], $dateParts[1], $dateParts[2])) {
                        echo "Your Entered Date is Correct";
                    } else {
                        echo "Your Entered date is Incorrect!";
                    }
                } else {
                    echo "Date Format or Delimiter is Wrong ";
                }
            }

            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
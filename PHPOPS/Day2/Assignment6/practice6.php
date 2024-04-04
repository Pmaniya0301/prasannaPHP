<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>


<div class="mb-4 fw-bold">Task: PHP program to check if a given positive integer is a power of two</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="number">Enter number: </label>
            <input type="number" name="number" id="number"> <br>

            <input type="submit" value="Submit" class="mt-4">
        </form>
        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = (int) $_POST["number"];

                while (!is_float($number)) {
                    $number /= 2;
                    if ($number == 1) {
                        echo "This Number is Power of 2";
                        break;
                    }
                    if (is_float($number)) {
                        echo "This Number is not Power of 2";
                    }
                }
            }

            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
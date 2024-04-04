<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>

<div class="mb-4 fw-bold">Day 6 - Practice 2: Swap Two Numbers.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="First_number" class="mb-1">Enter First Number:</label>
            <input type="number" name="First_number" class="form-control" placeholder="First Number"><br>
            <label for="Second_number" class="mb-1">Enter Second Number:</label>
            <input type="number" name="Second_number" class="form-control" placeholder="Second Number"><br>

            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            function swapNumbers($number1, $number2)
            {
                echo "Before swapping: <br>First Value: $number1<br>Second Value: $number2<br><br>";
                $number1 += $number2;
                $number2 = $number1 - $number2;
                $number1 -= $number2;

                echo "After swapping: <br>First Value: $number1<br>Second Value: $number2<br><br>";
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number1 = $_POST['First_number'];
                $number2 = $_POST['Second_number'];

                if (trim($number1) == '' || trim($number2) == '') {
                    echo 'Must enter Both the numbers.';
                } else {
                    swapNumbers($number1, $number2);
                }
            }

            ?>

        </div>
    </div>
</div>

<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
<?php
include "../../../lib/common.php"
?>

<div class="mb-4 fw-bold">Day 6 - Practice 3: Program to create Calculator functionality for two numbers as input.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-2 bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="First_number" class="mb-1">Enter First Number:</label>
            <input type="number" name="First_number" class="form-control" placeholder="First Number"><br>
            <label for="Second_number" class="mb-1">Enter Second Number:</label>
            <input type="number" name="Second_number" class="form-control" placeholder="Second Number"><br>

            <button type="submit" id="sub" class="btn btn-success mt-2">Submit</button>
        </form>


        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            function operationCalculation($number1, $number2)
            {
                static $count = 0;
                $result = $number1 + $number2;
                echo "Addition is: $result <br>";
                $result = $number1 - $number2;
                echo "Subtraction is: $result <br>";
                $result = $number1 * $number2;
                echo "Multiplication is: $result <br>";
                $result = round(($number1 / $number2), 2);
                echo "Division is: $result <br>";
                $count++;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number1 = $_POST['First_number'];
                $number2 = $_POST['Second_number'];

                if (trim($number1) == '' || trim($number2) == '') {
                    echo 'Must enter Both the numbers.';
                } else {
                    operationCalculation($number1, $number2);
                    echo "Operation Performed: $count";
                }
            }

            ?>

        </div>
    </div>
</div>

<?php
include "../../../lib/footer.php"
?>
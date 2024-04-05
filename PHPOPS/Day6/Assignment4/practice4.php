<?php
include "../../../lib/common.php"
?>

<div class="mb-4 fw-bold">Day 6 - Practice 4: Program to create Calculator functionality .</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="First_number" class="mb-1">Enter First Number:</label>
            <input type="number" name="First_number" class="form-control" placeholder="First Number"><br>
            <label for="Second_number" class="mb-1">Enter Second Number:</label>
            <input type="number" name="Second_number" class="form-control mb-3" placeholder="Second Number"><br>

            <label for="operations" class="mb-2">Select any Operation:</label>
            <select name="operations" class="form-control" id="operations" class="mb-3">
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
            </select><br>
            <button type="submit" class="btn btn-success mt-3">Submit</button>
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            function operationCalculation($operation)
            {
                $number1 = $GLOBALS['number1'];
                $number2 = $GLOBALS['number2'];
                switch ($operation) {
                    case 'Addition':
                        $result = $number1 + $number2;
                        echo "Addition is: $result";
                        break;
                    case 'Subtraction':
                        $result = $number1 - $number2;
                        echo "Subtraction is: $result";
                        break;
                    case 'Multiplication':
                        $result = $number1 * $number2;
                        echo "Multiplication is: $result";
                        break;
                    case 'Division':
                        $result = round(($number1 / $number2), 2);
                        echo "Division is: $result";
                        break;
                    default:
                        $result = $number1 + $number2;
                        echo "Addition is: $result";
                    }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number1 = $_POST['First_number'];
                $number2 = $_POST['Second_number'];
                $operation = $_POST['operations'];

                if (trim($number1) == '' || trim($number2) == '') {
                    echo 'Must enter Both the numbers.';
                } else {
                    operationCalculation($operation);
                }
            }

            ?>

        </div>
    </div>
</div>

<?php
include "../../../lib/footer.php"
?>
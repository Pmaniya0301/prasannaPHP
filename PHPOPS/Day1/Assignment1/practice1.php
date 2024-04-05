<?php
include "../../../lib/common.php";

function factorial($number)
{
    if ($number == 0) {
        return 1;
    } else {
        $factorial = 1;
        while ($number > 1) {
            $factorial *= $number;
            $number--;
        }
        return $factorial;
    }
}
?>

<div class="mb-4 fw-bold">Task: Basic Calculator</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <p class="mb-3 fs-6 fw-light text-danger">** If you are doing Square_root, Square, Factorial <br> Operation then
            use only First Field</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="First_number" class="mb-2">Enter First Number:</label>
            <input type="number" name="First_number" placeholder="First Number"><br>
            <label for="Second_number" class="mb-3">Enter Second Number:</label>
            <input type="number" name="Second_number" placeholder="Second Number"><br>

            <label for="operations">Select any Operation:</label>
            <select name="operations" id="operations" class="mb-3">
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
                <option value="Modulus">Modulus</option>
                <option value="Square_root">Square-root</option>
                <option value="Square">Square</option>
                <option value="Factorial">Factorial</option>
            </select><br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            $number = $number1 = $number2 = null;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number1 = $_POST['First_number'];
                $number2 = $_POST['Second_number'];
                $operation = $_POST['operations'];

                if ($number1 != '') {
                    switch ($operation) {
                        case 'Addition':
                            $result = $number1 + $number2;
                            echo "Result Is: $result";
                            break;
                        case 'Subtraction':
                            $result = $number1 - $number2;
                            echo "Result Is: $result";
                            break;
                        case 'Multiplication':
                            $result = $number1 * $number2;
                            echo "Result Is: $result";
                            break;
                        case 'Division':
                            $result = round(($number1 / $number2), 2);
                            echo "Result Is: $result";
                            break;
                        case 'Modulus':
                            $result = $number1 % $number2;
                            echo "Result Is: $result";
                            break;
                        case 'Square_root':
                            $result = sqrt($number1);
                            echo "Result Is: $result";
                            break;
                        case 'Square':
                            $result = pow($number1, 2);
                            echo "Result Is: $result";
                            break;
                        case 'Factorial':
                            $result = factorial($number1);
                            echo "Result is: $result";
                            break;
                    }
                }
            }
            ?>

        </div>
    </div>
</div>

<?php
include "../../../lib/footer.php";
?>
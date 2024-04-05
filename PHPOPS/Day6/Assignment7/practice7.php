<?php
include "../../../lib/common.php"
?>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-2 bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="row">
                <input type="number" name="numbersInput[]" class="form-control mt-2  col me-3"
                    placeholder="Enter Number 1" required><br>
                <input type="number" name="numbersInput[]" class="form-control mt-2  col" placeholder="Enter Number 2"
                    required><br>
            </div>
            <div class="row">
                <input type="number" name="numbersInput[]" class="form-control mt-2  col me-3"
                    placeholder="Enter Number 3" required><br>
                <input type="number" name="numbersInput[]" class="form-control mt-2  col" placeholder="Enter Number 4"
                    required><br>
            </div>
            <div class="row">
                <input type="number" name="numbersInput[]" class="form-control mt-2  col me-3"
                    placeholder="Enter Number 5" required><br>
                <input type="number" name="numbersInput[]" class="form-control mt-2  col" placeholder="Enter Number 6"
                    required><br>
            </div>
            <div class="row">
                <input type="number" name="numbersInput[]" class="form-control mt-2  col me-3"
                    placeholder="Enter Number 7" required>
                <div class="col"></div><br>
                <button type="submit" id="sub" class="btn btn-success mt-4 ms-0 row">Submit</button>
            </div>
        </form>


        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php



            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $numbersInput = $_POST['numbersInput'];
                print_r($numbersInput);
                echo '<br>';
                $filterArray = array();
                filterArray($numbersInput);
                sortArray($filterArray);
                print_r($filterArray);
            }

            function checkAbove100($value)
            {
                global $filterArray;
                if ($value > 100) {
                    $filterArray[] = $value;
                }
            }

            function filterArray($numbersInput)
            {
                foreach ($numbersInput as $value) {
                    checkAbove100($value);
                }
            }

            function sortArray($filterArray)
            {
                global $filterArray;
                $temp = null;
                for ($i = count($filterArray) - 1; $i >= 0; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        if ($filterArray[$j - 1] > $filterArray[$j]) {
                            $temp = $filterArray[$j - 1];
                            $filterArray[$j - 1] = $filterArray[$j];
                            $filterArray[$j] = $temp;
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
include "../../../lib/footer.php"
?>
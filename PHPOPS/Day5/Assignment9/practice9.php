<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Create a program to find the first character that is different between two strings.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputFirstText" class="mb-2">Enter First String: </label>
            <input type="text" name="inputFirstText" id="inputFirstText"><br>

            <label for="inputSecondText" class="mb-2">Enter Second String: </label>
            <input type="text" name="inputSecondText" id="inputSecondText"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputFirstText = $_POST['inputFirstText'];
                $inputSecondText = $_POST['inputSecondText'];
                if (trim($inputFirstText) == '' || trim($inputSecondText) == '') {
                    echo 'Any Input Is Empty';
                } else {
                    echo "First Text: $inputFirstText<br>Second Text: $inputSecondText<br>";
                    for ($i=0; $i < strlen($inputFirstText) && $i < strlen($inputSecondText); $i++) { 
                        if ($inputFirstText[$i] != $inputSecondText[$i]) {
                            echo "Output: {$inputFirstText[$i]}  Vs  {$inputSecondText[$i]}";
                            break;
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Create a program that can remove comma(s) from the string.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputText" class="mb-2">Enter String: </label>
            <input type="text" name="inputText" id="inputText"><br>
            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputText = $_POST['inputText'];
                if (trim($inputText) == '') {
                    echo 'Input Is Empty';
                } else {
                    echo "Entered String: $inputText <br>";
                    echo 'Output String: ' . str_replace(',', '', $inputText);
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Create a program to replace the first 'PHP' of the following string with 'Java'.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputText" class="mb-2">Enter Text: </label>
            <input type="text" name="inputText" id="inputText"><br>

            <label for="inputReplace" class="mb-2">Enter Word To Replace: </label>
            <input type="text" name="inputReplace" id="inputReplace"><br>

            <label for="inputChangeString" class="mb-2">Enter New Word: </label>
            <input type="text" name="inputChangeString" id="inputChangeString"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputText = $_POST['inputText'];
                $inputChangeString = $_POST['inputChangeString'];
                $inputReplace = $_POST['inputReplace'];
                if (trim($inputText) == '' || trim($inputChangeString) == '' || trim($inputReplace) == '') {
                    echo 'Any Input Is Empty';
                } else {
                    echo "First Text: $inputText<br>Second Text: $inputChangeString<br>";
                    echo strpos($inputText,$inputReplace);
                    echo "Output: " . substr_replace($inputText, $inputChangeString, strpos($inputText,$inputReplace), strlen($inputReplace));
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
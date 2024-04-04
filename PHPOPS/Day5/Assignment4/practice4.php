<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Create a program to insert a string at the specified position in a string.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputText" class="mb-2">Enter String: </label>
            <input type="text" name="inputText" id="inputText"><br>

            <label for="inputStartWord" class="mb-2">Enter Start Word(Case Sensitive): </label>
            <input type="text" name="inputStartWord" id="inputStartWord"><br>

            <label for="inputEndWord" class="mb-2">Enter End Word(Case Sensitive): </label>
            <input type="text" name="inputEndWord" id="inputEndWord"><br>

            <label for="inputWord" class="mb-2">Enter Word To Enter(Case Sensitive): </label>
            <input type="text" name="inputWord" id="inputWord"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $inputText = $_POST['inputText'];
                $inputStartWord = $_POST['inputStartWord'];
                $inputEndWord = $_POST['inputEndWord'];
                $inputWord = $_POST['inputWord'];

                if (trim($inputText) == '' || trim($inputStartWord) == '' || trim($inputEndWord) == '' || trim($inputWord) == '') {
                    echo 'Input Is Empty';
                } else {
                    echo "Entered String: $inputText <br>Start Word: $iinputStartWord <br>End Word: $inputEndWord <br>Word To be Enter: $inputWord <br>";
                    echo "<br>Output Text: " . substr_replace($inputText, $inputWord . ' ', strpos($inputText, $inputStartWord), (strpos($inputText, $inputEndWord) - strpos($inputText, $inputStartWord)));
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
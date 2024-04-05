<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Create a program to remove a part of a string from the beginning.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputText" class="mb-2">Enter Email: </label>
            <input type="text" name="inputText" id="inputText"><br>

            <label for="inputCharacter" class="mb-2">Enter Character: </label>
            <input type="text" name="inputCharacter" id="inputCharacter" maxlength="1"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputText = $_POST['inputText'];
                $inputCharacter = $_POST['inputCharacter'];
                if (trim($inputText) != '' || trim($inputCharacter) != '') {
                    if (preg_match("/^[\w._-]+@[\w.-]+\.[a-zA-Z]{2,}$/", $inputText)) {
                        echo "Entered Email: $inputText <br>";
                        echo "Output: " . substr($inputText, strpos($inputText, $inputCharacter) + 1, strlen($inputText));
                    } else {
                        echo 'Invalid Email!';
                    }
                } else {
                    echo 'Input Is Empty';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
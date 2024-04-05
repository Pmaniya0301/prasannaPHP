<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Create a program to print the next character of a specific character.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputCharacter" class="mb-2">Enter Character: </label>
            <input type="text" name="inputCharacter" id="inputCharacter" maxlength="1"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputCharacter = $_POST['inputCharacter'];
                if (trim($inputCharacter) == '') {
                    echo 'Input Is Empty';
                } elseif (!preg_match('/[a-zA-Z]/', $inputCharacter) ) {
                    echo 'Enter Only characters a-z Or A-Z';
                } else {
                    if (ord($inputCharacter) == 122) {
                        echo "Next Character: " . chr(97);
                    }elseif (ord($inputCharacter) == 90) {
                        echo "Next Character: " . chr(65);
                    }else{
                        echo "Next Character: " . chr(ord($inputCharacter) + 1);
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Create a program to get the filename component of the following path.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputPath" class="mb-2">Enter Path: </label>
            <input type="text" name="inputPath" id="inputPath"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputPath = $_POST['inputPath'];
                if (trim($inputPath) == '') {
                    echo 'Input Is Empty';
                } else {
                    $position = strrpos($inputPath,'/');
                    $withExtenstion = substr($inputPath,$position + 1, strlen($inputPath));
                    echo "File Name in Your Path is: " . substr($withExtenstion, 0, strpos($withExtenstion, '.'));
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
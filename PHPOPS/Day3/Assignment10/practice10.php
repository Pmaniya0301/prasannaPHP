<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task:  PHP program to remove the new lines (characters) from a string. </div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="inputText" class="mb-2">Enter String: </label>
        <textarea name="inputText" id="inputText" cols="30" rows="3"></textarea><br>

        <input type="submit" value="Submit" class="btn btn-success mt-4">
    </form>

    <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $inputText = $_POST['inputText'];
               echo "Entered String: $inputText <br>";
               $outputString = preg_replace("/\n/", "", $inputText);
               echo "Output String: $outputString";
        }
        ?>
    </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
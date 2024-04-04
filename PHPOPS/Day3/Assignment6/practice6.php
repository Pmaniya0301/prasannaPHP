<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: a PHP program that checks if a string contains another string.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="firstString" class="mb-2">Enter First String: </label>
        <input type="text" name="firstString" id="firstString"><br>

        <label for="secondString" class="mb-2">Enter Second String: </label>
        <input type="text" name="secondString" id="secondString"><br>

        <input type="submit" value="Submit" class="btn btn-success me-3">
    </form>

    <?php
    ?>

    <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

               $firstString = $_POST['firstString'];
               $secondString = $_POST['secondString'];
               
               echo "First String: $firstString <br>";
               echo "Second String: $secondString <br>";

               if( preg_match("/$secondString/i", $firstString) == 1){
                echo "<p class='text-success mt-3'>First string Contains Second String</p>";
               }else{
                echo "<p class='text-danger mt-3'>First string not Contains Second String</p>";
               }
        }
        ?>
    </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
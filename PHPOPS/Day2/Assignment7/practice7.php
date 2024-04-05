<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task:   PHP program to compute and return the square root of a given number</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="number">Enter number: </label>
            <input type="number" name="number" id="number"><br>

            <input type="submit" value="Submit" class="mt-4">
        </form>
        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                echo "This is the Squre root of Entered Number: " . round(sqrt((int) $_POST["number"]), 2);
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
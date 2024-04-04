<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: PHP script to change month number to month name.</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="Month">Enter Month in number: </label>
            <input type="number" name="Month" id="Month" max="12"> <br>

            <input type="submit" value="Submit" class="mt-4">
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $date = date_create();
                echo date("F", mktime(0, null, null, $_POST["Month"], null, null));
            }

            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
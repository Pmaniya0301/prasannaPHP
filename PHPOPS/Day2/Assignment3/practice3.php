<?php include "../../../lib/common.php" ?>

<div class="mb-4 fw-bold">Task: PHP script to calculate the difference between two dates</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="first_date">Enter First Date: </label>
            <input type="date" name="first_date" id="first_date"><br>

            <label for="second_date" class="mt-3">Enter Second Date: </label>
            <input type="date" name="second_date" id="second_date"><br>

            <input type="submit" value="Submit" class="mt-5">
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // $result =  date('Y') - $_POST["year"];
                // echo 'Age According to Your year is: ' . $result . '';
                echo date_interval_format(date_diff(date_create($_POST['first_date']), date_create($_POST['second_date'])), "Year: %Y <br> Month: %M <br> Day:%D");
            }
            ?>

        </div>

    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
<?php include "../../../lib/common.php" ?>

<div class="mb-4 fw-bold">Task: Program which accepts Year from the select box and display computed age
based on the Selected Value</div>


<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="year">Enter Year</label>
            <input type="number" name="year" id="year" maxlength="4" max="2024"><br>

            <input type="submit" value="Submit" class="mt-4">
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $result =  date('Y') - $_POST["year"];
                echo 'Age According to Your year is: ' . $result . '';
            }
            ?>

        </div>

    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
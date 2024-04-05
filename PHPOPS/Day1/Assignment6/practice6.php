<?php
include "../../../lib/common.php";
?>

<div class="mb-4 fw-bold">Task: Implement a simple web-application (see picture below) that asks a question from
the user and evaluates if the answer is correct.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <div>
            <img src="image.jpeg" alt="image">
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="radio" name="animal" value="Zibra" class="mt-3" id="Zibra" <?php if (isset($gender) && $gender == "Zibra") echo "checked"; ?>> Zibra<br>
            <input type="radio" name="animal" value="Horse" id="Horse" <?php if (isset($gender) && $gender == "Horse") echo "checked"; ?>> Horse<br>
            <input type="radio" name="animal" value="Dog" id="Dog" <?php if (isset($gender) && $gender == "Dog") echo "checked"; ?>> Dog<br>
            <input type="radio" name="animal" value="Cow" id="Cow" <?php if (isset($gender) && $gender == "Cow") echo "checked"; ?>> Cow<br>
            <button type="submit" class="mt-3">Submit</button>
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $animal = $_POST['animal'];

                if ($animal == 'Zibra') {
                    echo "<p class='text-success mt-3'>Correct!</p>";
                } else {
                    echo "<p class='text-danger mt-3'>You are Wrong</p>";
                }
            }

            ?>
        </div>
    </div>

</div>
</div>

<?php
include "../../../lib/footer.php";
?>
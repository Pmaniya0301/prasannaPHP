<?php
include "../../../lib/common.php";
?>

<div class="mt-4 fs-5 fw-bold text-dark">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $height = $_POST["height"];
        $weight = $_POST["weight"];

        if (is_numeric($height) && is_numeric($weight)) {
            $result = $weight / ($height * $height);
            echo "Your Output is:" . round($result, 2);
        } else {
            echo "Enter Correct Value";
        }
    }
    ?>

</div>

<?php
include "../../../lib/footer.php";
?>
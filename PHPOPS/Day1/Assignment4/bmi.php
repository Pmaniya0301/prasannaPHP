<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>

<div class="mt-4 fs-5 fw-bold text-dark">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $height = $_POST["height"];
        $weight = $_POST["weight"];

        if (is_numeric($height) && is_numeric($weight)) {
            $result = $weight / ($height * $height);
            echo round($result, 2);
        } else {
            echo "Enter Correct Value";
        }
    }
    ?>

</div>

<?php

include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
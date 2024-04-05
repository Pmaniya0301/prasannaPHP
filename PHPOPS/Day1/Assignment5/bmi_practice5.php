<?php
include "../../../lib/common.php";
?>

<div class="mt-4 fs-5 fw-bold text-dark">

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $error = false;
        $patternForHeight = "/^([0-9]{2}|[0-9]{1})[.]{1}([0-9]{2}|[0-9]{1})$/";
        $patternForWeight = "/[0-9]{1,3}/";

        if (!preg_match($patternForHeight, $height)) {
            echo "Enter Proper Height Value in (zz.zz) Format";
            $error = true;
        } elseif (!preg_match($patternForWeight, $weight)) {
            echo "Enter Proper Height Value in (zz[z]) Format<br>";
            $error = true;
        }

        if (!$error) {
            $result = $weight / ($height * $height);
            echo round($result, 2);
        }
    }
    ?>

</div>

<?php
include "../../../lib/footer.php";
?>
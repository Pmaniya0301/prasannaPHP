<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Program to check behaviour of isset, is_null and empty.</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <?php

        $variableNull = null;
        $variableZero = 0;
        $variableBlankString = '';
        $variableBlankArray = array();

        echo "isset with undefined variabel \"" . trueFalsePrinter(isset($undefinedVariable)) . "\"<br>";
        echo "is_null with undefined variabel \"" . trueFalsePrinter(is_null($undefinedVariable)) . "\"<br>";
        echo "empty with undefined variabel \"" . trueFalsePrinter(empty($undefinedVariable)) . "\"<br><br>";

        echo "isset with 0 value to variable \"" . trueFalsePrinter(isset($variableZero)) . "\"<br>";
        echo "is_null with 0 value to variable \"" . trueFalsePrinter(is_null($variableZero)) . "\"<br>";
        echo "empty with 0 value to variable \"" . trueFalsePrinter(empty($variableZero)) . "\"<br><br>";

        echo "isset with null value to variable \"" . trueFalsePrinter(isset($variableNull)) . "\"<br>";
        echo "is_null with null value to variable \"" . trueFalsePrinter(is_null($variableNull)) . "\"<br>";
        echo "empty with null value to variable \"" . trueFalsePrinter(empty($variableNull)) . "\"<br><br>";

        echo "isset with empty string \"" . trueFalsePrinter(isset($variableBlankString)) . "\"<br>";
        echo "is_null with empty string \"" . trueFalsePrinter(is_null($variableBlankString)) . "\"<br>";
        echo "empty with empty string \"" . trueFalsePrinter(empty($variableBlankString)) . "\"<br><br>";

        echo "isset with empty array \"" . trueFalsePrinter(isset($variableBlankArray)) . "\"<br>";
        echo "is_null with empty array \"" . trueFalsePrinter(is_null($variableBlankArray)) . "\"<br>";
        echo "empty with empty array \"" . trueFalsePrinter(empty($variableBlankArray)) . "\"<br><br>";

        function trueFalsePrinter($value)
        {
            if ($value == 1) {
                return 'true';
            } else {
                return 'false';
            }
        }

        ?>

    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
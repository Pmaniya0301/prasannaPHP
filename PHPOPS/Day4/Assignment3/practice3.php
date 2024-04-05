<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: PHP script to calculate and display average temperature, five lowest and highest
temperatures.</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

        $tempratureArray = explode(", ", $month_temp);

        $average = round((array_sum($tempratureArray)/count($tempratureArray)), 2);
        echo "Average of Temprature is : " . $average . "<br>";

        sort($tempratureArray);
        echo "List of five lowest temperatures : ";
        printArray(array_splice($tempratureArray, 0, 5));

        rsort($tempratureArray);
        echo "<br>List of five highest temperatures : ";
        printArray(array_splice($tempratureArray, 0, 5));

        function printArray($tempratureArray) {
            foreach ($tempratureArray as $value) {
                echo "&nbsp;&nbsp;" . $value;
            }
        }
        ?>
    </div>
</div>
<?php include "../../../lib/footer.php"  ?>
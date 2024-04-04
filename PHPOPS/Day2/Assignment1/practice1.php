<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>

<div class="mb-4 fw-bold">Task: PHP program that gets the system date and converts it in different formats.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <?php
        echo "1. " . date('d-M-Y') . "<br>";
        echo "2. " . date('m d Y H:i') . "<br>";
        echo "3. " . date('dS F Y H:i:s A') . "<br>";
        $date = new DateTime();

        $date = date_create();

        echo "Tomorrow Date: " . date_format(date_modify($date, "+1 days"), "Y-m-d") . "<br>";

        $dateForNextWeek = date_create();

        echo "Next Week Date: " . date_format(date_modify($dateForNextWeek, "+7 days"), "Y-m-d") . "<br>";

        $dateForNextMonday = date_create();

        echo "Next Monday Date: " . date_format(date_modify($dateForNextMonday, "Monday next week"), "Y-m-d") . "<br>";

        ?>

    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
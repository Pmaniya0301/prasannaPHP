<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task:  PHP script to print "second" and Red from the array</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <div id="resultArea" class="m-4 fs-5 fw-bold text-dark">
            <?php
            $color = array(
                "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
                "numbers" => array(1, 2, 3, 4, 5, 6),
                "holes" => array("First", 5 => "Second", "Third")
            );

            echo 'Second from array : ' . $color["holes"][5] . '<br>';
            echo 'Red from array : ' . $color["color"]['a'];

            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
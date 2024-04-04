<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: PHP function to change the following array's all values to upper or lower case. </div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
            $fllipedColor = array_flip($Color);
            $fllipedColor = array_change_key_case($fllipedColor,CASE_UPPER);
            $upperColor = array_flip($fllipedColor);
            $fllipedColor = array_change_key_case($fllipedColor,CASE_LOWER);
            $lowerColor = array_flip($fllipedColor);

            print_r($upperColor);
            echo '<br><br>';
            print_r($lowerColor);


            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
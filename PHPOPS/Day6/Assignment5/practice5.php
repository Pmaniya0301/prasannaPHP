<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>

<div class="mb-4 fw-bold">Day 6 - Practice 5: Program to create Calculator functionality for two numbers as input.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-2 bg-body rounded">

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php

            $arrayOfElement = array(
                'a' => 100,
                'b' => 200,
                'c' => array('c1' => 300, 'c2' => 400),
                'd' => 500,
                'e' => array('e1' => 600, 'e2' => 700)
            );
            
            $singleDimension = array();
            arrayInSingleD($arrayOfElement);
            var_dump($singleDimension);

            function arrayInSingleD($arrayOfElement)
            {
                array_walk_recursive($arrayOfElement, 'pushInArray');
            }

            function pushInArray($value, $key)
            {
                global $singleDimension;
                $singleDimension += [$key => $value];
            }
            ?>
        </div>
    </div>
</div>

<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
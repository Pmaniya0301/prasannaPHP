<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: a PHP program to merge (by index).</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <div id="resultArea" class="m-4 fs-5 fw-bold text-dark">
            <?php
            $array1 = array (array(77, 87), array(23, 45));
            // you can try for this various Situations
            // $array2 = array (array(77, 87), array(23, 45));
            $array2 = array ("w3resource", array(82, 91));
            // $array2 = array (array(77, 87), "w3resource");
            // $array2 = array ("w3resource", "com");
            $resultArray = array();

            for ($i=0; $i < count($array1) && $i < count($array2); $i++) { 
                if (is_array($array1[$i]) && is_array($array2[$i])) {
                    $array1[$i] = array_merge($array1[$i], $array2[$i]);
                    $resultArray[$i] = array($array1[$i]);
                } elseif (is_array($array1[$i]) && !is_array($array2[$i])) {
                    array_unshift($array1[$i], $array2[$i]);
                    $resultArray[$i] = $array1[$i];
                } elseif (!is_array($array1[$i]) && is_array($array2[$i])) {
                    array_unshift($array2[$i], $array1[$i]); // although is showing error code will run smoothly....
                    $resultArray[$i] = $array2[$i];
                } elseif (!is_array($array1[$i]) && !is_array($array2[$i])) {
                    $array1[$i] = array($array1[$i], $array2[$i]);
                    $resultArray[$i] = array($array1[$i], $array2[$i]);
                }
            }

            var_dump($resultArray);

            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
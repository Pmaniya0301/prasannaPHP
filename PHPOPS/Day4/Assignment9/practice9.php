<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: PHP script to sort the associative array</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">

        <div id="resultArea" class="m-4 fs-5 fw-bold text-dark">
            <?php
            $personDetail =  array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

            echo "Ascending order sort by value : ";
            asort($personDetail);
            printArray($personDetail);
            
            echo "Ascending order sort by key : ";
            ksort($personDetail);
            printArray($personDetail);
        
            echo "Descending order sort by value : ";
            arsort($personDetail);
            printArray($personDetail);

            echo "Ascending order sort by key : ";
            krsort($personDetail);
            printArray($personDetail);


            function printArray($arrayOfElements)
            {
                foreach ($arrayOfElements as $key => $value) {
                    echo "&nbsp;&nbsp;&nbsp;" . $key . "  =>  " . $value;
                }
                echo "<br><br>";
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
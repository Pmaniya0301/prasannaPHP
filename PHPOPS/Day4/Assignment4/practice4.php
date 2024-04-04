<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Display Department, name and salary Who has more than
10,000 salary</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        
        $serializeData = 'a:3:{s:3:"PHP";a:3:{i:0;a:2:{s:4:"name";s:3:"Jay";s:6:"salary";i:8000;}i:1;a:2:{s:4:"name";s:3:"Raj";s:6:"salary";i:15000;}i:2;a:2:{s:4:"name";s:5:"Mihir";s:6:"salary";i:12000;}}s:4:"Flex";a:1:{i:0;a:2:{s:4:"name";s:5:"Vijay";s:6:"salary";i:14000;}}s:6:"System";a:1:{i:0;a:2:{s:4:"name";s:6:"Kishan";s:6:"salary";i:5000;}}}';

        $unserializeData = unserialize($serializeData);

        foreach($unserializeData as $key => $value){
            
            foreach($unserializeData[$key] as $newKey => $newValue){
                if ($newValue['salary']>10000) {
                    echo $key .': ' . $newValue['name'] . " has " . $newValue['salary'] . '<br>';
                }
            }
        }
        ?>
    </div>
</div>
<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: PHP script to get the current file name.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        $phpSelf = $_SERVER['PHP_SELF'];
        echo "Using PHP_SELF: $phpSelf" . "<br>";

        $scriptName = $_SERVER['SCRIPT_NAME'];
        echo "Using SCRIPT_NAME: $scriptName" . "<br>";
        ?>
    </div>
</div>
<?php include "../../../lib/footer.php"  ?>
<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: PHP Scipt for browser detection script.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        $server_software_info = $_SERVER['SERVER_SOFTWARE'];
        echo "Browser Description: $server_software_info" . "<br>";
        ?>
    </div>
</div>
<?php include "../../../lib/footer.php"  ?>
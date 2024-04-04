<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>

<div class="mb-4 fw-bold">Task: PHP script to get the server IP address.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        $server_ip = $_SERVER['SERVER_ADDR'];
        echo "Server's IP Address: $server_ip" . "<br>";
        ?>
    </div>
</div>
<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
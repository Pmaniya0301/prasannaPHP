<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task:  PHP script, to check whether the page is called from 'https' or 'http'.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded mt-4 fs-5 fw-bold text-dark">
        <?php
        $serverPort = $_SERVER['SERVER_PORT'];

        if ($serverPort == 80) {
            echo 'The currunt script is using port 80 and HTTP';
        } elseif ($serverPort == 443) {
            echo 'The currunt script is using port 443 and HTTPS';
        }
        ?>
    </div>
</div>
<?php include "../../../lib/footer.php"  ?>
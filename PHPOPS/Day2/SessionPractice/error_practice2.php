<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Program For Practicing to Print Error</div>
<?php
ini_set('display_errors', '1');

error_reporting(E_ALL);

echo "<br><br>This is Warning";
$a = $b;

echo "<br><br>This is Error";
$x = 1 / 0;
?>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
<?php
include "../../../lib/common.php";
?>
<div class="mt-4 fs-5 fw-bold text-dark">

    <?php
    $doller = $_POST["dollar_value"];
    $euro = round(($doller *  0.93), 2);
    echo "The Value of Entered Dollers into Euro is: ";
    ?>

    <span class="text-success"><?php echo $euro; ?></span>
</div>

<?php
include "../../../lib/footer.php";
?>
<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>

<div class="mb-4 fw-bold">Task: Simple currency calculator utility-program calculate currency conversions from dollars to euros</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <form action="calculate.php" method="post">
            <label for=" dollar_value" class="mb-5">Enter Dollars:</label>
            <input type="number" name="dollar_value" placeholder="Enter Value in $"><br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
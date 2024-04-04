<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>
<div class="mb-4 fw-bold">Task: Modify BMI-application (exercise 4) so that user input is validated. The maximum
length for height is 4 characters and the value must be float value. The maximum
length for weight is 3 characters and the value must be an integer. </div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">


        <form action="bmi_practice5.php" method="post">
            <label for="weight" class="mb-3">Enter Weight(in kilograms):</label>
            <input type="text" name="weight" placeholder="Enter Weight in KiloGrams" maxlength="3"><br>
            <label for="height" class="mb-5">Enter Height(in meters):</label>
            <input type="text" name="height" placeholder="Enter Height in Meters(zz.zz)" maxlength="5"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
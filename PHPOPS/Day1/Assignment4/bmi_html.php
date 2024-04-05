<?php
include "../../../lib/common.php";
?>
<div class="mb-4 fw-bold">Task: Implement a simple calculator utility-program, which can be used to calculate a person's Body Mass Index (BMI).</div>


<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <form action="bmi.php" method="post">
            <label for="weight" class="mb-3">Enter Weight(in kilograms):</label>
            <input type="text" name="weight" placeholder="Enter Weight in KiloGrams"><br>
            <label for="height" class="mb-5">Enter Height(in meters):</label>
            <input type="text" name="height" placeholder="Enter Height in Meters"><br>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>
</div>

<?php
include "../../../lib/footer.php";
?>
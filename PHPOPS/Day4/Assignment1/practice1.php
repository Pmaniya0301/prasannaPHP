<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task: Create one form with some of the input boxes, and apply below functions of array on
values of that input boxes.</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="result.php" method="post">

            <div class="form-group mt-2">
                <label for="element1">Input 1st Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element1">
            </div>
            <div class="form-group mt-2">
                <label for="element2">Input 2nd Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element2">
            </div>
            <div class="form-group mt-2">
                <label for="element3">Input 3rd Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element3">
            </div>
            <div class="form-group mt-2">
                <label for="element4">Input 4th Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element4">
            </div>
            <div class="form-group mt-2">
                <label for="element5">Input 5th Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element5">
            </div>
            <div class="form-group mt-2">
                <label for="element6">Input 6th Element: </label>
                <input type="text" class="form-control" name="elements[]" id="element6">
            </div>
            <div class="form-group mt-4">
                <input type="submit" value="Submit" class=" form-control btn btn-success me-3"><br>
            </div>
        </form>

    


    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
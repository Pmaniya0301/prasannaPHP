<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>
<div class="mb-4 fw-bold">Task:  PHP script that inserts an input item in an array in a given input position</div>
<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="inputNumber" class="mb-2">Enter Number to Add Specific Position: </label>
            <input type="number" name="inputNumber" id="inputNumber"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-4">
        </form>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php
            $arrayOfElement = array(1, 2, 3, 4, 5);
            echo "Array Before Insert : ";
            printArray($arrayOfElement);


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                array_splice($arrayOfElement, (int) $_POST['inputNumber'], 0, '$');
                echo "<br><br>Array After Insert : ";
                printArray($arrayOfElement);
            }

            function printArray($arrayOfElements)
            {
                foreach ($arrayOfElements as $value) {
                    echo "&nbsp;&nbsp;&nbsp;" . $value;
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
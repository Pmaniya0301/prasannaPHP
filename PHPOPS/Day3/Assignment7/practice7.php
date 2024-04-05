<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: PHP program that removes the last word from a string.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="inputText" class="mb-2">Enter String: </label>
        <input type="text" name="inputText" id="inputText"><br>

        <input type="submit" value="Submit" class="btn btn-success mt-4">
    </form>

    <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

               $inputText = $_POST['inputText'];
               
               echo "Entered String: $inputText <br>";

               echo 'Output String: '.preg_replace("/\s([\S]{1,})$/",'', $inputText);

            //    $arrayOfWords = preg_split("/\s/", $inputText);

            //    $newString = "";

            //    //can do by the array_pop() and implode() array method
            //    for( $i = 0; $i < count($arrayOfWords) - 1; $i++ ){
            //         $newString .= $arrayOfWords[$i]." ";
            //    }

            //    echo "Output String: $inputText";
        }
        ?>
    </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
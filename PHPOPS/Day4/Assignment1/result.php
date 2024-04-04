<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>

<div class="mt-4 fs-5 fw-bold text-dark">

    <?php
    $elements = $_POST["elements"];
    // $elements = array("shdgj", "jdshg", "jdgh", "sajkdg", "jdshg", "dhg");
    echo "Your Entered Elements are:   ";
    printArray($elements);

    // a. min ()
    // b. max ()
    // c. count ()
    // d. reverse ()
    // e. array_chunk ()
    // f. serialize ()
    // g. array_unique ()
    // h. array_keys /array_values
    // i. array_rand ()
    // j. assort ()
    // k. ksort ()

    echo "</br></br>min() => " . min($elements);

    echo "</br>max() => " . max($elements);

    echo "</br>count() => " . count($elements);

    echo "</br>array_reverse() => ";
    $reverseArray = array_reverse($elements);
    printArray($reverseArray);

    echo "</br>array_chuk() => ";
    $brokenArray = array_chunk($elements, 2);
    for ($i = 0; $i < count($brokenArray); $i++) {
        echo "$i.";
        printArray($brokenArray[$i]);
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    echo "</br>serialize() => " . serialize($elements);

    echo "</br>array_unique() => ";
    $uniqueValues = array_unique($elements);
    printArray($uniqueValues);

    echo "</br>array_keys() => ";
    $keysOfArray = array_keys($elements);
    printArray($keysOfArray);

    echo "</br>array_values() => ";
    $valuesOfArray = array_values($elements);
    printArray($valuesOfArray);

    echo "</br>asort() => ";
    asort($elements);
    printArray($elements);

    echo "</br>ksort() => ";
    ksort($elements);
    printArray($elements);

    function printArray($arrayOfElements)
    {
        foreach ($arrayOfElements as $value) {
            echo "&nbsp;&nbsp;&nbsp;" . $value;
        }
    }
    ?>

</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
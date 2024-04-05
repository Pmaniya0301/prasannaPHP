<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task:  PHP script, and perform operations like Display the first element, Display the capital and country name and Sort the list by the name of the country.</div>
<div class="align-self-center justify-content-center">
    <!-- <div class="d-inline border border-2 p-4 shadow bg-body rounded"> -->
    <!-- <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark"> -->
    <div>
        <?php

        $ceu = array(
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
            "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
            "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" =>
            "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
            "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
            "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia",
            "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
            "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" =>
            "Vienna", "Poland" => "Warsaw"
        );

        echo "Accessing First Element: " . $ceu["Italy"] . "</br></br>";
        echo "Table which shows Country and Capital";
        printCountryTable($ceu);

        ksort($ceu);
        echo "Table after the sort by Country Name";
        printCountryTable($ceu);

        function printCountryTable($ceu)
        {
            echo "<table class='table table-striped'>
        <thead>
          <tr>
            <th scope='col'>Country Name</th>
            <th scope='col'>Capital Name</th>
          </tr>
        </thead><tbody class = 'table-group-divider'>";
            foreach ($ceu as $Country => $Capitals) {
                echo "<tr><td>$Country</td><td>$Capitals</td></tr>";
            }
            echo "</tbody></table></br></br>";
        }
        ?>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
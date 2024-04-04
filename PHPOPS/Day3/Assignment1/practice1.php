<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php"; ?>

<div class="mb-4 fw-bold">Task: Create a basic form with input fields.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <label for="full_name" class="mb-2">Enter Full Name: </label>
            <input type="text" name="full_name" id="full_name"><br>

            <label for="username" class="mb-2">Enter User Name: </label>
            <input type="text" name="username" id="username"><br>

            <label for="email" class="mb-2">Enter Email Id: </label>
            <input type="text" name="email" id="email"><br>

            <label for="gender" class="mb-2 me-2">Select Gender: </label>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="gender" class="me-3">Male </label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="gender">Female </label><br>

            <label for="dob" class="mb-2">Select Date of Birth: </label>
            <label for="date" class="ms-2">Date: </label>
            <select name="date" id="date" > 
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <label for="month" class="ms-2">Month: </label>
            <select name="month" id="month">
                <?php
                $months = array("January", "February", "March", "April", "May", "June", "July", "August", "Suptember", "October", "November", "December");
                foreach ($months as $x => $y) {
                    echo "<option value='$x'>$y</option>";
                }
                ?>
            </select>
            <label for="year" class="ms-2">Year: </label>
            <select name="year" id="year">
                <?php
                for ($i = 1950; $i <= 2050; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select><br>

            <label for="hobby" class="mb-4 me-3">Select Hobby: </label>

            <input type="checkbox" name="Reading" value="Reading">
            <label for="reading" class="me-2">Reading</label>
            <input type="checkbox" name="Travelling" value="Travelling">
            <label for="Travelling" class="me-2">Travelling</label>
            <input type="checkbox" name="Photography" value="Photography">
            <label for="Photography" class="me-2">Photography</label><br>

            <input type="submit" value="Submit" class="btn btn-success me-3">
            <input type="reset" value="Reset" class="btn btn-warning" onclick="document.getElementById('resultArea').innerHTML = '' "><br>
        </form>

        <?php
        ?>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (!(empty($_POST['full_name']) && empty($_POST['username']) && empty($_POST['email']) && empty($_POST['gender']) && (empty($_POST['Reading']) || empty($_POST['Travelling']) || empty($_POST['Photography'])))) {

                    $fullName = $_POST['full_name'];
                    $userName = $_POST['username'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];
                    $hobby = $_POST['Reading'] . " " . $_POST['Travelling'] . " " . $_POST['Photography'];
                    if (checkdate($_POST["date"], $_POST["month"] + 1, $_POST["year"])) {
                        $dateOfBirth = $_POST['date'] . "-" . $months[$_POST['month']] . "-" . $_POST['year'] . "<br>";
                    } else {
                        $dateOfBirth = "date is invalid";
                    }

                    if ($dateOfBirth == "date is invalid") {
                        echo "<p class='text-danger'>$dateOfBirth</p>";
                    } else {
                        echo "Full Name: " .  $fullName . "<br>";
                        echo "User Name: " .  $userName . "<br>";
                        echo "Email: " .  $email . "<br>";
                        echo "Gender: " .  $gender . "<br>";
                        echo "Hobby: " .  $hobby . "<br>";
                        echo "Date Of Birth: " .  $dateOfBirth . "<br>";
                    }
                } else {
                    echo "<span class='text-danger'>Some value to be enter is missing</span>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";  ?>
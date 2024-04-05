<?php include "../../../lib/common.php" ?>
<div class="mb-4 fw-bold">Task: Write a form with 4 inputs like email, hostname, telephone number (Indian number
only) and IP address when submitting the form its validate all fields and display
results in the result area.</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


            <label for="email" class="mb-2">Enter Email Id: </label>
            <input type="text" name="email" id="email"><br>

            <label for="host_name" class="mb-2">Enter Host Name: </label>
            <input type="text" name="host_name" id="host_name"><br>

            <label for="mobileNumber" class="mb-2">Enter Mobile Number: </label>
            <input type="text" name="mobileNumber" id="mobileNumber"><br>

            <label for="ipAddress" class="mb-2">Enter IP Number: </label>
            <input type="text" name="ipAddress" id="ipAddress"><br>

            <input type="submit" value="Submit" class="btn btn-success mt-2">
        </form>

        <?php
        ?>

        <div id="resultArea" class="mt-4 fs-5 fw-bold text-dark">
            <?php

            function validate($email, $host_name, $mobileNumber, $ipAddress)
            {
                $error = false;
                if (!preg_match("/^[\w._-]+@[\w.-]+\.[a-zA-Z]{2,}$/", $email)) {
                    echo "<p class = 'text-danger'>Email Is Wrong</p>";
                    $error = true;
                }
                if (!preg_match('/^[\w]{1,}[.][\w]{1,}$/', $host_name)) {
                    echo "<p class = 'text-danger'>Host Name Is Wrong</p>";
                    $error = true;
                }
                if (!preg_match("/^([+]?91?|0?)[6789][\d]{9}$/", $mobileNumber)) {
                    echo "<p class = 'text-danger'>Mobile Number Is Wrong</p>";
                    $error = true;
                }
                if (!preg_match('/^((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)\.?\b){4}$/', $ipAddress)) {
                    echo "<p class = 'text-danger'>IP Address Is Wrong</p>";
                    $error = true;
                }
                return $error;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $email = $_POST['email'];
                $host_name = $_POST['host_name'];
                $mobileNumber = $_POST['mobileNumber'];
                $ipAddress = $_POST['ipAddress'];

                if (!validate($email, $host_name, $mobileNumber, $ipAddress)) {
                    echo "<p class='text-success'>Email : $email</p>";
                    echo "<p class='text-success'>Host Name : $host_name</p>";
                    echo "<p class='text-success'>Mobile Number : $mobileNumber</p>";
                    echo "<p class='text-success'>IP Address : $ipAddress</p>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../../../lib/footer.php"  ?>
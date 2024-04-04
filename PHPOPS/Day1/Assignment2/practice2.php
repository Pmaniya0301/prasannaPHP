<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/header.php";
?>
<div class="mb-4 fw-bold">Task: Php function that accepts an integer value and outputs a message based on the number</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <label for="user_name">Enter Name:</label>
            <input type="text" name="user_name" placeholder="Enter Name Here" class="mb-3"><br>

            <label for="greetings" class="mb-3">Select any Operation:</label>
            <select name="greetings" id="greetings">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>

        <div class="mt-4 fs-5 fw-bold text-dark">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['user_name'];
                $greetingsNumber = null;
                $greetingsNumber = (int) $_POST['greetings'];
                $greetingsValues = array('Welcome', 'How are you', 'I\'m doing well, Thank you', 'Have a nice day', 'Good-bye');

                switch ($greetingsNumber) {
                    case 0:
                    case 1:
                        echo "$greetingsValues[$greetingsNumber], $name";
                        break;
                    case 2:
                    case 3:
                    case 4:
                        echo "$greetingsValues[$greetingsNumber]";
                        break;
                    default:
                        echo "";
                }
            }
            ?>
        </div>
    </div>
</div>


<?php
include "../../../../3000-Prasann.M-24-PHPOPS/PHPOPS/headerfooter/footer.php";
?>
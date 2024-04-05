<?php
include "../../../lib/common.php";
?>
<div class="mb-4 fw-bold">Task: Php function that accepts an integer value and outputs a message based on the number</div>

<div class="d-flex align-self-center justify-content-center">
    <div class="d-inline border border-2 p-4 shadow p-3 mb-5 bg-body rounded">
        <?php
        $name = $output = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['user_name'];
            $greetingsNumber = null;
            $greetingsNumber = (int) $_POST['greetings'];
            $greetingsValues = array('Welcome', 'How are you', 'I\'m doing well, Thank you', 'Have a nice day', 'Good-bye');

            switch ($greetingsNumber) {
                case 0:
                case 1:
                    $output = "$greetingsValues[$greetingsNumber], $name";
                    break;
                case 2:
                case 3:
                case 4:
                    $output = "$greetingsValues[$greetingsNumber]";
                    break;
                default:
                    $output = "";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <label for="user_name">Enter Name:</label>
            <input type="text" name="user_name" placeholder="Enter Name Here" class="mb-3" value="<?php echo $name; ?>"><br>

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

        <div class="pt-4 fs-5 fw-bold text-dark">
            <?php
            echo $output;
            ?>
        </div>
    </div>
</div>


<?php
include "../../../lib/footer.php";
?>
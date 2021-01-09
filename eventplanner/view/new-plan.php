<?php
require_once "session.php";
require_once "../controller/PlanController.php";

$categories = getCategories();



?>

<form action="" method="post">
    <table>
        <tr>
            <td>Service Name: </td>
            <td>
                <input type="text" name="service_name" id="service_name" required>
            </td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select style="width: 150px;" name="cat_id" id="cat_id">
                    <?php
                    foreach ($categories as $cat) {
                        echo "<option value='" . $cat['id'] . "'>" . $cat['cat_name'] . "</option>";
                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr>
            <td>
                Price
            </td>
            <td>
                <input type="number" name="price" id="price" required> Taka
            </td>
        </tr>

        <tr>
            <td>
                <input type="reset" value="Clear">
            </td>
            <td>
                <input type="submit" name="save_plan" id="save_plan" value="Save">
            </td>
        </tr>
    </table>
</form>
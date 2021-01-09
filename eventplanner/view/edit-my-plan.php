<?php
require_once "../controller/PlanController.php";
if (!isset($_GET['serviceId'])) {
    echo "<h1>Plan is Not Found!</h1>";
    die();
} else {
    $planDetails = getPlanById($_GET['serviceId']);
    if (count($planDetails) == 0) {
        echo "<h1>Plan is Not Found!</h1>";
        die();
    }
}

echo $myJson = json_encode($planDetails[0]);
require_once "new-plan.php";
?>

<div>

</div>

<script>
    document.getElementById("save_plan").setAttribute("name", "edit_plan");
    document.getElementById("save_plan").setAttribute("value", "Edit Plan");

    var allValues = JSON.parse('<?php echo $myJson; ?>');

    document.getElementById("service_name").value = allValues.service_name;
    document.getElementById("price").value = allValues.price;

    var totalCategories = document.querySelectorAll("#cat_id option").length;
    for (let index = 0; index < totalCategories; index++) {
        let optValue = document.querySelectorAll("#cat_id option")[index];
        if (optValue == allValues.e_category) {
            document.querySelectorAll("#cat_id option")[index].selected = true;
        }

    }
</script>
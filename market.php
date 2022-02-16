<?php
    include "head.php";
?>

    <h3>Market Modules</h3>

    <?php
        foreach (get_market() as $module){
            echo "<p>".$module["name"]." ".checkModule($module["code"])." ".$module["version"]."</p>";
        }
    ?>
<?php
    include "footer.php";
?>
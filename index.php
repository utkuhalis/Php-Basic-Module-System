<?php
/* Title: PHP 8.0 Module Hook System
 * Author: Utku Halis
 * website: https://utkuhalis.com or https://kodla.io
 * version: 1.0.0
 */
    include "head.php";
?>

    <h3>Installed Modules</h3>
    <br>
    <ul>
        <?php
            foreach (scandir("modules/") as $folder){
                if ($folder != "." and $folder != ".."){
                    try {
                        if (file_exists("modules/".$folder."/".$folder.".php")){
                            include ("modules/".$folder."/".$folder.".php");
                            echo "<li class='sc'>$folder Loaded!.</li>";
                        }else{
                            echo "<li class='fl'>$folder has Error.</li>";
                        }
                    }catch (ParseError $e){
                        echo "<li class='fl'>$folder has Error.</li>";
                    }
                }
            }
        ?>
    </ul>
    <br><br><br>
    <?php
        for ($i=-10; $i <= 13; $i++):
    ?>
            <div class="area">
                <h3>Area<?=$i;?></h3>
                <?php
                foreach (get_modules() as $module){
                    if ($module[1] == "Area".$i){
                        run_module($module[0]);
                    }
                }
                ?>
            </div>
    <?php
        endfor;
    ?>

<?php
    include "footer.php";
?>
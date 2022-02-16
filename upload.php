<?php
    include "head.php";
?>

    <h3>Market Modules</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="moduleFile" id="moduleFile"><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
        if (isset($_POST["submit"])) {
            $fName = basename($_FILES["moduleFile"]["name"]);
            move_uploaded_file($_FILES["moduleFile"]["tmp_name"], "cache/".$fName);
            echo "<script>location.href = 'install.php?m=".explode(".", $fName)[0]."';</script>";
        }
    ?>
<?php
    include "footer.php";
?>
<?php
    include "moduleSystem.php";

    $module = $_GET["m"];

    installModule($module);

    echo "<p>$module Installing...</p><script>setInterval(() => {location.href = '/';}, 1000);</script>";
<?php
    header("Content-Type: text/json");
    echo file_get_contents("modules.json");
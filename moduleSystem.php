<?php
    $server = "http://localhost/fakeServer/";
    $market = $server."/market.php";
    $modules = [];

    function get_market(){
        global $market;
        $data = file_get_contents($market);
        return (!empty($data)) ? json_decode($data, true)["moduleList"] : "No Market Data";
    }

    function add_modules($func, $area, $layer = 0){
        global $modules;
        $modules[] = [$func, $area, $layer];
    }

    function get_modules(){
        global $modules;
        return $modules;
    }

    function run_module($module){
        call_user_func($module);
    }

    function checkModule($name){
        return !file_exists("modules/".$name."/".$name.".php") ? "<a href='/install.php?m=$name'>Install</a>" : "<b>Installed</b>";
    }

    function installModule($name){
        global $server;
        $file = "";

        if (file_exists("cache/".$name.".zip")){
            $file = $name.".zip";
        }else{
            foreach (get_market() as $module){
                if ($module["code"] == $name){
                    $file = $module["file"];
                }
            }

            $data= file_get_contents($server.$file);
            file_put_contents("cache/".$file, $data);
        }

        $zip = new ZipArchive;
        $res = $zip->open("cache/".$file);
        if ($res === TRUE) {
            $zip->extractTo('modules/');
            $zip->close();
        }

        unlink("cache/".$file);
    }

?>
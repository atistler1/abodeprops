<?php

require_once("Smarty-3.1.7/libs/Smarty.class.php");

class Util {
    public static function getSmarty() {
        $smarty = new Smarty();
        $smarty->setTemplateDir('../smarty/templates/');
        $smarty->setCompileDir('../smarty/templates_c/');
        $smarty->setConfigDir('../smarty/configs/');
        $smarty->setCacheDir('../smarty/cache/');
        $smarty->compile_check = true;
        return $smarty;
    }

    public static function getLastModified() {
        $last_modified_time = file_get_contents("../conf/lastmodified.time");
        if (empty($last_modified_time)) {
            $last_modified_time = time();
            file_put_contents("../conf/lastmodified.time", $last_modified_time);
        }
        return $last_modified_time;
    }

    public static function getDefaultTpl() {
        return "index.tpl";
    }
}
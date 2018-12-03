<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 2018-12-03
 * Time: 오후 10:37
 */
require_once('APage.php');
require_once('BPage.php');

class MainClass
{
    public function main() {
        $apage = new APage();
        echo $apage->main() . "\n";

        $bpage = new BPage();
        echo $bpage->main() . "\n";

    }
}

$mainClass = new MainClass();
$mainClass->main();
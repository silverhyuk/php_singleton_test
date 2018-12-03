<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 2018-12-03
 * Time: 오후 10:22
 */
require_once('Singleton.php');

class BPage
{
    public function main() {
        Singleton::getInstance()->setText('bbb');

        sleep(1);

        return Singleton::getInstance()->getText();
    }
}

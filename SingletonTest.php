<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 2018-12-03
 * Time: 오후 10:20
 */

class SingletonTest
{

    private $text;
    private static $instance = null;
    /**
     * 이 클래스의 *싱글턴* 인스턴스를 리턴한다.
     *
     * @staticvar Singleton $instance 이 클래스의 *싱글턴* 인스턴스
     *
     * @return Singleton *싱글턴* 인스턴스.
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new SingletonTest();
        }

        return self::$instance;
    }

    /**
     * 이 클래스는 *싱글턴*으로 사용할 것이므로 이 클래스 외부에서
     * 생성하는 것을 금지하기 위해 생성자를 protected 로 제한한다.
     */
    protected function __construct()
    {
    }

    /**
     * *싱글턴* 인스턴스를 복제할 수 없도록 복제 메소드를 private
     * 으로 제한한다.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * *싱글턴* 인스턴스를 unserialize 하지 못하게 private 으로 제한한다.
     *
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}
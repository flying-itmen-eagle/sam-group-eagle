<?php
/**
 * Created by PhpStorm.
 * User: shoubunan
 * Date: 2017/11/20
 * Time: 下午11:33
 */
class SamPDO {

    private static $_sql_engine = 'mysql';
    private static $_hostname = 'localhost';
    private static $_user = 'eagle';
    private static $_password = 'eagle_test';

    public $pdo;

    /**
     * @content 取回pdo的schema單例實體
     * @param $dbname
     * @return SamPDO
     */
    static function db($dbname) {
        return new self($dbname);
    }

    function __construct($dbname){
        $sql_engine = self::$_sql_engine;
        $hostname = self::$_hostname;
        $dsn = "{$sql_engine}:host={$hostname};dbname={$dbname}";
        $this->pdo = new PDO($dsn, self::$_user, self::$_password);
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: eagle
 * Date: 2017/11/19
 * Time: 下午 11:25
 */

class DatabaseConfig
{
    public function __construct()
    {
        $this->dsn = "{$this->database_name}:dbname={$this->database_schema};host={$this->database_host}";
    }

    /**
     * 連線描述
     * @var string
     */
    public $dsn;

    /**
     * 資料庫連接host
     * @var ip
     */
    private $database_host = '127.0.0.1';

    /**
     * 資料庫名稱 [ex:mysql]
     * @var string
     */
    private $database_name = 'mysql';

    /**
     * 資料庫使用者
     * @var string
     */
    public $database_user = 'eagle';

    /**
     * 資料庫使用者密碼
     * @var string
     */
    public $database_password = 'eagle_test';

    /**
     * 資料庫的schema
     * @var string
     */
    private $database_schema = 'eagle';
}
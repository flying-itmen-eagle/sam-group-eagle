<?php
/**
 * Created by PhpStorm.
 * User: eagle
 * Date: 2017/11/19
 * Time: 下午 11:16
 */


class EaglePDO
{
    private $pdo;

    public function __construct()
    {
        try {
            $db_config = new DatabaseConfig();
            $this->pdo = new PDO($db_config->dsn, $db_config->database_user, $db_config->database_password);
        } catch (\Throwable $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * 取得清單
     * @param string $col
     * @param $table
     * @return array
     */
    public function getList($col = '*', $table)
    {
        $sql = "SELECT {$col}
                  FROM {$table}";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
}
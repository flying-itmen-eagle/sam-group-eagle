<?php
/**
 * Created by PhpStorm.
 * User: shoubunan
 * Date: 2017/11/20
 * Time: 下午11:59
 */
require_once "SamPDO.php";

$eagle = SamPDO::db('eagle');
echo $eagle->pdo->errorCode();
print_r($eagle->pdo->errorInfo());

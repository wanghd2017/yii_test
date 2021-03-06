<?php
/**
 * 管理端入口脚本文件
 *
 * @author Ken
 * @package web
 */
error_reporting(E_ALL);
// 在部署到生产环境时，注释掉以下两行
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
<?php
/**
 * Project: ezcms
 * 
 * MIT License 
 * Copyright (c) 2018 
 * @author lxj <my2233@foxmail.com>
 */


/* 应用名称（应用文件夹名称，区分大小写） */
define('APP_NAME', 'cms');

/* 入口目录 */
define('SITE_PATH', getcwd());

/* 应用配置 */
$_config = include(__DIR__ . '/../config.php');

/* 引入函数 */
require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../function.php');

/* 应用开始 */
\ez\core\Ez::start();

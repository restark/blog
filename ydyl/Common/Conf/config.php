<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'=>'html',
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',  // 默认模块
  	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	'URL_ROUTER_ON'=>ture,
	'URL_MODEL' =>'2',
	'URL_CASE_INSENSITIVE'=>true,
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_NAME'   => 'news', // 数据库名
    'DB_PWD'    => '940517blood', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'news_', // 数据库表前缀       
    'DB_HOST'=>'127.0.0.1',
    'DB_USER'=>'root',
);
<?php
CakePlugin::load('Environments');

App::uses('Environment', 'Environments.Lib');

// Webサーバに設定する
$env = env('CAKE_ENV');

switch ($env) {
    // 本番環境
    case 'production':
        include dirname(__FILE__) . DS . 'environments' . DS . 'production.php';
        break;
    // 開発環境
    default:
        include dirname(__FILE__) . DS . 'environments' . DS . 'development.php';
        include dirname(__FILE__) . DS . 'environments' . DS . 'test.php';
        include dirname(__FILE__) . DS . 'environments' . DS . 'ci.php';
        break;
}

Environment::start();

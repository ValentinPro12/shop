<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id'                  => 'basic-console',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases'             => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components'          => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log'   => [
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'    => $db,
    ],
    'params'              => $params,

    // Mysql migrations
    //    'migrate-mysql'       => [
    //        'class'          => \yii\console\controllers\MigrateController::class,
    //        'migrationPath'  => [
    //            '@app/migrations/mysql',
    //            '@yii/rbac/migrations',
    //            '@mdm/admin/migrations',
    //        ],
    //        'migrationTable' => 'migration',
    //    ],

    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
                       'class' => 'yii\faker\FixtureController',
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

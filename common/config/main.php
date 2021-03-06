<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache'                => [
            'class' => 'yii\redis\Cache',
            'redis'=> [
                'class'    => 'yii\redis\Connection',
                'hostname' => '127.0.0.1',
                'port'     => 6379,
                'database' => 1,
            ],
        ],
    ],
];

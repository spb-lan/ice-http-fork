<?php

return [
    'vendor' => 'spb-lan',
    'name' => 'ice-http-fork',
    'namespace' => 'Ifacesoft\Ice\Http\\',
    'alias' => 'Ihttp',
    'description' => 'Ice Http App',
    'url' => 'http://ice-http.ifacesoft.iceframework.net',
    'type' => 'module',
    'context' => '',
//    'source' => [
//        'vcs' => 'mercurial',
//        'repo' => 'https://bitbucket.org/ifacesoft/ice-http'
//    ],
//    'authors' => [
//        [
//            'name' => 'dp',
//            'email' => 'denis.a.shestakov@gmail.com'
//        ]
//    ],
    'pathes' => [
        'config' => 'config/',
        'source' => 'source/backend/',
        'resource' => 'source/resource/',
    ],
    'environments' => [
        'prod' => [
            'pattern' => '/^ice-http-fork\.prod\.local$/',
        ],
        'test' => [
            'pattern' => '/^ice-http-fork\.test\.local$/',
        ],
        'dev' => [
            'pattern' => '/^ice-http-fork\.dev\.local$/',
        ],
    ],
    'modules' => [
        'spb-lan/ice-core-fork' => [],
    ],
];
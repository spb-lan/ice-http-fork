<?php

return [
    'vendor' => 'ifacesoft',
    'name' => 'ice-http',
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
            'pattern' => '/^ice-http\.prod\.local$/',
        ],
        'test' => [
            'pattern' => '/^ice-http\.test\.local$/',
        ],
        'dev' => [
            'pattern' => '/^ice-http\.dev\.local$/',
        ],
    ],
    'modules' => [
        'ifacesoft/ice-core' => [],
    ],
];
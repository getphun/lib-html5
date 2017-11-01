<?php
/**
 * lib-html5 config file
 * @package lib-html5
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-html5',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-html5',
    '__files' => [
        'modules/lib-html5' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'HTML5_Parser'      => 'modules/lib-html5/third-party/HTML5/Parser.php',
            'HTML5_Tokenizer'   => 'modules/lib-html5/third-party/HTML5/Tokenizer.php',
            'HTML5_InputStream' => 'modules/lib-html5/third-party/HTML5/InputStream.php',
            'HTML5_TreeBuilder' => 'modules/lib-html5/third-party/HTML5/TreeBuilder.php',
            'HTML5_Data'        => 'modules/lib-html5/third-party/HTML5/Data.php'
        ],
        'files' => []
    ]
];
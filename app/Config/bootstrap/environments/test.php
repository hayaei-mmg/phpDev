<?php

Environment::configure('test', true, [
    'MYSQL_DB_HOST'      => 'localhost',
    'MYSQL_USERNAME'     => 'webapp',
    'MYSQL_PASSWORD'     => 'password',
    'MYSQL_DB_NAME'      => 'blog',
    'MYSQL_TEST_DB_NAME' => 'test_blog',
    'MYSQL_PREFIX'       => ''
]);

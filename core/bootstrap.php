<?php
$app = [];
$app['config'] = require 'config.php';
require 'core/router.php';
require 'core/request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
$app['database'] = new QueryBuilder(
    connection::make($app['config']['database'])
);
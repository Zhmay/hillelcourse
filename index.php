<?php
require_once 'vendor/autoload.php';

use Core\Router;
use Lib\DB\Connector;
use Lib\DB\Select;
use Lib\DB\Where;

$select = new Select();
$select->setFieldNames('name');
$select->setTableNames('users');
$selectString = $select->getSqlString();

$where = new Where('age = 27');
$whereString = $where->getWhereString();

var_dump($selectString .= $whereString);



//$router = new Router();
//$router->run();
<?php
require('classes/Table.php');
require('classes/Waiter.php');

$waiter1 = new Waiter('table 1');
$table1 = new Table('row1', 'column1');

$waiter1->setTables($table1);
var_dump($table1->getTables());
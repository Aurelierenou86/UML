<?php
require('classes/Table.php');
require('classes/Waiter.php');

// Create a waiter and tables

$table1 = new Table();
$table2 = new Table();
// $table3 = new Table();
// $table4 = new Table();

$waiter = new Waiter([$table1 ,$table2]);
var_dump($waiter);
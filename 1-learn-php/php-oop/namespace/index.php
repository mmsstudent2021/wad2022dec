<?php

use Html\Element;
use Html\Form\Button;
use Html\Form\Input;
use Html\Table;

require_once "./Body.php";
require_once "./Button.php";
require_once "./Form.php";
require_once "./Head.php";
require_once "./Input.php";
require_once "./Select.php";
require_once "./Table.php";

system("clear");

$table = new Table;
var_dump($table->table());
$input = new Input;
var_dump($input->input());

$btn = new Button;
var_dump($btn->button());

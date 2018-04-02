<?php

require "./table/vendor/autoload.php";

$table = new Table\studentTable();

(new \Table\parseTable())->dispatch($table);

test.php
<?php
function foo() {
    include './fga.inc';
}

foo('First arg', 'Second arg');
?>

fga.inc
<?php

$arg = func_get_arg(1);
var_export($arg);

?>
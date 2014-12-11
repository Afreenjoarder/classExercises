test.php
<?php
function foo() {
    include './fna.php';
}

foo('First arg', 'Second arg');
?>

fna.php
<?php

$num_args = func_num_args();
var_export($num_args);

?>
<?php
$number1 = "100";
$number2 = 12;
$world = 'Hello';
$world2 ="+";
echo $number1+$world;
echo "<br>";
echo $number1 +$number2;
echo "<br>";

echo $world+$world2;
?>




<br>
<br>

<?php
  $x= (7+3)*6;
echo $x ."\n";
$y= 100/(4*5);
echo $y ."<br>";
$z = 1%3;
echo $z. "<br>";
$r = 7+(5*(8/2)+(4+6));
echo $r;?>


<?php
echo "__LINE__";
?>
<br>
<br>

<?php
define('TEST','This is a Test');

echo TEST . PHP_EOL;
echo test . PHP_EOL;
?>


<br>
<br>

<?php
$fruit =array("grapes","apple","cherry");
echo $fruit[2][3];
?>
<br>
<br>

<?php
$arr =array("data"=> "USA", 12=>true);
echo $arr["data"];
echo"<br>";
echo $arr[12];
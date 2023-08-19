<?php

$string_name = "BALAJI N";
$int_age = 23;
$boolean_voter = true;
$float_temprature = 111.1;
$double_mobile = 8012964843;
$array_detail = array('Sparkout Tech Solutions','Software Developer Trainee');



echo "String : <br><br>"; 
var_dump($string_name); 
echo "<br><br>";

echo "Int : <br><br>";
var_dump($int_age);
echo "<br><br>";

echo "Boolean : <br><br>";
var_dump($boolean_voter);
echo "<br><br>";

echo "Float : <br><br>";
var_dump($float_temprature);
echo "<br><br>";

echo "int : <br><br>";
var_dump($double_mobile);
echo "<br><br>";

echo "Array : <br><br>";
var_dump($array_detail);
echo "<br><br>";

class developer{
function call()
{
  global $string_name;
  echo "Call to $string_name";
}
}

$object = new developer();

echo "Object : <br><br>";

var_dump($object);

echo "<br><br>";

$object -> call();

echo "<br><br>";

echo "Null : <br><br>";
$null = null;

echo 'variable $null = ';
var_dump($null);

echo "<br><br>";

echo "Resource : <br><br>"; //resource by tutorialspoint referal example
$fp=fopen("test.txt","w");
var_dump($fp);
echo "<br><br>";

?>
<?php 
echo "
<h2>Data types:</h2>";
echo "
I. Numeric types:
<ul>
 <li>1. Boolean: ";
$boolean_t = FALSE;
echo '$boolean_t is: ';
var_dump($boolean_t);
echo "
 </li>
 <li>2. Integer: ";
$integer_t = 27;
echo '$integer_t is: ';
var_dump($integer_t);
echo "
 </li>
 <li>3. Float: ";
$float_t = 27.5;
echo '$float_t is: ';
var_dump($float_t);
echo "
 </li>
</ul>
II. Another types:
<ul>
 <li>1. String: ";
$string_t = 'Maslechkin Vasiliy';
echo '$string_t is: ';
var_dump($string_t);
echo "
 </li>
 <li>2. Array: ";
$array_t = [ $string_t, $integer_t, $float_t];
echo '$array_t is:';
var_dump($array_t);
echo "
 </li>
 <li>3. Object: ";
$object_t = new __PHP_Incomplete_Class();
echo '$object_t is: ';
var_dump($object_t);
echo "
 </li>
 <li>4. Resource: ";
$resource_t = curl_init();
echo '$resource_t is: ';
var_dump($resource_t);
curl_close($resource_t);
echo "
 </li>
 <li>5. Null: ";
$null_t = null;
echo '$null_t is: ';
var_dump($null_t);
echo "
 </li>
</ul>";

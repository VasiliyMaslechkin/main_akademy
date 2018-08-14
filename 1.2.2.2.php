<?php
echo "
<h2>Change type of variables:</h2>";
echo "
1. With numeric
<ul>
 <li>a. Boolean 'FALSE' to integer:";
var_dump((int)FALSE);
echo "
 </li>
 <li>b. Boolean 'TRUE' to integer:";
var_dump((int)TRUE);
echo "
 </li>
 <li>c. Integer '3' to boolean: ";
var_dump((bool)3);
echo "
 </li>
 <li>d. Integer '1' to boolean: ";
var_dump((bool)1);
echo "
 </li>
 <li>e. Integer '-3' to boolean: ";
var_dump((bool)-3);
echo "
 </li>
 <li>f. Float '27.5' to integer: ";
var_dump((int)27.5);
echo '
 </li>
 <li>g. Integer "27" to float: ';
var_dump((float)27);
echo "
 </li>
</ul>
2. With another
<ul>
 <li>a. String 'number' to integer:";
var_dump((int)'test qwerty');
echo "
 </li>
 <li>b. String '15 apples' to integer: ";
echo '';
var_dump((int)'15 apples');
echo "
 </li>
 <li>c. String '15 fruits' to integer: ";
var_dump((int)'15 fruits');
echo "
 </li>
 <li>d. Empty string to integer: ";
var_dump((int)'');
echo "
 </li>
 <li>e. Empty string to float: ";
var_dump((float)'');
echo "
 </li>
 <li>f. String 'string' to array: ";
var_dump((array)'string');
echo "
 </li>
 <li>e. Array '[1, 3, 5]' to string: ";
var_dump((string)[1, 3, 5]);
echo "
 </li>
 <li>f. Array '[6, 7, 8]' to object: ";
var_dump((object)[6, 7, 8]);
echo "
 </li>
</ul>";
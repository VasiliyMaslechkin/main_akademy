<?php
echo "
1. Math operations with different data types
<ul>
 <li>Integer '5' + String '8' = ";
var_dump (5 + '8');
echo "
 </li>
 <li>Float '24.3' + Int '22' = ";
var_dump (24.3 + 22);
echo "
 </li>
 <li>Float '18.34' + Float '19.74' = ";
var_dump (18.34 + 19.74);
echo "
 </li>
</ul>
2. float numbers comparison
<ul>
 <li>";
echo 'but (Float "12.34" + Float "22.54") == Float "34.88" is: ';
var_dump((12.34 + 22.54) == 34.88);

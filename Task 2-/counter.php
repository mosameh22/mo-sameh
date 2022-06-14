
<?php
// $person='f';
// $salary=10;

// if($salary>1000 &&$person=='f'){
//     echo 'rich female';
// }else if($salary<1000 &&$person=='f'){
//     echo 'poor female';
// }else if($salary>1000 &&$person=='m'){
//     echo 'rich male';
// }else{
//     echo 'poor male';
// }
// switch($salary){
//     case $salary >1000 && $person =='f':
//         echo 'rich female';
//         break;
//     case $salary<1000 && $person =='f':
//         echo 'poor female';
//         break;
//         case $salary >1000 && $person =='m':
//             echo 'rich male';
//             break;
//             default:
//             echo 'poor male';
//             break;
// }
$x = 1;
function counter(&$x)
{
    echo $x++;
}

echo counter($x) . "<br>";
echo counter($x) . "<br>";
echo counter($x) . "<br>";
echo counter($x) . "<br>";
echo counter($x) . "<br>";

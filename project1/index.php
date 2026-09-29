<?php
$Name ="Youssef Ehab";
$Gender = "man";
$job = "Full Stack Develper";
echo"My Name is $Name ,I am a $Gender ,I work $job";
///////////////////////////////////
//functions
echo "<br>";
function calc_vat($num) {
    $vat=0.14;
   echo "The amount $num * $vat is ". ($num * $vat);
} 
calc_vat(1000);
echo"<br>";
calc_vat(2000);//argument p



function getFullName($first_name, $last_name)
{
    $full_name = $first_name . " " . $last_name;
    echo "Full Name: $full_name";

} 

getFullName("Yossef","Ehab");
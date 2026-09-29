<?php
//Price Breakdown Function 
echo "<h3>1: Price Breakdown Function</h3>";
function calcPrice($price) {
    $vat=0.14;
    $service=0.12;
    $totalVat= $price*$vat;
    $totalService=$service*$vat;
    echo"TotalVat = Price * Vat = $price * $vat =$totalVat<br>";
    echo "TotalService = Service * Vat = $price * $service =$totalService<br>";
    $total="Total = Price + totalVat + totalService = $price + $totalVat + $totalService = " . ($price+$totalVat+$totalService);
    echo"$total";
}
    calcPrice(1000);
    echo" <b> <br> Example : calcPrice(1000)</b> => camelsCase style";
    ////////////////////////////////////////////////////////////////////
echo "<h3>2: Order Calculator Breakdown Function</h3>";
    function calcInvoice($price1,$price2,$price3) {
    $price= $price1 + $price2 + $price3;
    $vat=0.14;
    $service= 0.12;
    $totalVat=$price*$vat;
    $totalService=$price*$service;
    echo "price = price1 + price2 + price3 = $price1 + $price2 + $price3 = " .($price1 + $price2 + $price3);
    echo"<br> TotalVat = Price * Vat = $price * $vat =$totalVat<br>";
    echo "TotalService = Service * Vat = $price * $service =$totalService<br>";
    $GrandTotal="GrandTotal= Price + TotalVat + TotalService = $price + $totalVat + $totalService = ".($price+$totalVat+$totalService);
    echo"$GrandTotal";
}
    calcInvoice(1000,500,400);
    echo" <b> <br> Example : calcInvoice(1000, 500, 400)</b>";
    //////////////////////////////////////////////////////////////////////
echo "<h3>3: Full Name Function </h3>";
function fullName($name1,$name2) {
$name1=str_replace(" ","",$name1);
$name2=str_replace(" ","",$name2);
$fullName=$name1." ".$name2;
echo"name1 = $name1 <br>";
echo"name2 =$name2 <br>";
echo"Result : $fullName";
}
fullName("Yossef","Ehab");
echo '<br> <b>Example: fullName("Youssef", "Ehab")</b>'; 
echo "<br><h4>Othertype in git code :</h4> <b>Example: fullName(\"Youssef\", \"Ehab\")</b>"; //other type so resulting the same result Yossef Ehab
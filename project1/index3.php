<?php
    declare(strict_types=1);
echo "<h3 style='color: red;'>Functions</h3>";
// PHP Practice: Employee Salary Calculator
    const TAX_RATE = 0.10;
    $companyName = "Google";
    $companyName2 ="Google2";
function CompanyName()
{
    global $companyName;
    return $companyName;
}
echo CompanyName();
echo"<br>";
//------------- what different between them please? ---------------------------
function DisplayCompanyName(): void  // when i use void not type return why?
{
    global $companyName2;
    echo $companyName2;
}
DisplayCompanyName();
//-----------------------------------------------------------------------------
echo"<br>";
function calculateBonus(float $salary): float
{
    $bonus = $salary * 0.25;

    echo "Salary: $salary <br>";
    echo "Bonus: $bonus <br>";
    return $bonus;
}
calculateBonus(1000);
//------------------------------------------------------------------------------
function calculateFinalSalary(int|float $salary, int|float $bonus): float
{
    $total=$salary + $bonus;
    $tax = $total * TAX_RATE;
    echo "Total = Salary + Bonus = $total <br>";
    echo "Tax =$tax <br>";
    $finalsalary= $salary + $bonus - $tax;
    echo "Finalsalary = Salary + Bonus - Tax =$finalsalary";
    return $finalsalary;
}
calculateFinalSalary(1000, 250);
//-------------------------------------------------------------------------------
echo"<br>";
function displaySalary(string|int $salary): void    //want understand more ??  (|)=> meaning or 
{
    echo $salary;
}
displaySalary("1000");
echo"<br>";
//--------------------------------------------------------------------------------

//Additional Challenge
function calculateBonus1(float $salary): float
{
    return $salary * 0.25;
}
echo calculateBonus1(1000);
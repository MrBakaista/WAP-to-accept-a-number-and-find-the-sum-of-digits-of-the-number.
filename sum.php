<?php  
$num = 12345;
$temp = $num;  
$sum=0; $rem=0;  
for ($i =0; $i<=strlen($num);$i++)  
{  
    $rem=$num%10;  
    $sum = $sum + $rem;  
    $num=$num/10;  
}  
echo "Sum of $temp is $sum";  
?>  

<?php
$temperatura = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$arreglo_temperatura = explode(',', $temperatura);
$total_temp = 0;
$arreglo_temperatura_length = count($arreglo_temperatura);
foreach($arreglo_temperatura as $temp)
{
 $total_temp += $temp;
}
 $promedio_temp = $total_temp/$arreglo_temperatura_length;
 echo "Average Temperature is : ".$promedio_temp."
"; 
sort($arreglo_temperatura);
echo " List of 5 lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $arreglo_temperatura[$i].", ";
}
echo "List of 5 highest temperatures :";
for ($i=($arreglo_temperatura_length-5); $i< ($arreglo_temperatura_length); $i++)
{
echo $arreglo_temperatura[$i].", ";
}
?>
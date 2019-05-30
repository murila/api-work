<!DOCTYPE html>
<html>
<head>
<title>rat</title>
</head>
<style type="text/css">
table, th, td {
    border: 0 ;
    border-collapse: collapse;
}
</style>
<body>
<?php
$a="Engineer-Wairuri-Kamau|20.00,15,6";
$b="Doctor WaMvua Ka12mbua'12040102010";
$c="Miss#t0opoi#susan£3311";
$d="Mister%Jotham%Wafula_7+7";


//a
/*echo $a[1];
echo substr_replace("Engineer","Kamau",0);*/


echo '<table width="100%"';
echo "<tr>
<th></th>
<th></th>
<th></th>
</tr>";
$stringa=explode(",",trim($a));
foreach ($stringa as $a) {
echo "<tr>";

$stringa1s=explode("–", $a);
foreach ($stringa1s as $stringa1) {
echo "<td>" .$stringa1."</td>";
}
echo "</tr>";
}
echo "</table>";


/*$elements=explode("–", $county_data);
foreach ($elements as $element) {
echo "<td>" .$element."</td>";
}*/

?>



</body>
</html>

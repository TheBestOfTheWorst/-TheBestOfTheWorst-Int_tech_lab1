<?php
include "connection.php";

$sqlSelect = "SELECT * FROM Computer INNER JOIN Processors 
ON Computer.FID_processor=Processors.ID_Processor WHERE Processors.name=?";
$prepStat = $db->prepare($sqlSelect);
$prepStat->execute([$_POST['procTypes']]);
$data = $prepStat->fetchAll(PDO::FETCH_ASSOC);

echo "<br><br><table border='1'>";
foreach ($data as $var) {
	echo "<tr><td>".$var['ID_Computer']."</td><td>".$var['netname']."</td>".
    "<td>".$var['motherboard']."</td><td>".$var['RAM_Capacity']."</td>".
    "<td>".$var['HDD_Capacity']."</td><td>".$var['monitor']."</td>".
    "<td>".$var['vendor']."</td>"."<td>".$var['guarantee']."</td>".
    "<td>".$var['FID_processor']."</td></tr>";
}
echo "</table>";

?>
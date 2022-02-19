<?php
include "connection.php";

$sqlSelect = "SELECT * FROM Computer 
INNER JOIN Computer_Software ON Computer.ID_Computer=Computer_Software.FID_Computer  
INNER JOIN Software ON Computer_Software.FID_Software=Software.ID_software 
WHERE Software.name=?;";
$prepStat = $db->prepare($sqlSelect);
$prepStat->execute([$_POST['softTypes']]);
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
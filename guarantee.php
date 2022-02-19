<?php
include "connection.php";

$sqlSelect = "SELECT * FROM Computer WHERE guarantee <= CURDATE();";
$stmt = $db->query($sqlSelect);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br><br><table border='1'>";
foreach($db->query($sqlSelect) as $row) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]"."
    </td><td>$row[3]"."</td><td>$row[4]</td><td>$row[5]"."
    </td><td>$row[6]</td><td>$row[7]</td><td$row[8]></td></tr>";
}
echo "</table>";
?>
<?php

echo "<table width='100%'>";
$i = 1;
$json=file_get_contents("Monumentos.json");
//var_dump($json);
$json = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true);
//print_r ($json);
foreach ($json as $j){
    echo "<tr>";
    echo "<td>";
    echo $j["Nombre"];
    echo "</td>";
    echo "<td>";
    echo $j["Municipio"];
    echo "</td>";
    echo "<td>";
    echo $j["Descripcin"];
    echo "</td>";
    echo "<td>";
    echo $j["C.P."];
    echo "</td>";
    
    echo "</tr>";
}
echo "</table>";
?>
<?php

echo "<table width='100%'>";
$i = 1;
$json=file_get_contents("Monumentos.json");
//var_dump($json);
$json = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true);
//print_r ($json);
$nombre =$_GET['query'];

foreach ($json as $j){
    $patronNombre=preg_match("/".$nombre."/", $j["Nombre"]);
    $patronMunicipio=preg_match("/".$nombre."/", $j["Municipio"]);
    @$patronDescripcin=preg_match("/".$nombre."/", $j["Descripcin"]);
    $patronCp=preg_match("/".$nombre."/", $j["C.P."]);
    if(
        $patronNombre==1 or
        $patronMunicipio==1 or
        $patronDescripcin==1 or
        $patronCp==1
    ){
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
}
echo "</table>";

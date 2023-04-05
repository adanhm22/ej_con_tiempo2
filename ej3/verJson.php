<?php

    $archivo = json_decode(file_get_contents('json.json'),true);

    for ($i=0; $i < sizeof($archivo); $i++) { 
        echo "<h2>". $archivo[$i][0]["nombre"] ."</h2><br>";
        echo "<p>". $archivo[$i][0]["descripcion"] ."</p><br>";
        echo "Precio: ". $archivo[$i][0]["precio"];
        echo " cantidad: ". $archivo[$i][0]["cantidad"] ."<br>";
        echo "<img src='". $archivo[$i][0]["imagen"] ."'><br>";
        echo "<br>";
    }
?>
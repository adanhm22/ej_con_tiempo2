<?php
    function getArray (string $nombre, string $descripcion, string $url, int $min = 20, int $max = 50): array
    {
        $array = [];
        $precio = rand($min,$max);
        $cantidad = rand(1,15);
        array_push($array,[
            "nombre" => $nombre,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "cantidad" => $cantidad,
            "imagen" => $url
        ]);
        return $array;
    }
    $arrayProductos = [];
    array_push($arrayProductos,getArray("zanahoria","una hortaliza con mucha vitamina A", "https://soycomocomo.es/media/2019/03/zanahorias.jpg"));
    array_push($arrayProductos,getArray("cacahuetes","El cacahuete es la semilla comestible de la planta Arachis hypogaea", "https://www.naturafruits.com/97-large_default/cacauets-crus-closca.jpg"));
    array_push($arrayProductos,getArray("zanahoria","El chocolate es el alimento que se obtiene mezclando azúcar con dos productos que derivan de la manipulación de las semillas del cacao", "https://www.nationalgeographic.com.es/medio/2023/02/24/chocolate_13272206_230224133022_1280x854.jpg"));

    $json = json_encode($arrayProductos);
    $resultado = file_put_contents('json.json',$json);

    if (gettype($resultado) == "integer")
    {
        echo "se han escrito un total de " . $resultado . " bytes.";
    }else{
        echo "ha habido un error";
    }


?>
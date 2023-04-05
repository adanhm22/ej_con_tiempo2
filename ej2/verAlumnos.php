<?php

    function mostrarAlumnos (mysqli $bbdd) : void
    {
        $alumnos = mysqli_fetch_all(mysqli_query($bbdd,"SELECT * FROM ALUMNOS"),MYSQLI_ASSOC);

        foreach ($alumnos as $alumno) {
            $empresa = mysqli_fetch_all(mysqli_query($bbdd,"SELECT * FROM empresas where id = " . $alumno["empresa_asignada"]),MYSQLI_ASSOC)[0];
            echo "id Alumno: " . $alumno["id"] . "<br>";
            echo "nombre Alumno: " . $alumno["nombre"] . "<br>";
            echo "apellidos Alumno: " . $alumno["apellidos"] . "<br>";
            echo "empresa Alumno: " . $empresa["nombre"] . "<br>";

            echo "<br>";
        }
    }

    $bbdd = mysqli_connect('localhost' , 'root' , 'root','practicas');

    mostrarAlumnos($bbdd);

    $bbdd->close();
    

?>
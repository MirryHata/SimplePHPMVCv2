<?php

function run(){
    $viewData = array(
        "cuenta"=>"0101199904379",
        "nombre"=>"José Robles",
        "correo"=>"jose.salazar3264@gmail.com"
    );
    $proyectos = array(
        array("id"=>"1", "name"=>"Negocios CMS"),
        array("id"=>"2", "name"=>"Negocios ERP"),
        array("id"=>"3", "name"=>"Negocios RRHH")
    );

    $curriculum = array(
        array("Academica"=>"Escuela Guadalupe de Quezada (Primaria)", "Cursos"=>"Reparacion de Celulares (FONGLODESACH)", "Laboral"=>"Tecnico en reparacion de celulares (2015-actualidad)", "Idioma"=>"Ingles Avanzado"),
        array("Academica"=>"Instituto Técnico del Litoral Atlantico (ITLA) (Secundaria)", "Cursos"=>"Reparacion de celulares (Cruz Roja)", "Laboral"=>"Pasante en el Hospital Regional Atlantida (Tecnico en Refrigeracion y Aire Acondicionado)", "Idioma"=>"Español"),
        array("Academica"=>"Universidad Católica de Honduras", "Cursos"=>"Introduccion a la ciberseguridad (CISCO)", "Idioma"=>"Francés (Principiante)"),
    );
    $viewData["proyectos"] = $proyectos;
    $viewData["curriculum"] = $curriculum;
    renderizar("about", $viewData);
}
run();

?>
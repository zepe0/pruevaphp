<?php

session_start();

$_SESSION["login"] = 0;
$_SESSION["user"] = "admin";
$_SESSION["pass"] = "admin";
$_SESSION["img"] = "1.png";
$_SESSION["cards"] = array(
    (object) array(
        'titulo' => 'Sulley',
        'img' => 'sulley.jpeg',
        'likes' => 3,
        'des' => "James P. Sullivan es miembro de una estirpe familiar bien conocida por sus dotes para los sustos. Desde que Mike se encargó de bajar sus aires de grandeza en la universidad, Sulley pasó a ser un monstruo atento, adorable y bastante bonachón. Quizás por eso cae rendido ante la tierna Boo, con la que establecerá una de las amistades más recordadas del cine.",
        'comentario' => array(
            (object) array(
                'coment' => 'Boo es increíble, ¿verdad? No puedo creer que un niño humano nos haya robado el corazón.',
                'user' => 'mike.jpeg'
            ),
            (object) array(
                'coment' => '¿Creen que Boo pueda abrir puertas a otros mundos? Eso podría ser muy útil para mí.',
                'user' => 'randall.jpeg'
            )
            
        )
    ),
    (object) array(
        'titulo' => 'Mike',
        'img' => 'mike.jpeg',
        'likes' => 8,
        'des' => "Entre los personajes de ‘Monstruos S.A.’, sin duda, Mike es el que aporta más momentos de diversión. Es el compañero todoterreno de Sulley. En España le pone voz el cómico y actor José Mota. Para conocer su historia a fondo es muy recomendable ver la cinta precuela, ‘Monstruos University’, donde Mike descubre el mundo de los sustos y se ve obligado a demostrar sus dotes como estratega frente a otros monstruos mucho más terroríficos.",
        'comentario' => array(
            (object) array(
                'coment' => 'Boo es increíble, ¿verdad? No puedo creer que un niño humano nos haya robado el corazón.',
                'user' => 'mike.jpeg'
            )
        )
    ),
    (object) array(
        'titulo' => 'Boo',
        'img' => 'boo.jpeg',
        'likes' => 5,
        'des' => "Pese a su cortísima edad, Boo es experta en demostrar que no le tiene miedo a nada. Prueba de ello es cuando atraviesa la puerta de su dormitorio, se cuela en Monstruópolis y persigue a Sulley como si fuese su ‘gatito’. Se encargará de ganarse la simpatía de los dos protagonistas de ‘Monstruos S.A.’ por su carácter adorable, pero también por su capacidad para enfrentarse a Randall.",
        'comentario' => array(
            (object) array(
                'coment' => '¡Mike, Sulley! ¡Jugar a asustar es divertido, pero prefiero los abrazos!',
                'user' => 'mike.jpeg'
            )
        )
    ),
    (object) array(
        'titulo' => 'Randall',
        'img' => 'randall.jpeg',
        'likes' => 2,
        'des' => "Poco tiene que ver el Randall que compartía habitación con Mike en la universidad con el ambicioso monstruo que amenaza a Boo en ‘Monstruos S.A’.",
        'comentario' => array(
            (object) array(
                'coment' => '¿Creen que Boo pueda abrir puertas a otros mundos? Eso podría ser muy útil para mí.',
                'user' => 'randall.jpeg'
            )
        )
    )
);

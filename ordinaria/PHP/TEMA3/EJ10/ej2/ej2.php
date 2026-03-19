<?php 
$bandas = [
    "U2" => [
        "vocalista" => [
            "nombre" => "Bono",
            "rol"    => "Voz",
            "imagen" => "img/u2/bono.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "The Edge",
                "rol"    => "Guitarra",
                "imagen" => "img/u2/the_edge.jpg"
            ],
            [
                "nombre" => "Adam Clayton",
                "rol"    => "Bajo",
                "imagen" => "img/u2/adam_clayton.jpg"
            ],
            [
                "nombre" => "Larry Mullen Jr.",
                "rol"    => "Batería",
                "imagen" => "img/u2/larry_mullen_jr.jpg"
            ],
        ],
    ],

    "Led Zeppelin" => [
        "vocalista" => [
            "nombre" => "Robert Plant",
            "rol"    => "Voz",
            "imagen" => "img/led_zeppelin/robert_plant.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "Jimmy Page",
                "rol"    => "Guitarra",
                "imagen" => "img/led_zeppelin/jimmy_page.jpg"
            ],
            [
                "nombre" => "John Paul Jones",
                "rol"    => "Bajo",
                "imagen" => "img/led_zeppelin/john_paul_jones.jpg"
            ],
            [
                "nombre" => "John Bonham",
                "rol"    => "Batería",
                "imagen" => "img/led_zeppelin/john_bonham.jpg"
            ],
        ],
    ],

    "Metallica" => [
        "vocalista" => [
            "nombre" => "James Hetfield",
            "rol"    => "Voz y guitarra rítmica",
            "imagen" => "img/metallica/james_hetfield.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "Lars Ulrich",
                "rol"    => "Batería",
                "imagen" => "img/metallica/lars_ulrich.jpg"
            ],
            [
                "nombre" => "Kirk Hammett",
                "rol"    => "Guitarra solista",
                "imagen" => "img/metallica/kirk_hammett.jpg"
            ],
            [
                "nombre" => "Robert Trujillo",
                "rol"    => "Bajo",
                "imagen" => "img/metallica/robert_trujillo.jpg"
            ],
        ],
    ],

    "AC/DC" => [
        "vocalista" => [
            "nombre" => "Brian Johnson",
            "rol"    => "Voz",
            "imagen" => "img/acdc/brian_johnson.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "Angus Young",
                "rol"    => "Guitarra solista",
                "imagen" => "img/acdc/angus_young.jpg"
            ],
            [
                "nombre" => "Stevie Young",
                "rol"    => "Guitarra rítmica",
                "imagen" => "img/acdc/stevie_young.jpg"
            ],
            [
                "nombre" => "Cliff Williams",
                "rol"    => "Bajo",
                "imagen" => "img/acdc/cliff_williams.jpg"
            ],
            [
                "nombre" => "Phil Rudd",
                "rol"    => "Batería",
                "imagen" => "img/acdc/phil_rudd.jpg"
            ],
        ],
    ],

    "Queen" => [
        "vocalista" => [
            "nombre" => "Freddie Mercury",
            "rol"    => "Voz",
            "imagen" => "img/queen/freddie_mercury.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "Brian May",
                "rol"    => "Guitarra",
                "imagen" => "img/queen/brian_may.jpg"
            ],
            [
                "nombre" => "John Deacon",
                "rol"    => "Bajo",
                "imagen" => "img/queen/john_deacon.jpg"
            ],
            [
                "nombre" => "Roger Taylor",
                "rol"    => "Batería",
                "imagen" => "img/queen/roger_taylor.jpg"
            ],
        ],
    ],

    "The Beatles" => [
        "vocalista" => [
            "nombre" => "John Lennon",
            "rol"    => "Voz",
            "imagen" => "img/beatles/john_lennon.jpg"
        ],
        "musicos" => [
            [
                "nombre" => "Paul McCartney",
                "rol"    => "Bajo",
                "imagen" => "img/beatles/paul_mccartney.jpg"
            ],
            [
                "nombre" => "George Harrison",
                "rol"    => "Guitarra",
                "imagen" => "img/beatles/george_harrison.jpg"
            ],
            [
                "nombre" => "Ringo Starr",
                "rol"    => "Batería",
                "imagen" => "img/beatles/ringo_starr.jpg"
            ],
        ],
    ],
];









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cantanrtes</title>
</head>
<body>
    <h1>cantantes<h2>
    <form  method="get" action="">

<select id="bandas"name="marca">
    <?php 
foreach ($bandas as $key => $modelos) {

     echo "<option value='$key'>$key</option>";
 }  ?>
 





</select>
<input type="radio" name="tipo" value="vocalista"> Vocalista
<input type="radio" name="tipo" value="musicos"> Músicos
<input type="submit" name="ver_modelos" value="Ver Modelos">

<br>
<br>

<section id="resultado">
<?php

$banda=$_GET["marca"];
$seleccion=$_GET["tipo"];
switch ($seleccion) {
    case 'vocalista':
      echo($bandas[$banda]["vocalista"]["nombre"]);
        break;
        case 'musicos':
            echo("musicos: ");
foreach ($bandas[$banda]["musicos"] as $key => $value) {
   echo $bandas[$banda]["musicos"][$key]["nombre"].", ";
}
        break;
    default:
        # code...
        break;
}



?>

</section>
</form>
</body>
</html>
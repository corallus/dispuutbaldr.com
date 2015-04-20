<?php
require('../libs/Smarty.class.php');

$smarty = new Smarty;


//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("curPage", 'leden');

$smarty->assign("leden",
    [
        "2010" => [
            [
                "naam" => "Jasper Jansen",
                "foto" => "../static/img/leden/VAW_5065-2.jpg"
            ],
            [
                "naam" => "Thomas Kenbeek",
                "foto" => "../static/img/leden/VAW_5065-4.jpg"
            ]
        ],
        "2011" => [
            [
                "naam" => "Willem van de Bunt",
                "foto" => "../static/img/leden/VAW_5065-9.jpg"
            ],
            [
                "naam" => "Martijn ten Voorde",
                "foto" => "../static/img/2.jpg"
            ],
            [
                "naam" => "Jelle Kerstjens",
                "foto" => "../static/img/leden/VAW_5065-10.jpg"
            ],
        ],
        "2012" => [
            [
                "naam" => "Pascal Dubois",
                "foto" => "../static/img/leden/VAW_5065-17.jpg"
            ],
            [
                "naam" => "Bas aan de Brugh",
                "foto" => "../static/img/leden/VAW_5065-3.jpg"
            ],
        ],
        "2013" => [
            [
                "naam" => "Martijn de Wit",
                "foto" => "../static/img/leden/VAW_5065-0.jpg"
            ],
            [
                "naam" => "Vincent Wouterse",
                "foto" => "../static/img/2.jpg"
            ],
            [
                "naam" => "Guus Janssen",
                "foto" => "../static/img/2.jpg"
            ],
            [
                "naam" => "Daan Smit",
                "foto" => "../static/img/leden/VAW_5065-1.jpg"
            ],
        ],
        "2014" => [
            [
                "naam" => "Maarten Jongeneel",
                "foto" => "../static/img/leden/VAW_5065-14.jpg"
            ],
            [
                "naam" => "Vincent Nieuwenhuis",
                "foto" => "../static/img/leden/VAW_5065-16.jpg"
            ],
            [
                "naam" => "Wouter Vermeeren",
                "foto" => "../static/img/leden/VAW_5065-5.jpg"
            ],
            [
                "naam" => "Harro Tuin",
                "foto" => "../static/img/leden/VAW_5065-13.jpg"
            ],
        ],
        "2015" => [
            [
                "naam" => "Joris Marcelis",
                "foto" => "../static/img/2.jpg"
            ],
            [
                "naam" => "Niels van Dijk",
                "foto" => "../static/img/2.jpg"
            ],
            [
                "naam" => "Jehudie Campfens",
                "foto" => "../static/img/leden/VAW_5065-8.jpg"
            ],
            [
                "naam" => "Bram van Halteren",
                "foto" => "../static/img/leden/VAW_5065-18.jpg"
            ]
        ]
    ]
);

$smarty->display('leden.tpl');
?>

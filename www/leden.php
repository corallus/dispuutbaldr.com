<?php
require('../vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty;


//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("curPage", 'leden');

$smarty->assign("leden",
    array(
	array(
            "naam" => "Bentley Hendrickx",
            "foto" => "../static/img/leden/foto_bentley.jpg",
            "jaar" => "2006"
        ),
        array(
            "naam" => "Jasper Jansen",
            "foto" => "../static/img/leden/VAW_5065-2.jpg",
            "jaar" => "2009"
        ),
        array(
            "naam" => "Thomas Kenbeek",
            "foto" => "../static/img/leden/VAW_5065-4.jpg",
            "jaar" => "2010"
        ),
        array(
            "naam" => "Pim van de Bunt",
            "foto" => "../static/img/leden/VAW_5065-9.jpg",
            "jaar" => "2011"
        ),
        array(
            "naam" => "Martijn ten Voorde",
            "foto" => "../static/img/leden/foto_otto.jpg",
            "jaar" => "2011"
        ),
        array(
            "naam" => "Jelle Kerstjens",
            "foto" => "../static/img/leden/VAW_5065-10.jpg",
            "jaar" => "2011"
        ),
        array(
            "naam" => "Pascal Dubois",
            "foto" => "../static/img/leden/VAW_5065-17.jpg",
            "jaar" => "2012"
        ),
        array(
            "naam" => "Bas aan de Brugh",
            "foto" => "../static/img/leden/VAW_5065-3.jpg",
            "jaar" => "2012"
        ),
        array(
            "naam" => "Martijn de Wit",
            "foto" => "../static/img/leden/VAW_5065-0.jpg",
            "jaar" => "2013"
        ),
        array(
            "naam" => "Vincent Wouterse",
            "foto" => "../static/img/leden/VAW_5065-19.jpg",
            "jaar" => "2013"
        ),
        array(
            "naam" => "Guus Janssen",
            "foto" => "../static/img/leden/fotoguus.JPG",
            "jaar" => "2013"
        ),
        array(
            "naam" => "Daan Smit",
            "foto" => "../static/img/leden/VAW_5065-1.jpg",
            "jaar" => "2013"
        ),
        array(
            "naam" => "Maarten Jongeneel",
            "foto" => "../static/img/leden/VAW_5407-24.jpg",
            "jaar" => "2014"
        ),
        array(
            "naam" => "Vincent Nieuwenhuis",
            "foto" => "../static/img/leden/VAW_5065-16.jpg",
            "jaar" => "2014"
        ),
        array(
            "naam" => "Wouter Vermeeren",
            "foto" => "../static/img/leden/VAW_5065-5.jpg",
            "jaar" => "2014"
        ),
        array(
            "naam" => "Harro Tuin",
            "foto" => "../static/img/leden/VAW_5065-13.jpg",
            "jaar" => "2014"
        ),
        array(
            "naam" => "Joris Marcelis",
            "foto" => "../static/img/leden/VAW_5151-22.jpg",
            "jaar" => "2015"
        ),
        array(
            "naam" => "Niels van Dijk",
            "foto" => "../static/img/leden/VAW_5043-25.jpg",
            "jaar" => "2015"
        ),
        array(
            "naam" => "Jehudi Campfens",
            "foto" => "../static/img/leden/VAW_5065-8.jpg",
            "jaar" => "2015"
        ),
        array(
            "naam" => "Bram van Halteren",
            "foto" => "../static/img/leden/VAW_5065-18.jpg",
            "jaar" => "2015"
        )
        
    )
);

$smarty->display('leden.tpl');
?>

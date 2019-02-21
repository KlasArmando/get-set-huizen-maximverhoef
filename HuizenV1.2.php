<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 20-2-2019
 * Time: 11:28
 */
$total = 0;
class Chamber{
    public $name;
    public $height;
    public $width;
    public $depth;
    public $m3;
    public $pricePM3;
    public $priceTotal;

    public function __construct($name, $height, $width, $depth, $pricePM3 )
    {
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
        $this->m3 = $height*$width*$depth;
        $this->pricePM3 = 300;
        $this->priceTotal = $this->m3*$pricePM3;
    }
}


$bedroom = new Chamber('Slaapkamer', '2.5', '7', '4', '300');
$livingroom = new Chamber('Woonkamer', '2.5', '8', '6', '300');
$toilet = new Chamber('Toilet', '2.5', '1', '1', '300');
$bathroom = new Chamber('Badkamer', '2.5', '3', '5', '300');
$kitchen = new Chamber('Keuken', '2.5', '7', '3', '300');

$house1 = array($bedroom, $livingroom, $toilet, $bathroom, $kitchen);

foreach ($house1 as $h1) {
    $value = $bedroom->m3+$livingroom->m3+$toilet->m3+$bathroom->m3+$kitchen->m3;

    echo 'Kamer: ' .$h1->name . '<br />';
    echo 'Hoogte in m: ' .$h1->height . '<br />';
    echo 'Breedte in m: ' .$h1->width . '<br />';
    echo 'Diepte in m: ' .$h1->depth . '<br />';
    echo 'Afmeting in m3: ' .$h1->m3 . '<br />';
    echo 'Prijs van kamer: €' . $h1->priceTotal . '<br />';
}
echo 'Totaal prijs huis: €' . $value*$h1->pricePM3 . '<hr />';

$bedroom = new Chamber('Slaapkamer', '2.5', '5', '4', '300');
$livingroom = new Chamber('Woonkamer', '2.5', '7', '7', '300');
$toilet = new Chamber('Toilet', '2.5', '1', '2', '300');
$bathroom = new Chamber('Badkamer', '2.5', '3', '6', '300');
$kitchen = new Chamber('Keuken', '2.5', '5', '3', '300');

$house2 = array($bedroom, $livingroom, $toilet, $bathroom, $kitchen);

foreach ($house2 as $h2) {
    $value = $bedroom->m3+$livingroom->m3+$toilet->m3+$bathroom->m3+$kitchen->m3;

    echo 'Kamer: ' .$h2->name . '<br />';
    echo 'Hoogte in m: ' .$h2->height . '<br />';
    echo 'Breedte in m: ' .$h2->width . '<br />';
    echo 'Diepte in m: ' .$h2->depth . '<br />';
    echo 'Afmeting in m3: ' .$h2->m3 . '<br />';
    echo 'Prijs van kamer: ' .'Prijs: €' . $h2->priceTotal . '<br />';
}
echo 'Totaal prijs huis: €' . $value*$h2->pricePM3 . '<hr />';

$bedroom = new Chamber('Slaapkamer', '2.5', '8', '4', '300');
$livingroom = new Chamber('Woonkamer', '2.5', '9', '7', '300');
$toilet = new Chamber('Toilet', '2.5', '2', '2', '300');
$bathroom = new Chamber('Badkamer', '2.5', '5', '6', '300');
$kitchen = new Chamber('Keuken', '2.5', '9', '5', '300');

$house3 = array($bedroom, $livingroom, $toilet, $bathroom, $kitchen);

foreach ($house3 as $h3) {
    $value = $bedroom->m3+$livingroom->m3+$toilet->m3+$bathroom->m3+$kitchen->m3;

    echo 'Kamer: ' .$h3->name . '<br />';
    echo 'Hoogte in m: ' .$h3->height . '<br />';
    echo 'Breedte in m: ' .$h3->width . '<br />';
    echo 'Diepte in m: ' .$h3->depth . '<br />';
    echo 'Afmeting in m3: ' .$h3->m3 . '<br />';
    echo 'Prijs van kamer: €' . $h3->priceTotal . '<br />';
}
echo 'Totaal prijs huis: €' . $value*$h3->pricePM3 . '<hr />';
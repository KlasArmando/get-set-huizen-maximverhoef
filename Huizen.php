<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 13-2-2019
 * Time: 09:58
 */
$TotalH1 = 0;
$TotalH2 = 0;
$TotalH3 = 0;
$PriceH1 = 350;
$PriceH2 = 300;
$PriceH3 = 400;

class Room{
    public $Name;
    public $Width;
    public $Height;
    public $Depth;
    public $M3;
}

$H1Bedroom1 = new Room();
$H1Bedroom1->Name = 'Slaapkamer' ;
$H1Bedroom1->Width = 3;
$H1Bedroom1->Height = 2.5;
$H1Bedroom1->Depth = 7;
$H1Bedroom1->M3 = $H1Bedroom1->Width*$H1Bedroom1->Height*$H1Bedroom1->Depth;

$H1Bedroom2 = new Room();
$H1Bedroom2->Name = 'Slaapkamer';
$H1Bedroom2->Width = 7;
$H1Bedroom2->Height = 2.5;
$H1Bedroom2->Depth = 7;
$H1Bedroom2->M3 = $H1Bedroom2->Width*$H1Bedroom2->Height*$H1Bedroom2->Depth;

$H1Bathroom = new Room();
$H1Bathroom->Name = 'Badkamer';
$H1Bathroom->Width = 3;
$H1Bathroom->Height = 2.5;
$H1Bathroom->Depth = 4;
$H1Bathroom->M3 = $H1Bathroom->Width*$H1Bathroom->Height*$H1Bathroom->Depth;

$H1Toilet = new Room();
$H1Toilet->Name = 'Toilet';
$H1Toilet->Width = 1;
$H1Toilet->Height = 2.5;
$H1Toilet->Depth =2;
$H1Toilet->M3 = $H1Toilet->Width*$H1Toilet->Height*$H1Toilet->Depth;

$H1LivingRoom = new Room();
$H1LivingRoom->Name = 'Woonkamer';
$H1LivingRoom->Width = 7;
$H1LivingRoom->Height = 2.5;
$H1LivingRoom->Depth =9;
$H1LivingRoom->M3 = $H1LivingRoom->Width*$H1LivingRoom->Height*$H1LivingRoom->Depth;

$H1Kitchen = new Room();
$H1Kitchen->Name = 'Keuken';
$H1Kitchen->Width = 9;
$H1Kitchen->Height = 2.5;
$H1Kitchen->Depth =3;
$H1Kitchen->M3 = $H1Kitchen->Width*$H1Kitchen->Height*$H1Kitchen->Depth;

$H2Bedroom = new Room();
$H2Bedroom->Name = 'Slaapkamer';
$H2Bedroom->Width = 7;
$H2Bedroom->Height = 2.5;
$H2Bedroom->Depth = 3;
$H2Bedroom->M3 = $H2Bedroom->Width*$H2Bedroom->Height*$H2Bedroom->Depth;

$H2Bathroom = new Room();
$H2Bathroom->Name = 'Badkamer';
$H2Bathroom->Width = 7;
$H2Bathroom->Height = 2.5;
$H2Bathroom->Depth = 4;
$H2Bathroom->M3 = $H2Bathroom->Width*$H2Bathroom->Height*$H2Bathroom->Depth;

$H2Toilet = new Room();
$H2Toilet->Name = 'Toilet';
$H2Toilet->Width = 2;
$H2Toilet->Height = 2.5;
$H2Toilet->Depth = 2;
$H2Toilet->M3 = $H2Toilet->Width*$H2Toilet->Height*$H2Toilet->Depth;

$H2LivingRoom = new Room();
$H2LivingRoom->Name = 'Woonkamer';
$H2LivingRoom->Width = 8;
$H2LivingRoom->Height = 2.5;
$H2LivingRoom->Depth = 4;
$H2LivingRoom->M3 = $H2LivingRoom->Width*$H2LivingRoom->Height*$H2LivingRoom->Depth;

$H3Bedroom = new Room();
$H3Bedroom->Name = 'Slaapkamer';
$H3Bedroom->Width = 7;
$H3Bedroom->Height = 2.5;
$H3Bedroom->Depth = 5;
$H3Bedroom->M3 = $H3Bedroom->Width*$H3Bedroom->Height*$H3Bedroom->Depth;

$H3Bathroom = new Room();
$H3Bathroom->Name = 'Badkamer';
$H3Bathroom->Width = 5;
$H3Bathroom->Height = 2.5;
$H3Bathroom->Depth = 5;
$H3Bathroom->M3 = $H3Bathroom->Width*$H3Bathroom->Height*$H3Bathroom->Depth;

$H3Toilet = new Room();
$H3Toilet->Name = 'Toilet';
$H3Toilet->Width = 2;
$H3Toilet->Height = 2.5;
$H3Toilet->Depth = 2;
$H3Toilet->M3 = $H3Toilet->Width*$H3Toilet->Height*$H3Toilet->Depth;

$H3LivingRoom = new Room();
$H3LivingRoom->Name = 'Woonkamer';
$H3LivingRoom->Width = 9;
$H3LivingRoom->Height = 2.5;
$H3LivingRoom->Depth = 9;
$H3LivingRoom->M3 = $H3LivingRoom->Width*$H3LivingRoom->Height*$H3LivingRoom->Depth;

$House1 = array ($H1Bedroom1, $H1Bedroom2, $H1Bathroom, $H1Toilet, $H1LivingRoom, $H1Kitchen);

foreach ($House1 as $H1) {
    $Value1 = $H1->M3*$PriceH1;

    echo '<strong>Kamer: ' . $H1->Name . '</strong><br />';
    echo 'Breedte in m: ' . $H1->Width . '<br />';
    echo 'Hoogte in m: ' . $H1->Height . '<br />';
    echo 'Diepte in m: ' . $H1->Depth . '<br />';
    echo 'Kamer in m3: ' .  $H1->M3 . '<br />';
    echo 'Optellen m3: ' . $TotalH1 = $TotalH1 + $H1->M3;
    echo '<br />Prijs kamer: €' . $Value1 . '<br />';

    echo '<br />';
}
echo '<strong>Totaalprijs: € ' . $TotalH1*$PriceH1 . '</strong><hr />';
$House2 = array ($H2Bedroom, $H2Bathroom,$H2Toilet, $H2LivingRoom );
foreach ($House2 as $H2) {
    $Value2 = $H2->M3*$PriceH2;

    echo '<strong>Kamer: ' . $H2->Name. '</strong><br />';
    echo 'Breedte in m: ' . $H2->Width . '<br />';
    echo 'Hoogte in m: ' . $H2->Height . '<br />';
    echo 'Diepte in m: ' . $H2->Depth . '<br />';
    echo 'In m3: ' . $H2->M3 . '<br />';
    echo 'Optellen m3: ' . $TotalH2 = $TotalH2 + $H2->M3;
    echo '<br />Prijs kamer: €' . $Value2 . '<br />';
    echo '<br />';
}

echo '<strong>Totaalprijs: € ' . $TotalH2*$PriceH2 . '</strong><hr />';

$House3 = array ($H3Bedroom, $H3Bathroom,$H3Toilet, $H3LivingRoom );
foreach ($House3 as $H3) {
    $Value3 = $H3->M3*$PriceH3;

    echo '<strong>Kamer: ' . $H3->Name. '</strong><br />';
    echo 'Breedte in m: ' . $H3->Width . '<br />';
    echo 'Hoogte in m: ' . $H3->Height . '<br />';
    echo 'Diepte in m: ' . $H3->Depth . '<br />';
    echo 'In m3: ' . $H3->M3 . '<br />';
    echo 'Optellen m3: ' . $TotalH3 = $TotalH3 + $H3->M3;
    echo '<br />Prijs kamer: €' . $Value3 . '<br />';
    echo '<br />';
}
$TotalPrice = $H3->M3*$PriceH3;
echo 'Optellen m3: ' . $TotalH3 ;
echo '<strong>Totaalprijs: € ' . $TotalH3*$PriceH3 . '</strong>';

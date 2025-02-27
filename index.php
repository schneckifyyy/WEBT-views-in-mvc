<?php
require_once 'vendor/autoload.php';
use Adamogris\WebtViewsInMvc\Model\Entity\Hotel;

$hotels = [new Hotel("Seaside Paradise",
    "Located in the heart of the city, Hotel Paradise offers breathtaking views and world-class amenities to make your stay unforgettable.",
    "src/images/hotelParadise.jpg"),
    new Hotel("Ocean View Resort",
        "Wake up to the sound of the waves at Ocean View Resort, where luxury meets the tranquility of the sea.",
        "src/images/OceanViewResort.jpg"),
    new Hotel("Mountain Escape Lodge",
        "Surrounded by stunning mountains, this lodge is the perfect getaway for those seeking adventure and relaxation.",
        "src/images/mountainsEscapeLodge.jpg"),];
$template = fread(fopen('src/templates/index.html', 'r'), filesize('src/templates/index.html'));

$tempReplaced = str_replace("###Hotel1Name###", $hotels[0]->getName(), $template);
$tempReplaced = str_replace("###Hotel2Name###", $hotels[1]->getName(), $tempReplaced);
$tempReplaced = str_replace("###Hotel3Name###", $hotels[2]->getName(), $tempReplaced);

$tempReplaced = str_replace("###Hotel1Description###", $hotels[0]->getDescription(), $tempReplaced);
$tempReplaced = str_replace("###Hotel2Description###", $hotels[1]->getDescription(), $tempReplaced);
$tempReplaced = str_replace("###Hotel3Description###", $hotels[2]->getDescription(), $tempReplaced);

$tempReplaced = str_replace("###Hotel1Pic###", $hotels[0]->getImgPath(), $tempReplaced);
$tempReplaced = str_replace("###Hotel2Pic###", $hotels[1]->getImgPath(), $tempReplaced);
$tempReplaced = str_replace("###Hotel3Pic###", $hotels[2]->getImgPath(), $tempReplaced);

echo $tempReplaced;
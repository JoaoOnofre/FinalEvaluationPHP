<?php 

include('Cat.php');

$cat1 = new Chat('Dragon ', 15, 'blue', 'male', 'deutch');
$cat1 = $cat1->getInfos();
foreach($cat1 as $c) {
	echo $c;
}

$cat2 = new Chat('Fire ', 14, 'red', 'male', 'french');
$cat2 = $cat2->getInfos();
foreach($cat2 as $c) {
	echo $c;
}

$cat3 = new Chat('Lady ', 1, 'green', 'female', 'japanese');
$cat3 = $cat3->getInfos();
foreach($cat3 as $c) {
	echo $c;
}
?>
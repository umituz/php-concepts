<?php

include 'mobile.php';
include 'laser.php';
include 'projector.php';

class Galaxy extends Mobile
{
	use Laser,Projector{
		Laser::power insteadof Projector;
		Projector::power as Ppower;
	}
}

$nesne = new Galaxy;
$nesne->power();
$nesne->Ppower();
//$nesne->battery();
//$nesne->range();



<?php

require_once __DIR__.'/Truck.php';

//create object for Truck class
$truck = new Truck('brown' ,2, 'fuel', 20);

//check storage capacity
echo $truck->checkCapacity();
echo "<br>";

//set loading for truck and check capacity
echo $truck->setLoading(20);
echo $truck->checkCapacity();
echo "<br>";

//moving truck
echo $truck->forward();
echo "<br>";
echo $truck->brake();
echo "<br>";

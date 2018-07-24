<?php 
// Here I require my class Cat .
require_once __DIR__.'/cat.php';



// I created three instances from class Cat and set some values to check them with getInfo(); function 


// The first instance .. 

echo '<pre>';
$cat1= new Cat();
$cat1->setFirstname('Bahaa')
     ->setAge(22)
     ->setColor('Red')
     ->setSex('male')
     ->setRace('Arab');

print_r(get_object_vars($cat1));
$cat1->getInfo(); // I call the getInfo function here to check the values of the new instance

echo '</pre>';


// The second instance .. 

echo '<pre>';
$cat2= new Cat();
$cat2->setFirstname('John')
     ->setAge(19)
     ->setColor('black')
     ->setSex('male')
     ->setRace('maxico');

print_r(get_object_vars($cat2));
$cat2->getInfo(); // I call the getInfo function here to check the values of the new instance

echo '</pre>';

// The third instance .. 

echo '<pre>';
$cat3= new Cat();
$cat3->setFirstname('Max')
     ->setAge(22)
     ->setColor('white')
     ->setSex('female')
     ->setRace('America');

print_r(get_object_vars($cat3));
$cat3->getInfo(); // I call the getInfo function here to check the values of the new instance

echo '</pre>';

?>
<?php
/**
 * Cat
 * The class Cat is used to represent a basic cat, with:
 * First name (string of 3 to 20 characters)
 * Age (int)
 * Color (string of 3 to 10 characters)
 * Sex (string: male or female)
 * Race (string of 3 to 20 characters)  
 */

 class Cat  
 {
     private $firstname;
     private $age;
     private $color;
     private $sex;
     private $race;
     private static $allowedSex = ['male', 'female'];  // Here we set the allowed genders as a private variable 

     // I will create a function to get the infos from the new instance object of the class cat //
     // The getInfo method have to return an array. It's an error to display it inside the method
     public function getInfo() {
        var_dump(get_object_vars($this));
     }
     // The gettes are starting here 
     public function getFirstname() : string
     {
         return $this->firstname;
     }
     public function getAge() : int
     {
         return $this->age;
     }
     public function getColor() : string
     {
         return $this->color;
     }
     public function getSex() : string
     {
         return $this->sex;
     }
     public function getRace() : string
     {
         return $this->race;
     }

     //the getters are ending here 

     //The setters are starting here .

     public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }
    public function setSex(string $sex) // we check for the alowed genders .
    {
        if (!in_array($sex, self::$allowedSex)) {
            return ;
        }

        $this->sex = $sex;
        return $this;
    }
    public function setRace(string $race)
    {
        $this->race = $race;
        return $this;
    }

    //the setters are ending here 


    // We make a static function to access an instance object propereties.
    // Better to use constructor here
    public static function fromArray(array $definition)
    {
        $cat = new Cat();
        $cat->setFirstname($definition['firstname'] ?? '')
            ->setAge((int)$definition['age'] ?? '')
            ->setColor($definition['color'] ?? '')
            ->setSex($definition['sex'] ?? '')
            ->setRace($definition['race'] ?? '');

        return $cat;
    }

 }



// I want to test my getInfo and it works .. 
//$cat = new Cat(); 
//print_r(get_object_vars($cat));
//$cat->getInfo();



















?>

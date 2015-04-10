<?php


class rectangle
{
	public $height;
	public $width;

	public function __construct($width, $height)
	{
		 $this->height = $height;
		 $this->width = $width;
	}

	 public function getArea()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return ($this->height + $this->width) * 2;  
    }


}


// class Person
// {
//     public $firstName;
//     public $lastName;

//     public function __construct($firstName, $lastName)
//     {
//         $this->firstName = $firstName;
//         $this->lastName  = $lastName;
//     }

//     public function fullName()
//     {
//         return $this->firstName . ' ' . $this->lastName;
//     }
// }
// class Superhero extends Person
// {
//     public $pseudonym;
//     public $capeColor;

//     public function alterEgo()
//     {
//         return 'Top Secret Alternate Ego: ' . $this->fullName();
//     }

//     public function hasCape()
//     {
//         return !empty($this->capeColor);
//     }
// }
// $superman = new Superhero('Clark', 'Kent');
// $superman->pseudonym = 'Superman';
// $superman->capeColor = 'red';

// echo $superman->alterEgo() . PHP_EOL;


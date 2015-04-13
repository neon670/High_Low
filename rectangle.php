<?php


class Rectangle
{
	private $height;
	private $width;

	public function __construct($width, $height)
	{
		 $this->setHeight($height);
		 $this->setWidth($width);
	}

	protected function setHeight($height)
	{
		return is_numeric($height) ? $this->height = $height : null;
	}
	protected function setWidth($width)
	{
		return is_numeric($width) ? $this->width = $width : null;
	}

	public function getHeight()
	{
		return $this->height;
	}
	public function getWidth()
	{
		return $this->width;
	}
	 public function area()
    {
        return $this->getHeight() * $this->getWidth();
    }

    public function perimeter()
    {
        return $this->getHeight() + $this->getWidth() * 2;  
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


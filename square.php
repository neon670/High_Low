<?php

//require 'rectangle.php';


class Square extends Rectangle 
{
	public function __construct($height)
	{
		parent::__construct($height, $height);
	}



 	public function area()
    {
        return $this->getHeight() * $this->getHeight();
    }

    public function perimeter()
    {
        return $this->getHeight() * 4;  
    }

}
<?php



namespace Local\Dish;

class Dish
{
	

	public function getId(): int
	{
		return $this->id;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPrice(): float
	{
		return $this->price;
	}

	public function getFeatured(){
		return $this->featured;
	}
	public function getTest(){
		echo "BUGAGA0";
	}
}


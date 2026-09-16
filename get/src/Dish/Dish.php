<?php



namespace Local\Dish;

class Dish
{
	public function __construct(
		private int $id,
		private string $name,
		private float $price,
		private string $featured
){

}

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
}


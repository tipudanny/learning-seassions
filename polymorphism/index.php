<?php


class Water 
{
	
	public function charecterstics ()
	{
		return $this->test();
	}

	private function test()
	{
		return array(
			'Color',
			'Turbidity ',
			'Taste and odor ',
			'Temperature',
			'Solids',
		);
	}
}
class Fire extends Water
{
	
	public function charecterstics ()
	{
		return array(
			'Flame height',
			'Fire intensity',
			'Season of year',
			'Frequency',
			'Flame angle',
			'Scorch height',
		);
	}
}
class Air 
{
	
	public function charecterstics ()
	{
		return array(
			'Air is made up of gases',
			'Air has mass',
			'Air exerts pressure and has weight',
			'Air can be compressed',
			'Air is impacted by temperature',
		);
	}
}
class Earth 
{
	
	public function charecterstics ()
	{
		return array(
			'Facts About Its Orbit',
			'Atmosphere ',
			'Facts About Its Orbit Size ',
			'Earth has a diameter of roughly 8,000 miles',
			'Perihelion',
		);
	}
}

function describe($element){
	echo "<strong>".get_class($element).": </strong> <br>";
	echo "<br>";
	if (is_array($element->charecterstics())) {
		foreach ($element->charecterstics() as $charecter) {
			echo $charecter."<br>";
		}
	}
}

$element = new Water;
describe($element);

echo "<br>";
$element = new Fire;
describe($element);

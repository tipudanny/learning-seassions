<?php
	
/**
 * 
 * Details describe to Laravel Facade
 * Laravel Facade is converting the non-static function as a static function
 * you can call non-static function like this "Facade::yourFunction()";
 * Declair a Fish Class
 */

class Fish 
{
	
	public function swim()
	{
		return "Swiming";
	}

	public function eat()
	{
		return "Eating";
	}
}
/**
 *
 * Declair a another Bike Class
 */

class Bike
{
	
	public function start()
	{
		return "Starting";
	}
}

/**
 *
 * Bindings classes into laravel Container
 */

app()->bind('fish',function(){
	return new Fish;
});

app()->bind('bike',function(){
	return new Bike;
});

/**
 *
 * Create a base Faceade for using multiple Facade easily
 */

class Facade
{
	
	public static function __callstatic($name,$args)
	{
		return app()->make(static::getFacadeAccessor())->$name();
	}

	protected static function getFacadeAccessor()
	{
		# code...
	}
}

/**
 *
 * Create a your own Faceade called FishFacade  
 */
class FishFachade extends Facade
{
	protected static function getFacadeAccessor ()
	{
		return "fish";
	}
	
}

/**
 *
 * Create a your own Faceade called  BikeFacade 
 */

class BikeFacade extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return "bike";
	}
}

/**
 *
 * Call your own facade functions as a static function.
 */

dd(BikeFacade::start());




?>
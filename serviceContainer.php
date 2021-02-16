<?php
	
	/**
	 * 
	 */
	class Stadium
	{
		
		// function __construct(argument)
		// {
		// 	# code...
		// }
	}
	/**
	 * 
	 */
	class Football
	{
		
		function __construct(Stadium $stadium)
		{
			$this->stadium = $stadium;
		}
	}
	/**
	 * 
	 */
	class Game
	{
		
		function __construct(Football $football)
		{
			$this->football = $football;
		}
	}
	
	/**
	 * 
	 */
	class Container
	{
		protected $bindings = [];

		public function bind($name, callable $resolver)
		{
			$this->bindings[$name] = $resolver;
		}

		public function make($make)
		{
			return $this->bindings[$make]();
		}

	}

	$container = new Container;

	$container->bind('Game', function(){
		return new Game(new Football(new Stadium));
	});

	print_r($container->make("Game"));

	//For Laravel use this resolve() function, this is the Laravel Service Container Service.
	//print_r(resolve('Game'));

?>
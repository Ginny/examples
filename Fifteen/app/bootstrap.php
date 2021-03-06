<?php

use Nette\Diagnostics\Debugger,
	Nette\Environment,
	Nette\Application\Routers\SimpleRouter;



// Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
require __DIR__ . '/../../../Nette/loader.php';


// Enable Nette\Debug for error visualisation & logging
Debugger::enable();

// Enable RobotLoader - this allows load all classes automatically
// so that you don't have to litter your code with 'require' statements
Environment::getRobotLoader()->register();


// Configure application
$application = Environment::getApplication();
$application->router[] = new SimpleRouter('Default:default');


// Run the application!
$application->run();

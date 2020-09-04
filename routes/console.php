<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe(': Display an inspiring quote');

Artisan::command('math', function () {

	$method = $this->choice('What is your name?', ['sum', 'sub','mul']);
	$a = $this->ask('Enter First Number');
	$b =$this->ask('Enter Second Number');
	switch ($method) {
		case 'sum':
			$x =  $a + $b;
			$symbol = ' + ';
			break;
		case 'sub':
			$x =  $a - $b;
			$symbol = ' - ';
			break;
		case 'mul':
			$x =  $a * $b;
			$symbol = ' * ';
			break;
		default:
			# code...
			break;
	}
	if ($this->confirm('do you wish to continue?')) {
        $this->comment('Total '.$method.' '.$a.$symbol.$b.' = '.$x);
    }
    else{
    	$password = $this->secret('What is the password?');
    	$this->comment('Bye ;) '.$password);
    }
})->describe(': Math Common');

Artisan::command('build {project}', function ($project) {

    $this->info("Building {$project}!");
})->describe(': Build the project');




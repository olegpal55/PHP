<?php
	use \Core\Route;

	return [
		new Route('/page/:id/', 'page', 'show'),
	];
?>

<?php
	ini_set(display_errors, 1);

	include('Worker.php');

	$workerIvan = new Worker();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(25);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$workerValya = new Worker();
	$workerValya->setName('Валя');
	$workerValya->setAge(27);
	$workerValya->setSalary(3000);
?>
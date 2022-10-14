<?php 

require '../vendor/autoload.php';

use App\Models\Car;
use App\Models\CarManager;
use App\Models\CarRepository;
use App\Models\DbConnect;


$dbConnect = new DbConnect();
$carRepo = new CarRepository($dbConnect);
$carUpdate = new CarManager($dbConnect);


// $c = new Car();
// $c->id = 3;
// $c->name = "BMW";
// $c->release = "2013-06-10";
// $carRepo->insert($c);

$u = new Car();
$u->id=3;
$u->name ="Porche";
$u->release = "1999-05-01";
$carUpdate->update($u);


sleep(1);


$update = $carUpdate->selectAll(); 
// $result = $carRepo->selectAll();

echo '<pre>' . var_export($update, true);

echo '<br>';
echo 'Hello';
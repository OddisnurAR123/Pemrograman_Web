<?php
class Car
{
    public $brand;

    public function startEngine()
    {
        echo "Engine started!";
    }
}
$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand; // Memindahkan tanda "|" ke dalam baris yang sama dengan perintah echo
?>
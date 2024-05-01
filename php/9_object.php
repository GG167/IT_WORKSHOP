<?php
class bike 
{
    function model() 
    {
        $model_name = "Royal Enfield";
        echo "Bike Model: " .$model_name;
        echo "<br>";
    }
    function two()
    {
        echo "This is goutham";
    }
}
$obj = new bike();
$obj->model();
$obj->two();
?>

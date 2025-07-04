<?php
interface shape {
    public function calc_area();
    public function display_area();
}

class Circle implements shape {
    private $r;
    private $area;

    
    public function __construct($radius) {
        $this->r = $radius;
    }

    public function calc_area() {
        $pi = 3.14;
        $this->area = $pi * $this->r * $this->r;
    }

    public function display_area() {
        echo "ENTERED RADIUS OF CIRCLE = " . $this->r . "<br>";
        echo "AREA OF CIRCLE = " . $this->area . "<br>";
    }
}

class Rectangle implements shape {
    private $length;
    private $breadth;
    private $area;

    
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function calc_area() {
        $this->area = $this->length * $this->breadth;
    }

    public function display_area() {
        echo "ENTERED LENGTH = " . $this->length . "<br>";
        echo "ENTERED BREADTH = " . $this->breadth . "<br>";
        echo "AREA OF RECTANGLE = " . $this->area . "<br>";
    }
}


$circle = new Circle(5.5);       
$rectangle = new Rectangle(4, 6); 

$circle->calc_area();
$circle->display_area();

$rectangle->calc_area();
$rectangle->display_area();
?>


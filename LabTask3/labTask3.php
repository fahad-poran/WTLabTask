<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class myCircle {
  // Properties
  public $number;
  public $area;

  // Methods
  function set_radius($number) {
    $this->number = $number;
  }
  function get_radius() {
    return $this->number;
  }
  function set_area($area) {
    $this->area = $area;
  }
  function get_area() {
    return $this->area;
  }
}

$radius = new Circle();
$apple->set_radius(1);
$apple->set_area(1);
echo "Radius: " . $apple->get_radius();
echo "<br>";
echo "Area: " .  $apple->get_area();
?>
    
    
    ?>
</body>
</html>
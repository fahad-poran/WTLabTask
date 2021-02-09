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

class MyCircle {
   // private variable
   private $radius;   // radius of the circle
 
   /**
    * Constructor to allocate an instance and initialize its private variables.
    * @param number $radius: radius of the circle, with default value of 1
    */
   public function __construct($radius = 1) {
      $this->radius = $radius;
         // "$this" refers to the current instance.
      echo 'Constructed an instance of ', __CLASS__, ' with radius=', $this->radius, ".\n";
         // "__CLASS__" is a special magic constant that stores the class name.
   }
 
   /**
    * Destructor - invoked just before the instance is deallocated.
    */
   public function __destruct() {
      echo 'Destructed instance ', $this, ' of ', __CLASS__, ".\n";
   }
 
   /**
    * Getter for radius.
    * @return number: radius of the circle.
    */
   public function getRadius() { return $this->radius; }
         // You cannot omit $this-> (unlike Java).
 
   /**
    * Setter for radius.
    * @param number $radius: radius of the circle.
    */
   public function setRadius($radius) { $this->radius = $radius; }
 
   /**
    * Return a string representation of this instance.
    * @return string: in the form of 'MyCircle[radius=r]'.
    */
   public function __toString() {
      return __CLASS__ . '[radius=' . $this->radius . ']';
   }
 
   /**
    * Return the area of this circle.
    * @return number: area of the circle.
    */
   public function getArea() {
      return $this->radius * $this->radius * pi();
   }
}
?>
</body>
</html>
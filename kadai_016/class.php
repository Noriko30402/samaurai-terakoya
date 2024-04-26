<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>kadai_016 calss</title>
</head>
<body>
  <p>
    <?php
    class Food {
      public $name;
      public $price;
     
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;   
         }
      public function show_price(){
        echo $this-> price.'<br>';
      }
    }
     
    $potato = new Food('potato', 250);
      print_r($potato);

    class Animal{
      public $name;
      public $height;
      public $weight;
 
      public function __construct(string $name, int $height,int $weight) {
        $this->name = $name;
        $this->height = $height;   
        $this->weight= $weight;
         }
         
      public function show_height(){
       echo $this->height.'<br>';
      }
    }
      $dog = new Animal ('dog',60,5000);
      print_r($dog);
      
   $potato->show_price();
   $dog->show_height();
    ?>
  
</p>
</body>
</html>
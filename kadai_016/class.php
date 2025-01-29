<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
      <?php

      // Food
      class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price){
          $this->name=$name;
          $this->price=$price;
        }

        public function show_price(){
          echo $this->price.'<br>';
        }
      }

      $potato=new Food('potato',250);
      print_r($potato);

      // Animal
      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name,int $height,int $weight){
          $this->name =$name;
          $this->height=$height;
          $this->weight=$weight;
        }

        public function show_height(){
          echo $this->height.'<br>';
        }
      }

      $dog= new Animal('dog',60,5000);
      print_r($dog);


      ?>
  </p>
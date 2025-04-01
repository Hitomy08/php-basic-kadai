<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //Foodクラス==============================
    class Food
    {
      private $name;
      private $price;

      public function show_price()
      {
        echo $this->price;
      }

      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    $potato = new Food('potato', 250);

    print_r($potato);

    echo '<br>';

    //Animalクラス==============================
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function show_height()
      {
        echo $this->height;
      }

      public function __construct($name, $height, $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    $dog = new Animal('dog', 60, 5000);
    print_r($dog);

    echo '<br>';

    echo $potato->show_price();
    echo '<br>';
    echo $dog->show_height();

    ?>
  </p>
</body>

</html>
<?php 

class FirstClass {
  const EXAMPLE = "You can't change this!";
  public static $variable = "This is a variable and not not a CONST";

  public static function test() {
    $testing = "this is a test!";
    return $testing;
  }
}

class SecondClass extends FirstClass {
  public static $staticProperty = "A static property!";

  public static function anotherTest() {
    echo parent::EXAMPLE;
    echo self::$staticProperty;
  }
}

$firstClass = new FirstClass();
echo $firstClass::$variable;

$a = SecondClass::anotherTest();
echo $a;
?>

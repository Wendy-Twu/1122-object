<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>物件導向</h1>3
<?php

class Animal{

public $type='animal';
public $name='John';
public $hair_color='black';

function _construct($type,$mame,$hair_color){
  $this->type=$type;
  $this->name=$name;
  $this->hair_color=$hair__color;
}

function run(){
    echo $this->name. 'is running';
}

function speed(){
    echo $this->name. 'is running at 20km/h';
}
public function getName(){
    return $this->name;
  } 

  public function setName($name){
        $this->name=$name;
  } 

}
//實例化(instance)
$cat=new Animal('cat','Kitty','white');

//echo $cat->type;
echo $cat->getName();
//echo $cat->hair_color;
echo $cat->run();
echo $cat->speed();
//print_r($cat->feet);

echo $cat->setName('Mary');
echo $cat->getName();

?>
<h1>繼承</h1>
<?php

class Cat extends Animal implements Behavior{
    protected $type='cat';
    public $name='Judy';
    function _construct($hair__color){
        $this->hair_color=$hair_color;
    }
     function jump(){
        echo $this->name . "jumpping 2m";
     }
}

Interface Behavior{
    public function run();
    public function speed();
    public function jump();
}




$mycat=new Cat('white');

echo $mycat->getName();
echo  "<br>";
echo $mycat->run();
echo  "<br>";
echo $mycat->speed();
echo  "<br>";
$mycat->getName('judy');
echo  "<br>";
echo $mycat->getName();

echo  "<br>";






?>    
</body>
</html>
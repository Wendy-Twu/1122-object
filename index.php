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

}
//實例化(instance)
$cat=new Animal('cat','Kitty','white');

echo $cat->type;
echo $cat->name;
echo $cat->hair_color;
echo $cat->run();
echo $cat->speed();








?>    
</body>
</html>
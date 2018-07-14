<?php
class name
{
    private $name = 'sarthak';
}
$getNameCallback = function() {
    return $this->name;
};
//PHP5 style
$binding = $getNameCallback->bindTo(new name,'name');
echo $binding()."<br>";
//PHP7 style
echo $getNameCallback->call(new name)."<br>";
?>
<?php
class Addition {
  function compute($first, $second, $third = 0) {
    return $first+$second+$third;
  }
}
class Substraction extends Addition {
  function compute($first, $second, $third = 0) {
    return $first-$second-$third;
  }
}

$obj = new Substraction;
echo $obj->compute(8,2,2);


?>
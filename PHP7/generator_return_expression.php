<?php
$gen = (function() {
    yield 1;
    yield 2;
    return 3;
})();
foreach ($gen as $val) {
    echo $val."<br>";
}
echo $gen->getReturn()."<br>";
?>
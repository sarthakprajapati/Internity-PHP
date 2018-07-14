<?php
function gen()
{
    yield "My";
    yield "name";
    yield from gen2();
}
function gen2()
{
    yield "is";
    yield "Sarthak";
}
foreach (gen() as $val)
{
    echo $val." ";
}
?>


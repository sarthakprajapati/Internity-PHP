<?php 

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

//Functions within function

function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
} 
/* We can't call bar() yet
   since it doesn't exist. */
foo();
 
/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */
bar();


//

?>
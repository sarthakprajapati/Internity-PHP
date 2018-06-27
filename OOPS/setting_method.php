<?php 

class ClassName 
{
	public $font_color;
	public $font_size;
	public $string_name;
	public function text($font_size,$font_color,$string_name)
	{
		 echo "<p style=font-size:".$font_size.";color:".$font_color.";>".$string_name."</p>";
	}	
}
$obj = new ClassName;
echo $obj->text("25","blue","Sarthak");
 ?>
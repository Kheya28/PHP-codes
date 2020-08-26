<?php

class animal
{
	public $x;
	public $y;

    public function hello()
    {
    		echo "huh";
    }
	public function _an($x,$y)
	{
		$this->x=$x;
		$this->y=$y;
	}

	public function _dis()
	{
		$ans=$this->x*$this->y;
		echo "$ans";
	}

}

$obj=new animal();

$obj->hello();
echo "<br>";
$obj->_an(2,3);
$obj->_dis();
?>
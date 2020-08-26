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

	public function _dis($p)
	{
		$dx=$this->x - $p->x;
		$dy=$this->y - $p->y;
		return sqrt(($dx * $dx) + ($dy * $dy));
	}

	public function _str()
	{
		return "(".$this->x.")";
	}

}

$obj=new animal();

$obj->hello();
?>
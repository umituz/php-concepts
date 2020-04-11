<?php 

class Student
{
	public $name = "Ümit UZ";
	public $attendance = true;
	public $totalMax = 91;

	public function studentDetails($name=NULL,$attendance=NULL,$totalMax=NULL)
	{
		if($name == NULL && $attendance == NULL && $totalMax == NULL)
		{
			$this->name;
			$this->attendance;
			$this->totalMax;
			return $this;
		}
		$this->name = $name;
		$this->attendance = $attendance;
		$this->totalMax = $totalMax;
		//return $this;
	}
}





<?php

namespace App\Controller;

class ControllerOverlapping
{
	public $data;

	public function __construct()
	{
		$this->data='';
	}

	public function data()
	{
		return $this->data;
	}

	public function value_a()
	{
		$this->data='Value A';
		return $this->data;
	}

	public function value_b()
	{
		$this->data='Value B';
		return $this->data;
	}

	public function value_C()
	{
		$this->data='Value C';
		return $this->data;
	}

}

<?php

namespace App\Controller;

use Ramsey\Uuid\Uuid;

class ControllerConcurrency
{
	public $data;

	public function __construct()
	{
		$this->data=array();
	}

	public function start()
	{
		$key=Uuid::uuid4()->toString();
		return $key;
	}

	public function end($key)
	{
		$data=$this->data[$key];
		unset($this->data[$key]);
		return $data;
	}

	public function data()
	{
		return $this->data;
	}

	public function value_a()
	{
		$key=$this->start();
		$this->data[$key]='Value A';
		$data=$this->end($key);
		return $data;
	}

	public function value_b()
	{
		$key=Uuid::uuid4()->toString();
		$this->data[$key]='Value B';
		$data=$this->end($key);
		return $data;
	}

	public function value_C()
	{
		$key=Uuid::uuid4()->toString();
		$this->data[$key]='Value C';
		$data=$this->end($key);
		return $data;
	}

}

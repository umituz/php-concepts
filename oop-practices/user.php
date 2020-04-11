<?php

class User
{
	public $name = "Ümit";
	private $password = "c54dsa6321zdfs5";
	protected $email = "umituz998@gmail.com";

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
}

class Admin extends User
{
	function __construct()
	{
		echo  $this->email;
	}
}

$admin = new Admin;

<?php namespace App\Controllers;

class Athu extends BaseController
{
	public function loginForm() {
		
		return view('auths/login');
	}
	public function registerForm() {
		
		return view('auths/register');
	}
	public function listPizza() {
		
		return view('index');
	}


	//--------------------------------------------------------------------

}

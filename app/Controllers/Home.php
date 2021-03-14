<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world', ['data'=>'Hello Juga']); // coba parsing data berupa string hello juga
	}
}

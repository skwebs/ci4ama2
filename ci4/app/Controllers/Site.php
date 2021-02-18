<?php

namespace App\Controllers;

class Site extends BaseController
{
	public function index()
	{
		$data = [
			'title' => ':: Home | Anshu Memorial Academy ::',
			'description' => 'Anshu Memorial Academy CBSE Pattern Based an English Medium School from Std. Play to 8th.'
		];
		return view('site/home',$data);
	}
	
	public function index2()
	{
		return view('welcome_message');
	}
}
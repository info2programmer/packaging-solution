<?php

namespace App\Controllers\CRM;
use App\Controllers\BaseController;

class Authentication extends BaseController
{
	public function index()
	{
		// echo base_url();
		return view('crm/login-view');
	}
}

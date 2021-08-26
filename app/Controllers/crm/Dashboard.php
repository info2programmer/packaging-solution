<?php

namespace App\Controllers\CRM;
use App\Controllers\BaseController;


class Dashboard extends BaseController
{
	public function index()
	{
        // $uri = service('uri');
		// echo base_url();
		return view('crm/dashboard-view',['uri' => service('uri')]);
	}
}

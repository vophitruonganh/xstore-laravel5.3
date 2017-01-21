<?php

namespace Xstore\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
class Controller extends BaseController
{
	/**
	 * Class Constructor
	 */
	public function __construct()
	{

	}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

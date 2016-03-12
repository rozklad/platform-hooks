<?php namespace Sanatorium\Hooks\Controllers\Admin;

use Platform\Access\Controllers\AdminController;
use App;

class HooksController extends AdminController {

	/**
	 * Constructor.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Display a listing of customer.
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$hooks = App::make('sanatorium.hooks.manager')->getHooks();

		return $hooks;
	}


}

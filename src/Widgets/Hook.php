<?php namespace Sanatorium\Hooks\Widgets;

use App;
use Sanatorium\Hooks\Repositories\HookRepository;
use Widget;

class Hook {

	public function show($position = null, $object = null)
	{
		$hook = App::make('sanatorium.hooks.manager')->getHook($position);
		
		$result = null;

		foreach( $hook as $item ) {
			// $object
			$result .= Widget::make($item, [$object]);
		}

		return $result;
	}
}
<?php namespace Sanatorium\Hooks\Repositories;

class HookRepository
{
    protected $hooks;

    public function registerHook($position = null, $widget = null)
    {
        $this->hooks[$position][] = $widget;
    }

    public function getHook($position = null, $args = [])
    {
    	if ( isset($this->hooks[$position]) ) {
        	return $this->hooks[$position];
    	}
    	return [];
    }

    public function getHooks($position = null)
    {
        if ( !$position )
            return $this->hooks;

        return $this->getHook($position);
    }
}
